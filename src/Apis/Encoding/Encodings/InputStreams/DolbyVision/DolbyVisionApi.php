<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\DolbyVision;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class DolbyVisionApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * DolbyVisionApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Add Dolby Vision input stream
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\DolbyVisionInputStream $dolbyVisionInputStream
     * @return \BitmovinApiSdk\Models\DolbyVisionInputStream
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, \BitmovinApiSdk\Models\DolbyVisionInputStream $dolbyVisionInputStream) : \BitmovinApiSdk\Models\DolbyVisionInputStream
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/encodings/{encoding_id}/input-streams/dolby-vision', $pathParams,  null, $dolbyVisionInputStream, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\DolbyVisionInputStream::class);
    }

    /**
     * Delete Dolby Vision input stream
     *
     * @param string $encodingId
     * @param string $dolbyVisionInputStreamId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $encodingId, string $dolbyVisionInputStreamId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'dolby_vision_input_stream_id' => $dolbyVisionInputStreamId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/encodings/{encoding_id}/input-streams/dolby-vision/{dolby_vision_input_stream_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Dolby Vision input stream details
     *
     * @param string $encodingId
     * @param string $dolbyVisionInputStreamId
     * @return \BitmovinApiSdk\Models\DolbyVisionInputStream
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $dolbyVisionInputStreamId) : \BitmovinApiSdk\Models\DolbyVisionInputStream
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'dolby_vision_input_stream_id' => $dolbyVisionInputStreamId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/input-streams/dolby-vision/{dolby_vision_input_stream_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\DolbyVisionInputStream::class);
    }

    /**
     * List Dolby Vision input stream
     *
     * @param string $encodingId
     * @param DolbyVisionInputStreamListQueryParams|null $queryParams
     * @return DolbyVisionInputStreamPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, DolbyVisionInputStreamListQueryParams $queryParams = null) : DolbyVisionInputStreamPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/input-streams/dolby-vision', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, DolbyVisionInputStreamPaginationResponse::class);
    }
}
