<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ProgressiveTs\Id3\PlainText;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ProgressiveTs\Id3\PlainText\Customdata\CustomdataApi;

class PlainTextApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * PlainTextApi constructor.
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
     * Add Plain Text ID3 Tag to Progressive TS Muxing
     *
     * @param string $encodingId
     * @param string $muxingId
     * @param \BitmovinApiSdk\Models\PlaintextId3Tag $plaintextId3Tag
     * @return \BitmovinApiSdk\Models\PlaintextId3Tag
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, string $muxingId, \BitmovinApiSdk\Models\PlaintextId3Tag $plaintextId3Tag) : \BitmovinApiSdk\Models\PlaintextId3Tag
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
        ];
        $response = $this->httpWrapper->request('POST','/encoding/encodings/{encoding_id}/muxings/progressive-ts/{muxing_id}/id3/plain-text', $pathParams,  null, $plaintextId3Tag, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\PlaintextId3Tag::class);
    }

    /**
     * Delete Plain Text ID3 Tag of Progressive TS Muxing
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
        $response = $this->httpWrapper->request('DELETE','/encoding/encodings/{encoding_id}/muxings/progressive-ts/{muxing_id}/id3/plain-text/{id3_tag_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Plain Text ID3 Tag Details of Progressive TS Muxing
     *
     * @param string $encodingId
     * @param string $muxingId
     * @param string $id3TagId
     * @return \BitmovinApiSdk\Models\PlaintextId3Tag
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $muxingId, string $id3TagId) : \BitmovinApiSdk\Models\PlaintextId3Tag
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
            'id3_tag_id' => $id3TagId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/muxings/progressive-ts/{muxing_id}/id3/plain-text/{id3_tag_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\PlaintextId3Tag::class);
    }

    /**
     * List Plain Text ID3 Tags of Progressive TS Muxing
     *
     * @param string $encodingId
     * @param string $muxingId
     * @param PlaintextId3TagListQueryParams|null $queryParams
     * @return PlaintextId3TagPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, string $muxingId, PlaintextId3TagListQueryParams $queryParams = null) : PlaintextId3TagPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/muxings/progressive-ts/{muxing_id}/id3/plain-text', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, PlaintextId3TagPaginationResponse::class);
    }
}
