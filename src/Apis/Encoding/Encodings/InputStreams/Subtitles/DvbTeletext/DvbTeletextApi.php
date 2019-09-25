<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\Subtitles\DvbTeletext;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class DvbTeletextApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * DvbTeletextApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Add DVB-Teletext Input Stream
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\DvbTeletextInputStream $dvbTeletextInputStream
     * @return \BitmovinApiSdk\Models\DvbTeletextInputStream
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, \BitmovinApiSdk\Models\DvbTeletextInputStream $dvbTeletextInputStream) : \BitmovinApiSdk\Models\DvbTeletextInputStream
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];
        $response = $this->httpWrapper->request('POST','/encoding/encodings/{encoding_id}/input-streams/subtitles/dvb-teletext', $pathParams,  null, $dvbTeletextInputStream, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\DvbTeletextInputStream::class);
    }

    /**
     * Delete DVB-Teletext Input Stream
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
        $response = $this->httpWrapper->request('DELETE','/encoding/encodings/{encoding_id}/input-streams/subtitles/dvb-teletext/{input_stream_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * DVB-Teletext Input Stream Details
     *
     * @param string $encodingId
     * @param string $inputStreamId
     * @return \BitmovinApiSdk\Models\DvbTeletextInputStream
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $inputStreamId) : \BitmovinApiSdk\Models\DvbTeletextInputStream
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'input_stream_id' => $inputStreamId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/input-streams/subtitles/dvb-teletext/{input_stream_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\DvbTeletextInputStream::class);
    }

    /**
     * List DVB-Teletext Input Streams
     *
     * @param string $encodingId
     * @param DvbTeletextInputStreamListQueryParams|null $queryParams
     * @return DvbTeletextInputStreamPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, DvbTeletextInputStreamListQueryParams $queryParams = null) : DvbTeletextInputStreamPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/input-streams/subtitles/dvb-teletext', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, DvbTeletextInputStreamPaginationResponse::class);
    }
}
