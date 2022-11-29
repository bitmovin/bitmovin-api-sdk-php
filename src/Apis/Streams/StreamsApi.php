<?php

namespace BitmovinApiSdk\Apis\Streams;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Streams\Video\VideoApi;
use BitmovinApiSdk\Apis\Streams\Live\LiveApi;

class StreamsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var VideoApi */
    public $video;

    /** @var LiveApi */
    public $live;

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
    }
}
