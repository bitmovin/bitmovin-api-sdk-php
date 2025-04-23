<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams\BurnInSubtitles\Assa;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class AssaApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * AssaApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Burn-In ASSA Subtitle into Stream
     *
     * @param string $encodingId
     * @param string $streamId
     * @param \BitmovinApiSdk\Models\BurnInSubtitleAssa $burnInSubtitleAssa
     * @return \BitmovinApiSdk\Models\BurnInSubtitleAssa
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, string $streamId, \BitmovinApiSdk\Models\BurnInSubtitleAssa $burnInSubtitleAssa) : \BitmovinApiSdk\Models\BurnInSubtitleAssa
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'stream_id' => $streamId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/encodings/{encoding_id}/streams/{stream_id}/burn-in-subtitles/assa', $pathParams,  null, $burnInSubtitleAssa, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BurnInSubtitleAssa::class);
    }

    /**
     * Delete Burn-In ASSA Subtitle from Stream
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/encodings/{encoding_id}/streams/{stream_id}/burn-in-subtitles/assa/{subtitle_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Get Burn-In ASSA Subtitle Details
     *
     * @param string $encodingId
     * @param string $streamId
     * @param string $subtitleId
     * @return \BitmovinApiSdk\Models\BurnInSubtitleAssa
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $streamId, string $subtitleId) : \BitmovinApiSdk\Models\BurnInSubtitleAssa
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'stream_id' => $streamId,
            'subtitle_id' => $subtitleId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/streams/{stream_id}/burn-in-subtitles/assa/{subtitle_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BurnInSubtitleAssa::class);
    }

    /**
     * List the Burn-In ASSA subtitles of a stream
     *
     * @param string $encodingId
     * @param string $streamId
     * @param BurnInSubtitleAssaListQueryParams|null $queryParams
     * @return BurnInSubtitleAssaPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, string $streamId, BurnInSubtitleAssaListQueryParams $queryParams = null) : BurnInSubtitleAssaPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'stream_id' => $streamId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/streams/{stream_id}/burn-in-subtitles/assa', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, BurnInSubtitleAssaPaginationResponse::class);
    }
}
