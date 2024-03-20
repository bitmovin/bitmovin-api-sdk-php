<?php

namespace BitmovinApiSdk\Apis\Streams;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Streams\Video\VideoApi;
use BitmovinApiSdk\Apis\Streams\Live\LiveApi;
use BitmovinApiSdk\Apis\Streams\Config\ConfigApi;
use BitmovinApiSdk\Apis\Streams\Search\SearchApi;
use BitmovinApiSdk\Apis\Streams\SigningKeys\SigningKeysApi;

class StreamsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var VideoApi */
    public $video;

    /** @var LiveApi */
    public $live;

    /** @var ConfigApi */
    public $config;

    /** @var SearchApi */
    public $search;

    /** @var SigningKeysApi */
    public $signingKeys;

    /**
     * StreamsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->video = new VideoApi(null, $this->httpWrapper);
        $this->live = new LiveApi(null, $this->httpWrapper);
        $this->config = new ConfigApi(null, $this->httpWrapper);
        $this->search = new SearchApi(null, $this->httpWrapper);
        $this->signingKeys = new SigningKeysApi(null, $this->httpWrapper);
    }
}
