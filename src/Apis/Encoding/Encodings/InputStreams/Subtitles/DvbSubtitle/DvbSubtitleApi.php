<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\Subtitles\DvbSubtitle;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class DvbSubtitleApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * DvbSubtitleApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Add DVB Subtitle Input Stream
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\DvbSubtitleInputStream $dvbSubtitleInputStream
     * @return \BitmovinApiSdk\Models\DvbSubtitleInputStream
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, \BitmovinApiSdk\Models\DvbSubtitleInputStream $dvbSubtitleInputStream) : \BitmovinApiSdk\Models\DvbSubtitleInputStream
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/encodings/{encoding_id}/input-streams/subtitles/dvb-subtitle', $pathParams,  null, $dvbSubtitleInputStream, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\DvbSubtitleInputStream::class);
    }

    /**
     * Delete DVB Subtitle Input Stream
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/encodings/{encoding_id}/input-streams/subtitles/dvb-subtitle/{input_stream_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * DVB Subtitle Input Stream Details
     *
     * @param string $encodingId
     * @param string $inputStreamId
     * @return \BitmovinApiSdk\Models\DvbSubtitleInputStream
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $inputStreamId) : \BitmovinApiSdk\Models\DvbSubtitleInputStream
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'input_stream_id' => $inputStreamId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/input-streams/subtitles/dvb-subtitle/{input_stream_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\DvbSubtitleInputStream::class);
    }

    /**
     * List DVB Subtitle Input Streams
     *
     * @param string $encodingId
     * @param DvbSubtitleInputStreamListQueryParams|null $queryParams
     * @return DvbSubtitleInputStreamPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, DvbSubtitleInputStreamListQueryParams $queryParams = null) : DvbSubtitleInputStreamPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/input-streams/subtitles/dvb-subtitle', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, DvbSubtitleInputStreamPaginationResponse::class);
    }
}
