<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\PackedAudio;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\PackedAudio\Customdata\CustomdataApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\PackedAudio\Information\InformationApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\PackedAudio\Drm\DrmApi;

class PackedAudioApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /** @var InformationApi */
    public $information;

    /** @var DrmApi */
    public $drm;

    /**
     * PackedAudioApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->customdata = new CustomdataApi(null, $this->httpWrapper);
        $this->information = new InformationApi(null, $this->httpWrapper);
        $this->drm = new DrmApi(null, $this->httpWrapper);
    }

    /**
     * Add Packed Audio muxing
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\PackedAudioMuxing $packedAudioMuxing
     * @return \BitmovinApiSdk\Models\PackedAudioMuxing
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, \BitmovinApiSdk\Models\PackedAudioMuxing $packedAudioMuxing) : \BitmovinApiSdk\Models\PackedAudioMuxing
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/encodings/{encoding_id}/muxings/packed-audio', $pathParams,  null, $packedAudioMuxing, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\PackedAudioMuxing::class);
    }

    /**
     * Delete Packed Audio muxing
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/encodings/{encoding_id}/muxings/packed-audio/{muxing_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Packed Audio muxing details
     *
     * @param string $encodingId
     * @param string $muxingId
     * @return \BitmovinApiSdk\Models\PackedAudioMuxing
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $muxingId) : \BitmovinApiSdk\Models\PackedAudioMuxing
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/muxings/packed-audio/{muxing_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\PackedAudioMuxing::class);
    }

    /**
     * List Packed Audio muxings
     *
     * @param string $encodingId
     * @param PackedAudioMuxingListQueryParams|null $queryParams
     * @return PackedAudioMuxingPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, PackedAudioMuxingListQueryParams $queryParams = null) : PackedAudioMuxingPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/muxings/packed-audio', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, PackedAudioMuxingPaginationResponse::class);
    }
}
