<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams\BurnInSubtitles\Dvbsub;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class DvbsubApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * DvbsubApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Burn-In DVB-SUB Subtitle into Stream
     *
     * @param string $encodingId
     * @param string $streamId
     * @param \BitmovinApiSdk\Models\BurnInSubtitleDvbSub $burnInSubtitleDvbSub
     * @return \BitmovinApiSdk\Models\BurnInSubtitleDvbSub
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, string $streamId, \BitmovinApiSdk\Models\BurnInSubtitleDvbSub $burnInSubtitleDvbSub) : \BitmovinApiSdk\Models\BurnInSubtitleDvbSub
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'stream_id' => $streamId,
        ];
        $response = $this->httpWrapper->request('POST','/encoding/encodings/{encoding_id}/streams/{stream_id}/burn-in-subtitles/dvbsub', $pathParams,  null, $burnInSubtitleDvbSub, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BurnInSubtitleDvbSub::class);
    }

    /**
     * Delete Burn-In DVB-SUB Subtitle from Stream
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
        $response = $this->httpWrapper->request('DELETE','/encoding/encodings/{encoding_id}/streams/{stream_id}/burn-in-subtitles/dvbsub/{subtitle_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Get Burn-In DVB-SUB Subtitle Details
     *
     * @param string $encodingId
     * @param string $streamId
     * @param string $subtitleId
     * @return \BitmovinApiSdk\Models\BurnInSubtitleDvbSub
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $streamId, string $subtitleId) : \BitmovinApiSdk\Models\BurnInSubtitleDvbSub
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'stream_id' => $streamId,
            'subtitle_id' => $subtitleId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/streams/{stream_id}/burn-in-subtitles/dvbsub/{subtitle_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BurnInSubtitleDvbSub::class);
    }

    /**
     * List the Burn-In DVB-SUB subtitles of a stream
     *
     * @param string $encodingId
     * @param string $streamId
     * @param BurnInSubtitleDvbSubListQueryParams|null $queryParams
     * @return BurnInSubtitleDvbSubPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, string $streamId, BurnInSubtitleDvbSubListQueryParams $queryParams = null) : BurnInSubtitleDvbSubPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'stream_id' => $streamId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/streams/{stream_id}/burn-in-subtitles/dvbsub', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, BurnInSubtitleDvbSubPaginationResponse::class);
    }
}
