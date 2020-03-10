<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Filters;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class FiltersApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * FiltersApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Add Filters to Stream
     *
     * @param string $encodingId
     * @param string $streamId
     * @param \BitmovinApiSdk\Models\StreamFilter[] $streamFilter
     * @return \BitmovinApiSdk\Models\StreamFilterList
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, string $streamId, array $streamFilter) : \BitmovinApiSdk\Models\StreamFilterList
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'stream_id' => $streamId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/encodings/{encoding_id}/streams/{stream_id}/filters', $pathParams,  null, $streamFilter, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\StreamFilterList::class);
    }

    /**
     * Delete Specific Filter from Stream
     *
     * @param string $encodingId
     * @param string $streamId
     * @param string $filterId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $encodingId, string $streamId, string $filterId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'stream_id' => $streamId,
            'filter_id' => $filterId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/encodings/{encoding_id}/streams/{stream_id}/filters/{filter_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Delete All Filters from Stream
     *
     * @param string $encodingId
     * @param string $streamId
     * @return \BitmovinApiSdk\Models\BitmovinResponseList
     * @throws BitmovinApiException
     */
    public function deleteAll(string $encodingId, string $streamId) : \BitmovinApiSdk\Models\BitmovinResponseList
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'stream_id' => $streamId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/encodings/{encoding_id}/streams/{stream_id}/filters', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponseList::class);
    }

    /**
     * List the filters of a stream
     *
     * @param string $encodingId
     * @param string $streamId
     * @param StreamFilterListListQueryParams|null $queryParams
     * @return \BitmovinApiSdk\Models\StreamFilterList
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, string $streamId, StreamFilterListListQueryParams $queryParams = null) : \BitmovinApiSdk\Models\StreamFilterList
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'stream_id' => $streamId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/streams/{stream_id}/filters', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\StreamFilterList::class);
    }
}
