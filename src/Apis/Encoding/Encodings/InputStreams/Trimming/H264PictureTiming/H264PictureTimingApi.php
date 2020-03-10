<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\Trimming\H264PictureTiming;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class H264PictureTimingApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * H264PictureTimingApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Add H264 Picture Timing Trimming Input Stream
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\H264PictureTimingTrimmingInputStream $h264PictureTimingTrimmingInputStream
     * @return \BitmovinApiSdk\Models\H264PictureTimingTrimmingInputStream
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, \BitmovinApiSdk\Models\H264PictureTimingTrimmingInputStream $h264PictureTimingTrimmingInputStream) : \BitmovinApiSdk\Models\H264PictureTimingTrimmingInputStream
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/encodings/{encoding_id}/input-streams/trimming/h264-picture-timing', $pathParams,  null, $h264PictureTimingTrimmingInputStream, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\H264PictureTimingTrimmingInputStream::class);
    }

    /**
     * Delete H264 Picture Timing Trimming Input Stream
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/encodings/{encoding_id}/input-streams/trimming/h264-picture-timing/{input_stream_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * H264 Picture Timing Trimming Input Stream Details
     *
     * @param string $encodingId
     * @param string $inputStreamId
     * @return \BitmovinApiSdk\Models\H264PictureTimingTrimmingInputStream
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $inputStreamId) : \BitmovinApiSdk\Models\H264PictureTimingTrimmingInputStream
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'input_stream_id' => $inputStreamId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/input-streams/trimming/h264-picture-timing/{input_stream_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\H264PictureTimingTrimmingInputStream::class);
    }

    /**
     * List H264 Picture Timing Trimming Input Streams
     *
     * @param string $encodingId
     * @param H264PictureTimingTrimmingInputStreamListQueryParams|null $queryParams
     * @return H264PictureTimingTrimmingInputStreamPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, H264PictureTimingTrimmingInputStreamListQueryParams $queryParams = null) : H264PictureTimingTrimmingInputStreamPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/input-streams/trimming/h264-picture-timing', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, H264PictureTimingTrimmingInputStreamPaginationResponse::class);
    }
}
