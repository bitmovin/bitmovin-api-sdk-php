<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ProgressiveTs\Id3\Raw;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ProgressiveTs\Id3\Raw\Customdata\CustomdataApi;

class RawApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * RawApi constructor.
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
     * Add Raw ID3 Tag to Progressive TS muxing
     *
     * @param string $encodingId
     * @param string $muxingId
     * @param \BitmovinApiSdk\Models\RawId3Tag $rawId3Tag
     * @return \BitmovinApiSdk\Models\RawId3Tag
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, string $muxingId, \BitmovinApiSdk\Models\RawId3Tag $rawId3Tag) : \BitmovinApiSdk\Models\RawId3Tag
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/encodings/{encoding_id}/muxings/progressive-ts/{muxing_id}/id3/raw', $pathParams,  null, $rawId3Tag, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\RawId3Tag::class);
    }

    /**
     * Delete Raw ID3 Tag of Progressive TS muxing
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/encodings/{encoding_id}/muxings/progressive-ts/{muxing_id}/id3/raw/{id3_tag_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Raw ID3 Tag Details of Progressive TS muxing
     *
     * @param string $encodingId
     * @param string $muxingId
     * @param string $id3TagId
     * @return \BitmovinApiSdk\Models\RawId3Tag
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $muxingId, string $id3TagId) : \BitmovinApiSdk\Models\RawId3Tag
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
            'id3_tag_id' => $id3TagId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/muxings/progressive-ts/{muxing_id}/id3/raw/{id3_tag_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\RawId3Tag::class);
    }

    /**
     * List Raw ID3 Tags of Progressive TS muxing
     *
     * @param string $encodingId
     * @param string $muxingId
     * @param RawId3TagListQueryParams|null $queryParams
     * @return RawId3TagPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, string $muxingId, RawId3TagListQueryParams $queryParams = null) : RawId3TagPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/muxings/progressive-ts/{muxing_id}/id3/raw', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, RawId3TagPaginationResponse::class);
    }
}
