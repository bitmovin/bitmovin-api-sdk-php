<?php

namespace BitmovinApiSdk\Apis\Encoding\Live\StreamKeys;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class StreamKeysApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * StreamKeysApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Create new stream key
     *
     * @param \BitmovinApiSdk\Models\StreamKey $streamKey
     * @return \BitmovinApiSdk\Models\StreamKey
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\StreamKey $streamKey) : \BitmovinApiSdk\Models\StreamKey
    {
        $response = $this->httpWrapper->request('POST', '/encoding/live/stream-keys', [],  null, $streamKey, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\StreamKey::class);
    }

    /**
     * Delete Stream Key
     *
     * @param string $streamKeyId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $streamKeyId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'stream_key_id' => $streamKeyId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/live/stream-keys/{stream_key_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Stream Key details
     *
     * @param string $streamKeyId
     * @return \BitmovinApiSdk\Models\StreamKey
     * @throws BitmovinApiException
     */
    public function get(string $streamKeyId) : \BitmovinApiSdk\Models\StreamKey
    {
        $pathParams = [
            'stream_key_id' => $streamKeyId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/live/stream-keys/{stream_key_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\StreamKey::class);
    }

    /**
     * List Stream Keys
     *
     * @param StreamKeyListQueryParams|null $queryParams
     * @return StreamKeyPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(StreamKeyListQueryParams $queryParams = null) : StreamKeyPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/encoding/live/stream-keys', [], $queryParams, null, true);

        return ObjectMapper::map($response, StreamKeyPaginationResponse::class);
    }
}
