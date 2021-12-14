<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Type\TypeApi;
use BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Audio\AudioApi;
use BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Video\VideoApi;
use BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Subtitle\SubtitleApi;
use BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Image\ImageApi;
use BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Representations\RepresentationsApi;
use BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Contentprotection\ContentprotectionApi;

class AdaptationsetsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var TypeApi */
    public $type;

    /** @var AudioApi */
    public $audio;

    /** @var VideoApi */
    public $video;

    /** @var SubtitleApi */
    public $subtitle;

    /** @var ImageApi */
    public $image;

    /** @var RepresentationsApi */
    public $representations;

    /** @var ContentprotectionApi */
    public $contentprotection;

    /**
     * AdaptationsetsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->type = new TypeApi(null, $this->httpWrapper);
        $this->audio = new AudioApi(null, $this->httpWrapper);
        $this->video = new VideoApi(null, $this->httpWrapper);
        $this->subtitle = new SubtitleApi(null, $this->httpWrapper);
        $this->image = new ImageApi(null, $this->httpWrapper);
        $this->representations = new RepresentationsApi(null, $this->httpWrapper);
        $this->contentprotection = new ContentprotectionApi(null, $this->httpWrapper);
    }

    /**
     * List all AdaptationSets
     *
     * @param string $manifestId
     * @param string $periodId
     * @param AdaptationSetListQueryParams|null $queryParams
     * @return AdaptationSetPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $manifestId, string $periodId, AdaptationSetListQueryParams $queryParams = null) : AdaptationSetPaginationResponse
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'period_id' => $periodId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/manifests/dash/{manifest_id}/periods/{period_id}/adaptationsets', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, AdaptationSetPaginationResponse::class);
    }
}
