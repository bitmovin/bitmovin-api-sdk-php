<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Text;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Text\Customdata\CustomdataApi;

class TextApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * TextApi constructor.
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
     * Add Text muxing
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\TextMuxing $textMuxing
     * @return \BitmovinApiSdk\Models\TextMuxing
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, \BitmovinApiSdk\Models\TextMuxing $textMuxing) : \BitmovinApiSdk\Models\TextMuxing
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];
        $response = $this->httpWrapper->request('POST','/encoding/encodings/{encoding_id}/muxings/text', $pathParams,  null, $textMuxing, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\TextMuxing::class);
    }

    /**
     * Delete Text muxing
     *
     * @param string $encodingId
     * @param string $muxingId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $encodingId, string $muxingId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
        ];
        $response = $this->httpWrapper->request('DELETE','/encoding/encodings/{encoding_id}/muxings/text/{muxing_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Text muxing details
     *
     * @param string $encodingId
     * @param string $muxingId
     * @return \BitmovinApiSdk\Models\TextMuxing
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $muxingId) : \BitmovinApiSdk\Models\TextMuxing
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/muxings/text/{muxing_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\TextMuxing::class);
    }

    /**
     * List Text muxings
     *
     * @param string $encodingId
     * @param TextMuxingListQueryParams|null $queryParams
     * @return TextMuxingPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, TextMuxingListQueryParams $queryParams = null) : TextMuxingPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/muxings/text', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, TextMuxingPaginationResponse::class);
    }
}
