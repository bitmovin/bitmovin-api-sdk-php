<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Webm\Drm\Cenc;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Webm\Drm\Cenc\Customdata\CustomdataApi;

class CencApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * CencApi constructor.
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
     * Add CENC DRM to a WebM muxing
     *
     * @param string $encodingId
     * @param string $muxingId
     * @param \BitmovinApiSdk\Models\CencDrm $cencDrm
     * @return \BitmovinApiSdk\Models\CencDrm
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, string $muxingId, \BitmovinApiSdk\Models\CencDrm $cencDrm) : \BitmovinApiSdk\Models\CencDrm
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/encodings/{encoding_id}/muxings/webm/{muxing_id}/drm/cenc', $pathParams,  null, $cencDrm, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\CencDrm::class);
    }

    /**
     * Delete CENC DRM from a WebM muxing
     *
     * @param string $encodingId
     * @param string $muxingId
     * @param string $drmId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $encodingId, string $muxingId, string $drmId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
            'drm_id' => $drmId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/encodings/{encoding_id}/muxings/webm/{muxing_id}/drm/cenc/{drm_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * CENC DRM Details of a WebM muxing
     *
     * @param string $encodingId
     * @param string $muxingId
     * @param string $drmId
     * @return \BitmovinApiSdk\Models\CencDrm
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $muxingId, string $drmId) : \BitmovinApiSdk\Models\CencDrm
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
            'drm_id' => $drmId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/muxings/webm/{muxing_id}/drm/cenc/{drm_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\CencDrm::class);
    }

    /**
     * List CENC DRMs of a WebM muxing
     *
     * @param string $encodingId
     * @param string $muxingId
     * @param CencDrmListQueryParams|null $queryParams
     * @return CencDrmPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, string $muxingId, CencDrmListQueryParams $queryParams = null) : CencDrmPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/muxings/webm/{muxing_id}/drm/cenc', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, CencDrmPaginationResponse::class);
    }
}
