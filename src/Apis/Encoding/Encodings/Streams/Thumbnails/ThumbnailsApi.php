<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Thumbnails;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Thumbnails\Customdata\CustomdataApi;

class ThumbnailsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * ThumbnailsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->customdata = new CustomdataApi(null, $this->httpWrapper);
    }

    /**
     * Add Thumbnail
     *
     * @param string $encodingId
     * @param string $streamId
     * @param \BitmovinApiSdk\Models\Thumbnail $thumbnail
     * @return \BitmovinApiSdk\Models\Thumbnail
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, string $streamId, \BitmovinApiSdk\Models\Thumbnail $thumbnail) : \BitmovinApiSdk\Models\Thumbnail
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'stream_id' => $streamId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/encodings/{encoding_id}/streams/{stream_id}/thumbnails', $pathParams,  null, $thumbnail, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Thumbnail::class);
    }

    /**
     * Delete Thumbnail
     *
     * @param string $encodingId
     * @param string $streamId
     * @param string $thumbnailId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $encodingId, string $streamId, string $thumbnailId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'stream_id' => $streamId,
            'thumbnail_id' => $thumbnailId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/encodings/{encoding_id}/streams/{stream_id}/thumbnails/{thumbnail_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Thumbnail Details
     *
     * @param string $encodingId
     * @param string $streamId
     * @param string $thumbnailId
     * @return \BitmovinApiSdk\Models\Thumbnail
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $streamId, string $thumbnailId) : \BitmovinApiSdk\Models\Thumbnail
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'stream_id' => $streamId,
            'thumbnail_id' => $thumbnailId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/streams/{stream_id}/thumbnails/{thumbnail_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Thumbnail::class);
    }

    /**
     * List Thumbnails
     *
     * @param string $encodingId
     * @param string $streamId
     * @param ThumbnailListQueryParams|null $queryParams
     * @return ThumbnailPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, string $streamId, ThumbnailListQueryParams $queryParams = null) : ThumbnailPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'stream_id' => $streamId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/streams/{stream_id}/thumbnails', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, ThumbnailPaginationResponse::class);
    }
}
