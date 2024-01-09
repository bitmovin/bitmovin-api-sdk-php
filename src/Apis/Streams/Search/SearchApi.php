<?php

namespace BitmovinApiSdk\Apis\Streams\Search;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class SearchApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * SearchApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Get paginated search results of VOD and Live streams
     *
     * @param StreamsResponseListQueryParams|null $queryParams
     * @return StreamsResponsePaginationResponse
     * @throws BitmovinApiException
     */
    public function list(StreamsResponseListQueryParams $queryParams = null) : StreamsResponsePaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/streams/search', [], $queryParams, null, true);

        return ObjectMapper::map($response, StreamsResponsePaginationResponse::class);
    }
}
