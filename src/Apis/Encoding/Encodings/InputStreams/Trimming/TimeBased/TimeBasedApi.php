<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\Trimming\TimeBased;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class TimeBasedApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * TimeBasedApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Add Time-Based Trimming Input Stream
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\TimeBasedTrimmingInputStream $timeBasedTrimmingInputStream
     * @return \BitmovinApiSdk\Models\TimeBasedTrimmingInputStream
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, \BitmovinApiSdk\Models\TimeBasedTrimmingInputStream $timeBasedTrimmingInputStream) : \BitmovinApiSdk\Models\TimeBasedTrimmingInputStream
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];
        $response = $this->httpWrapper->request('POST','/encoding/encodings/{encoding_id}/input-streams/trimming/time-based', $pathParams,  null, $timeBasedTrimmingInputStream, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\TimeBasedTrimmingInputStream::class);
    }

    /**
     * Delete Time-Based Trimming Input Stream
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
        $response = $this->httpWrapper->request('DELETE','/encoding/encodings/{encoding_id}/input-streams/trimming/time-based/{input_stream_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Time-Based Trimming Input Stream Details
     *
     * @param string $encodingId
     * @param string $inputStreamId
     * @return \BitmovinApiSdk\Models\TimeBasedTrimmingInputStream
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $inputStreamId) : \BitmovinApiSdk\Models\TimeBasedTrimmingInputStream
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'input_stream_id' => $inputStreamId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/input-streams/trimming/time-based/{input_stream_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\TimeBasedTrimmingInputStream::class);
    }

    /**
     * List Time-Based Trimming Input Streams
     *
     * @param string $encodingId
     * @param TimeBasedTrimmingInputStreamListQueryParams|null $queryParams
     * @return TimeBasedTrimmingInputStreamPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, TimeBasedTrimmingInputStreamListQueryParams $queryParams = null) : TimeBasedTrimmingInputStreamPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/input-streams/trimming/time-based', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, TimeBasedTrimmingInputStreamPaginationResponse::class);
    }
}
