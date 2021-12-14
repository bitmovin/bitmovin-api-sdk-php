<?php

namespace BitmovinApiSdk\Apis\Encoding\Simple\Jobs\Vod;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class VodApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * VodApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Create a Simple Encoding VOD Job
     *
     * @param \BitmovinApiSdk\Models\SimpleEncodingVodJobRequest $simpleEncodingVodJobRequest
     * @return \BitmovinApiSdk\Models\SimpleEncodingVodJobResponse
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\SimpleEncodingVodJobRequest $simpleEncodingVodJobRequest) : \BitmovinApiSdk\Models\SimpleEncodingVodJobResponse
    {
        $response = $this->httpWrapper->request('POST', '/encoding/simple/jobs/vod', [],  null, $simpleEncodingVodJobRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\SimpleEncodingVodJobResponse::class);
    }

    /**
     * Simple Encoding VOD Job details
     *
     * @param string $simpleEncodingJobId
     * @return \BitmovinApiSdk\Models\SimpleEncodingVodJobResponse
     * @throws BitmovinApiException
     */
    public function get(string $simpleEncodingJobId) : \BitmovinApiSdk\Models\SimpleEncodingVodJobResponse
    {
        $pathParams = [
            'simple_encoding_job_id' => $simpleEncodingJobId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/simple/jobs/vod/{simple_encoding_job_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\SimpleEncodingVodJobResponse::class);
    }

    /**
     * List all Simple Encoding VOD Jobs
     *
     * @param SimpleEncodingVodJobResponseListQueryParams|null $queryParams
     * @return SimpleEncodingVodJobResponsePaginationResponse
     * @throws BitmovinApiException
     */
    public function list(SimpleEncodingVodJobResponseListQueryParams $queryParams = null) : SimpleEncodingVodJobResponsePaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/simple/jobs/vod', [], $queryParams, null, true);

        return ObjectMapper::map($response, SimpleEncodingVodJobResponsePaginationResponse::class);
    }
}
