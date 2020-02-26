<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ProgressiveTs\Id3\FrameId;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ProgressiveTs\Id3\FrameId\Customdata\CustomdataApi;

class FrameIdApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * FrameIdApi constructor.
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
     * Add Frame ID ID3 Tag to Progressive TS muxing
     *
     * @param string $encodingId
     * @param string $muxingId
     * @param \BitmovinApiSdk\Models\FrameIdId3Tag $frameIdId3Tag
     * @return \BitmovinApiSdk\Models\FrameIdId3Tag
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, string $muxingId, \BitmovinApiSdk\Models\FrameIdId3Tag $frameIdId3Tag) : \BitmovinApiSdk\Models\FrameIdId3Tag
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
        ];
        $response = $this->httpWrapper->request('POST','/encoding/encodings/{encoding_id}/muxings/progressive-ts/{muxing_id}/id3/frame-id', $pathParams,  null, $frameIdId3Tag, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\FrameIdId3Tag::class);
    }

    /**
     * Delete Frame ID ID3 Tag of Progressive TS muxing
     *
     * @param string $encodingId
     * @param string $muxingId
     * @param string $id3TagId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $encodingId, string $muxingId, string $id3TagId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
            'id3_tag_id' => $id3TagId,
        ];
        $response = $this->httpWrapper->request('DELETE','/encoding/encodings/{encoding_id}/muxings/progressive-ts/{muxing_id}/id3/frame-id/{id3_tag_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Frame ID ID3 Tag Details of Progressive TS muxing
     *
     * @param string $encodingId
     * @param string $muxingId
     * @param string $id3TagId
     * @return \BitmovinApiSdk\Models\FrameIdId3Tag
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $muxingId, string $id3TagId) : \BitmovinApiSdk\Models\FrameIdId3Tag
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
            'id3_tag_id' => $id3TagId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/muxings/progressive-ts/{muxing_id}/id3/frame-id/{id3_tag_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\FrameIdId3Tag::class);
    }

    /**
     * List Frame ID ID3 Tags of Progressive TS muxing
     *
     * @param string $encodingId
     * @param string $muxingId
     * @param FrameIdId3TagListQueryParams|null $queryParams
     * @return FrameIdId3TagPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, string $muxingId, FrameIdId3TagListQueryParams $queryParams = null) : FrameIdId3TagPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/muxings/progressive-ts/{muxing_id}/id3/frame-id', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, FrameIdId3TagPaginationResponse::class);
    }
}
