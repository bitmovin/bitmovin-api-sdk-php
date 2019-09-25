<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Bifs;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Bifs\Customdata\CustomdataApi;

class BifsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * BifsApi constructor.
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
     * Add a Roku Bif file
     *
     * @param string $encodingId
     * @param string $streamId
     * @param \BitmovinApiSdk\Models\Bif $bif
     * @return \BitmovinApiSdk\Models\Bif
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, string $streamId, \BitmovinApiSdk\Models\Bif $bif) : \BitmovinApiSdk\Models\Bif
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'stream_id' => $streamId,
        ];
        $response = $this->httpWrapper->request('POST','/encoding/encodings/{encoding_id}/streams/{stream_id}/bifs', $pathParams,  null, $bif, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Bif::class);
    }

    /**
     * Delete Bif
     *
     * @param string $encodingId
     * @param string $streamId
     * @param string $bifId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $encodingId, string $streamId, string $bifId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'stream_id' => $streamId,
            'bif_id' => $bifId,
        ];
        $response = $this->httpWrapper->request('DELETE','/encoding/encodings/{encoding_id}/streams/{stream_id}/bifs/{bif_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Bif Details
     *
     * @param string $encodingId
     * @param string $streamId
     * @param string $bifId
     * @return \BitmovinApiSdk\Models\Bif
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $streamId, string $bifId) : \BitmovinApiSdk\Models\Bif
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'stream_id' => $streamId,
            'bif_id' => $bifId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/streams/{stream_id}/bifs/{bif_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Bif::class);
    }

    /**
     * List Bifs
     *
     * @param string $encodingId
     * @param string $streamId
     * @param BifListQueryParams|null $queryParams
     * @return BifPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, string $streamId, BifListQueryParams $queryParams = null) : BifPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'stream_id' => $streamId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/streams/{stream_id}/bifs', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, BifPaginationResponse::class);
    }
}
