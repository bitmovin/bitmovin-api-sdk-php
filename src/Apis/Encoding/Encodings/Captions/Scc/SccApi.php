<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Captions\Scc;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Captions\Scc\Customdata\CustomdataApi;

class SccApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * SccApi constructor.
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
     * Convert SCC captions
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\ConvertSccCaption $convertSccCaption
     * @return \BitmovinApiSdk\Models\ConvertSccCaption
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, \BitmovinApiSdk\Models\ConvertSccCaption $convertSccCaption) : \BitmovinApiSdk\Models\ConvertSccCaption
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/encodings/{encoding_id}/captions/scc', $pathParams,  null, $convertSccCaption, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\ConvertSccCaption::class);
    }

    /**
     * Delete Convert SCC captions
     *
     * @param string $encodingId
     * @param string $captionsId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $encodingId, string $captionsId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'captions_id' => $captionsId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/encodings/{encoding_id}/captions/scc/{captions_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Convert SCC captions Details
     *
     * @param string $encodingId
     * @param string $captionsId
     * @return \BitmovinApiSdk\Models\ConvertSccCaption
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $captionsId) : \BitmovinApiSdk\Models\ConvertSccCaption
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'captions_id' => $captionsId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/captions/scc/{captions_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\ConvertSccCaption::class);
    }

    /**
     * List Convert SCC captions
     *
     * @param string $encodingId
     * @param ConvertSccCaptionListQueryParams|null $queryParams
     * @return ConvertSccCaptionPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, ConvertSccCaptionListQueryParams $queryParams = null) : ConvertSccCaptionPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/captions/scc', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, ConvertSccCaptionPaginationResponse::class);
    }
}
