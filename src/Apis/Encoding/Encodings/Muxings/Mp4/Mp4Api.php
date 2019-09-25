<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Mp4;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Mp4\Customdata\CustomdataApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Mp4\Information\InformationApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Mp4\Drm\DrmApi;

class Mp4Api
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
     * Mp4Api constructor.
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
     * Add MP4 Muxing
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\Mp4Muxing $mp4Muxing
     * @return \BitmovinApiSdk\Models\Mp4Muxing
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, \BitmovinApiSdk\Models\Mp4Muxing $mp4Muxing) : \BitmovinApiSdk\Models\Mp4Muxing
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];
        $response = $this->httpWrapper->request('POST','/encoding/encodings/{encoding_id}/muxings/mp4', $pathParams,  null, $mp4Muxing, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Mp4Muxing::class);
    }

    /**
     * Delete MP4 Muxing
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
        $response = $this->httpWrapper->request('DELETE','/encoding/encodings/{encoding_id}/muxings/mp4/{muxing_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * MP4 Segment Muxing Details
     *
     * @param string $encodingId
     * @param string $muxingId
     * @return \BitmovinApiSdk\Models\Mp4Muxing
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $muxingId) : \BitmovinApiSdk\Models\Mp4Muxing
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/muxings/mp4/{muxing_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Mp4Muxing::class);
    }

    /**
     * List MP4 Muxings
     *
     * @param string $encodingId
     * @param Mp4MuxingListQueryParams|null $queryParams
     * @return Mp4MuxingPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, Mp4MuxingListQueryParams $queryParams = null) : Mp4MuxingPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/muxings/mp4', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, Mp4MuxingPaginationResponse::class);
    }
}
