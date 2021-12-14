<?php

namespace BitmovinApiSdk\Apis\Encoding\Simple\Jobs;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Simple\Jobs\Vod\VodApi;

class JobsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var VodApi */
    public $vod;

    /**
     * JobsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->vod = new VodApi(null, $this->httpWrapper);
    }
}
