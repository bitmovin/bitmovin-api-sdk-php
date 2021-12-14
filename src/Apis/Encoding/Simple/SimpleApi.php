<?php

namespace BitmovinApiSdk\Apis\Encoding\Simple;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Simple\Jobs\JobsApi;

class SimpleApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var JobsApi */
    public $jobs;

    /**
     * SimpleApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->jobs = new JobsApi(null, $this->httpWrapper);
    }
}
