<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\DolbyAtmos;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class DolbyAtmosApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * DolbyAtmosApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Add Dolby Atmos input stream
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\DolbyAtmosIngestInputStream $dolbyAtmosIngestInputStream
     * @return \BitmovinApiSdk\Models\DolbyAtmosIngestInputStream
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, \BitmovinApiSdk\Models\DolbyAtmosIngestInputStream $dolbyAtmosIngestInputStream) : \BitmovinApiSdk\Models\DolbyAtmosIngestInputStream
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/encodings/{encoding_id}/input-streams/dolby-atmos', $pathParams,  null, $dolbyAtmosIngestInputStream, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\DolbyAtmosIngestInputStream::class);
    }

    /**
     * Delete Dolby Atmos input stream
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/encodings/{encoding_id}/input-streams/dolby-atmos/{input_stream_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Dolby Atmos input stream details
     *
     * @param string $encodingId
     * @param string $inputStreamId
     * @return \BitmovinApiSdk\Models\DolbyAtmosIngestInputStream
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $inputStreamId) : \BitmovinApiSdk\Models\DolbyAtmosIngestInputStream
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'input_stream_id' => $inputStreamId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/input-streams/dolby-atmos/{input_stream_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\DolbyAtmosIngestInputStream::class);
    }

    /**
     * List Dolby Atmos input streams
     *
     * @param string $encodingId
     * @param DolbyAtmosIngestInputStreamListQueryParams|null $queryParams
     * @return DolbyAtmosIngestInputStreamPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, DolbyAtmosIngestInputStreamListQueryParams $queryParams = null) : DolbyAtmosIngestInputStreamPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/input-streams/dolby-atmos', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, DolbyAtmosIngestInputStreamPaginationResponse::class);
    }
}
