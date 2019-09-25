<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Qc\Psnr;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class PsnrApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * PsnrApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Activate PSNR quality metrics for the selected stream
     *
     * @param string $encodingId
     * @param string $streamId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, string $streamId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'stream_id' => $streamId,
        ];
        $response = $this->httpWrapper->request('POST','/encoding/encodings/{encoding_id}/streams/{stream_id}/qc/psnr', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Get Stream PSNR metrics
     *
     * @param string $encodingId
     * @param string $streamId
     * @param PsnrQualityMetricListQueryParams|null $queryParams
     * @return PsnrQualityMetricPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, string $streamId, PsnrQualityMetricListQueryParams $queryParams = null) : PsnrQualityMetricPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'stream_id' => $streamId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/streams/{stream_id}/qc/psnr', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, PsnrQualityMetricPaginationResponse::class);
    }
}
