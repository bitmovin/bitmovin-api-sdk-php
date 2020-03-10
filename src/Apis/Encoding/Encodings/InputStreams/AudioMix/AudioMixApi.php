<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\AudioMix;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class AudioMixApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * AudioMixApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Add audio mix input stream
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\AudioMixInputStream $audioMixInputStream
     * @return \BitmovinApiSdk\Models\AudioMixInputStream
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, \BitmovinApiSdk\Models\AudioMixInputStream $audioMixInputStream) : \BitmovinApiSdk\Models\AudioMixInputStream
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/encodings/{encoding_id}/input-streams/audio-mix', $pathParams,  null, $audioMixInputStream, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AudioMixInputStream::class);
    }

    /**
     * Delete audio mix input stream
     *
     * @param string $encodingId
     * @param string $inputStreamId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $encodingId, string $inputStreamId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'input_stream_id' => $inputStreamId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/encodings/{encoding_id}/input-streams/audio-mix/{input_stream_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Audio mix input stream details
     *
     * @param string $encodingId
     * @param string $inputStreamId
     * @return \BitmovinApiSdk\Models\AudioMixInputStream
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $inputStreamId) : \BitmovinApiSdk\Models\AudioMixInputStream
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'input_stream_id' => $inputStreamId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/input-streams/audio-mix/{input_stream_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AudioMixInputStream::class);
    }

    /**
     * List audio mix input stream
     *
     * @param string $encodingId
     * @param AudioMixInputStreamListQueryParams|null $queryParams
     * @return AudioMixInputStreamPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, AudioMixInputStreamListQueryParams $queryParams = null) : AudioMixInputStreamPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/input-streams/audio-mix', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, AudioMixInputStreamPaginationResponse::class);
    }
}
