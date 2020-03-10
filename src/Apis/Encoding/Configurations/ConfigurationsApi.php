<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Configurations\Type\TypeApi;
use BitmovinApiSdk\Apis\Encoding\Configurations\Video\VideoApi;
use BitmovinApiSdk\Apis\Encoding\Configurations\Audio\AudioApi;
use BitmovinApiSdk\Apis\Encoding\Configurations\Subtitles\SubtitlesApi;

class ConfigurationsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var TypeApi */
    public $type;

    /** @var VideoApi */
    public $video;

    /** @var AudioApi */
    public $audio;

    /** @var SubtitlesApi */
    public $subtitles;

    /**
     * ConfigurationsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->type = new TypeApi(null, $this->httpWrapper);
        $this->video = new VideoApi(null, $this->httpWrapper);
        $this->audio = new AudioApi(null, $this->httpWrapper);
        $this->subtitles = new SubtitlesApi(null, $this->httpWrapper);
    }

    /**
     * List all Codec Configurations
     *
     * @param CodecConfigurationListQueryParams|null $queryParams
     * @return CodecConfigurationPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(CodecConfigurationListQueryParams $queryParams = null) : CodecConfigurationPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/configurations', [], $queryParams, null, true);

        return ObjectMapper::map($response, CodecConfigurationPaginationResponse::class);
    }
}
