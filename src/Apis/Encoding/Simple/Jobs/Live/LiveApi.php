<?php

namespace BitmovinApiSdk\Apis\Encoding\Simple\Jobs\Live;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class LiveApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * LiveApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Create a Simple Encoding Live Job
     *
     * @param \BitmovinApiSdk\Models\SimpleEncodingLiveJobRequest $simpleEncodingLiveJobRequest
     * @return \BitmovinApiSdk\Models\SimpleEncodingLiveJobResponse
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\SimpleEncodingLiveJobRequest $simpleEncodingLiveJobRequest) : \BitmovinApiSdk\Models\SimpleEncodingLiveJobResponse
    {
        $response = $this->httpWrapper->request('POST', '/encoding/simple/jobs/live', [],  null, $simpleEncodingLiveJobRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\SimpleEncodingLiveJobResponse::class);
    }

    /**
     * Simple Encoding Live Job details
     *
     * @param string $simpleEncodingJobId
     * @return \BitmovinApiSdk\Models\SimpleEncodingLiveJobResponse
     * @throws BitmovinApiException
     */
    public function get(string $simpleEncodingJobId) : \BitmovinApiSdk\Models\SimpleEncodingLiveJobResponse
    {
        $pathParams = [
            'simple_encoding_job_id' => $simpleEncodingJobId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/simple/jobs/live/{simple_encoding_job_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\SimpleEncodingLiveJobResponse::class);
    }
}
