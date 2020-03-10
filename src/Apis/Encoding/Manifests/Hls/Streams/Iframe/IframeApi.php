<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Hls\Streams\Iframe;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class IframeApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * IframeApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Add I-frame playlist to variant stream
     *
     * @param string $manifestId
     * @param string $streamId
     * @param \BitmovinApiSdk\Models\IFramePlaylist $iFramePlaylist
     * @return \BitmovinApiSdk\Models\IFramePlaylist
     * @throws BitmovinApiException
     */
    public function create(string $manifestId, string $streamId, \BitmovinApiSdk\Models\IFramePlaylist $iFramePlaylist) : \BitmovinApiSdk\Models\IFramePlaylist
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'stream_id' => $streamId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/manifests/hls/{manifest_id}/streams/{stream_id}/iframe', $pathParams,  null, $iFramePlaylist, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\IFramePlaylist::class);
    }

    /**
     * Delete I-frame playlist
     *
     * @param string $manifestId
     * @param string $streamId
     * @param string $iframeId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $manifestId, string $streamId, string $iframeId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'stream_id' => $streamId,
            'iframe_id' => $iframeId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/manifests/hls/{manifest_id}/streams/{stream_id}/iframe/{iframe_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * I-frame playlist Details
     *
     * @param string $manifestId
     * @param string $streamId
     * @param string $iframeId
     * @return \BitmovinApiSdk\Models\IFramePlaylist
     * @throws BitmovinApiException
     */
    public function get(string $manifestId, string $streamId, string $iframeId) : \BitmovinApiSdk\Models\IFramePlaylist
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'stream_id' => $streamId,
            'iframe_id' => $iframeId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/manifests/hls/{manifest_id}/streams/{stream_id}/iframe/{iframe_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\IFramePlaylist::class);
    }

    /**
     * List all I-frame playlists of a variant stream
     *
     * @param string $manifestId
     * @param string $streamId
     * @param IFramePlaylistListQueryParams|null $queryParams
     * @return IFramePlaylistPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $manifestId, string $streamId, IFramePlaylistListQueryParams $queryParams = null) : IFramePlaylistPaginationResponse
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'stream_id' => $streamId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/manifests/hls/{manifest_id}/streams/{stream_id}/iframe', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, IFramePlaylistPaginationResponse::class);
    }
}
