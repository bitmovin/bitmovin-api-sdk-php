<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams\BurnInSubtitles\Srt;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class SrtApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * SrtApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Burn-In SRT Subtitle into Stream
     *
     * @param string $encodingId
     * @param string $streamId
     * @param \BitmovinApiSdk\Models\BurnInSubtitleSrt $burnInSubtitleSrt
     * @return \BitmovinApiSdk\Models\BurnInSubtitleSrt
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, string $streamId, \BitmovinApiSdk\Models\BurnInSubtitleSrt $burnInSubtitleSrt) : \BitmovinApiSdk\Models\BurnInSubtitleSrt
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'stream_id' => $streamId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/encodings/{encoding_id}/streams/{stream_id}/burn-in-subtitles/srt', $pathParams,  null, $burnInSubtitleSrt, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BurnInSubtitleSrt::class);
    }

    /**
     * Delete Burn-In SRT Subtitle from Stream
     *
     * @param string $encodingId
     * @param string $streamId
     * @param string $subtitleId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $encodingId, string $streamId, string $subtitleId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'stream_id' => $streamId,
            'subtitle_id' => $subtitleId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/encodings/{encoding_id}/streams/{stream_id}/burn-in-subtitles/srt/{subtitle_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Get Burn-In SRT Subtitle Details
     *
     * @param string $encodingId
     * @param string $streamId
     * @param string $subtitleId
     * @return \BitmovinApiSdk\Models\BurnInSubtitleSrt
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $streamId, string $subtitleId) : \BitmovinApiSdk\Models\BurnInSubtitleSrt
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'stream_id' => $streamId,
            'subtitle_id' => $subtitleId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/streams/{stream_id}/burn-in-subtitles/srt/{subtitle_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BurnInSubtitleSrt::class);
    }

    /**
     * List the Burn-In SRT subtitles of a stream
     *
     * @param string $encodingId
     * @param string $streamId
     * @param BurnInSubtitleSrtListQueryParams|null $queryParams
     * @return BurnInSubtitleSrtPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, string $streamId, BurnInSubtitleSrtListQueryParams $queryParams = null) : BurnInSubtitleSrtPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'stream_id' => $streamId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/streams/{stream_id}/burn-in-subtitles/srt', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, BurnInSubtitleSrtPaginationResponse::class);
    }
}
