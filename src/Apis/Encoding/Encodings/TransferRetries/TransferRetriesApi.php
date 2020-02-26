<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\TransferRetries;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class TransferRetriesApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * TransferRetriesApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Starts transfer retry. A transfer retry is only possible within 72 hours.
     *
     * @param string $encodingId
     * @return \BitmovinApiSdk\Models\TransferRetry
     * @throws BitmovinApiException
     */
    public function create(string $encodingId) : \BitmovinApiSdk\Models\TransferRetry
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];
        $response = $this->httpWrapper->request('POST','/encoding/encodings/{encoding_id}/transfer-retries', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\TransferRetry::class);
    }

    /**
     * Transfer retry Details
     *
     * @param string $encodingId
     * @param string $transferRetryId
     * @return \BitmovinApiSdk\Models\TransferRetry
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $transferRetryId) : \BitmovinApiSdk\Models\TransferRetry
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'transfer_retry_id' => $transferRetryId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/transfer-retries/{transfer_retry_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\TransferRetry::class);
    }

    /**
     * List transfer-retries
     *
     * @param string $encodingId
     * @param TransferRetryListQueryParams|null $queryParams
     * @return TransferRetryPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, TransferRetryListQueryParams $queryParams = null) : TransferRetryPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/transfer-retries', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, TransferRetryPaginationResponse::class);
    }
}
