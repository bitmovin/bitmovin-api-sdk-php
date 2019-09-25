<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Mp3;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Mp3\Customdata\CustomdataApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Mp3\Information\InformationApi;

class Mp3Api
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /** @var InformationApi */
    public $information;

    /**
     * Mp3Api constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->customdata = new CustomdataApi(null, $this->httpWrapper);
        $this->information = new InformationApi(null, $this->httpWrapper);
    }

    /**
     * Add MP3 Muxing
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\Mp3Muxing $mp3Muxing
     * @return \BitmovinApiSdk\Models\Mp3Muxing
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, \BitmovinApiSdk\Models\Mp3Muxing $mp3Muxing) : \BitmovinApiSdk\Models\Mp3Muxing
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];
        $response = $this->httpWrapper->request('POST','/encoding/encodings/{encoding_id}/muxings/mp3', $pathParams,  null, $mp3Muxing, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Mp3Muxing::class);
    }

    /**
     * Delete MP3 Muxing
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
        $response = $this->httpWrapper->request('DELETE','/encoding/encodings/{encoding_id}/muxings/mp3/{muxing_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * MP3 Muxing Details
     *
     * @param string $encodingId
     * @param string $muxingId
     * @return \BitmovinApiSdk\Models\Mp3Muxing
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $muxingId) : \BitmovinApiSdk\Models\Mp3Muxing
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/muxings/mp3/{muxing_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Mp3Muxing::class);
    }

    /**
     * List MP3 Muxings
     *
     * @param string $encodingId
     * @param Mp3MuxingListQueryParams|null $queryParams
     * @return Mp3MuxingPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, Mp3MuxingListQueryParams $queryParams = null) : Mp3MuxingPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/muxings/mp3', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, Mp3MuxingPaginationResponse::class);
    }
}
