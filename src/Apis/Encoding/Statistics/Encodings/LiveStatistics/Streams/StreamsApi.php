<?php

namespace BitmovinApiSdk\Apis\Encoding\Statistics\Encodings\LiveStatistics\Streams;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class StreamsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * StreamsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * List Stream Infos of Live Statistics from an Encoding
     *
     * @param string $encodingId
     * @param StreamInfosListQueryParams|null $queryParams
     * @return StreamInfosPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, StreamInfosListQueryParams $queryParams = null) : StreamInfosPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/statistics/encodings/{encoding_id}/live-statistics/streams', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, StreamInfosPaginationResponse::class);
    }
}
