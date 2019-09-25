<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\Captions\Cea608;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class Cea608Api
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * Cea608Api constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Add CEA 608 Input Stream
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\Cea608CaptionInputStream $cea608CaptionInputStream
     * @return \BitmovinApiSdk\Models\Cea608CaptionInputStream
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, \BitmovinApiSdk\Models\Cea608CaptionInputStream $cea608CaptionInputStream) : \BitmovinApiSdk\Models\Cea608CaptionInputStream
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];
        $response = $this->httpWrapper->request('POST','/encoding/encodings/{encoding_id}/input-streams/captions/cea608', $pathParams,  null, $cea608CaptionInputStream, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Cea608CaptionInputStream::class);
    }

    /**
     * Delete CEA 608 Input Stream
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
        $response = $this->httpWrapper->request('DELETE','/encoding/encodings/{encoding_id}/input-streams/captions/cea608/{input_stream_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * CEA 608 Input Stream Details
     *
     * @param string $encodingId
     * @param string $inputStreamId
     * @return \BitmovinApiSdk\Models\Cea608CaptionInputStream
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $inputStreamId) : \BitmovinApiSdk\Models\Cea608CaptionInputStream
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'input_stream_id' => $inputStreamId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/input-streams/captions/cea608/{input_stream_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Cea608CaptionInputStream::class);
    }

    /**
     * List CEA 608 Input Streams
     *
     * @param string $encodingId
     * @param Cea608CaptionInputStreamListQueryParams|null $queryParams
     * @return Cea608CaptionInputStreamPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, Cea608CaptionInputStreamListQueryParams $queryParams = null) : Cea608CaptionInputStreamPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/input-streams/captions/cea608', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, Cea608CaptionInputStreamPaginationResponse::class);
    }
}
