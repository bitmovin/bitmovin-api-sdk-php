<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\Trimming\TimecodeTrack;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class TimecodeTrackApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * TimecodeTrackApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Add Timecode Track Trimming Input Stream
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\TimecodeTrackTrimmingInputStream $timecodeTrackTrimmingInputStream
     * @return \BitmovinApiSdk\Models\TimecodeTrackTrimmingInputStream
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, \BitmovinApiSdk\Models\TimecodeTrackTrimmingInputStream $timecodeTrackTrimmingInputStream) : \BitmovinApiSdk\Models\TimecodeTrackTrimmingInputStream
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/encodings/{encoding_id}/input-streams/trimming/timecode-track', $pathParams,  null, $timecodeTrackTrimmingInputStream, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\TimecodeTrackTrimmingInputStream::class);
    }

    /**
     * Delete Timecode Track Trimming Input Stream
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/encodings/{encoding_id}/input-streams/trimming/timecode-track/{input_stream_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Timecode Track Trimming Input Stream Details
     *
     * @param string $encodingId
     * @param string $inputStreamId
     * @return \BitmovinApiSdk\Models\TimecodeTrackTrimmingInputStream
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $inputStreamId) : \BitmovinApiSdk\Models\TimecodeTrackTrimmingInputStream
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'input_stream_id' => $inputStreamId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/input-streams/trimming/timecode-track/{input_stream_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\TimecodeTrackTrimmingInputStream::class);
    }

    /**
     * List Timecode Track Trimming Input Streams
     *
     * @param string $encodingId
     * @param TimecodeTrackTrimmingInputStreamListQueryParams|null $queryParams
     * @return TimecodeTrackTrimmingInputStreamPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, TimecodeTrackTrimmingInputStreamListQueryParams $queryParams = null) : TimecodeTrackTrimmingInputStreamPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/input-streams/trimming/timecode-track', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, TimecodeTrackTrimmingInputStreamPaginationResponse::class);
    }
}
