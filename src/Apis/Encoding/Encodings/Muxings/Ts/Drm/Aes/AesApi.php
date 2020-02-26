<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Ts\Drm\Aes;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Ts\Drm\Aes\Customdata\CustomdataApi;

class AesApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * AesApi constructor.
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
     * Add AES Encryption to TS muxing
     *
     * @param string $encodingId
     * @param string $muxingId
     * @param \BitmovinApiSdk\Models\AesEncryptionDrm $aesEncryptionDrm
     * @return \BitmovinApiSdk\Models\AesEncryptionDrm
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, string $muxingId, \BitmovinApiSdk\Models\AesEncryptionDrm $aesEncryptionDrm) : \BitmovinApiSdk\Models\AesEncryptionDrm
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
        ];
        $response = $this->httpWrapper->request('POST','/encoding/encodings/{encoding_id}/muxings/ts/{muxing_id}/drm/aes', $pathParams,  null, $aesEncryptionDrm, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AesEncryptionDrm::class);
    }

    /**
     * Delete AES Encryption from TS muxing
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
        $response = $this->httpWrapper->request('DELETE','/encoding/encodings/{encoding_id}/muxings/ts/{muxing_id}/drm/aes/{drm_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * AES Encryption Details of TS muxing
     *
     * @param string $encodingId
     * @param string $muxingId
     * @param string $drmId
     * @return \BitmovinApiSdk\Models\AesEncryptionDrm
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $muxingId, string $drmId) : \BitmovinApiSdk\Models\AesEncryptionDrm
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
            'drm_id' => $drmId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/muxings/ts/{muxing_id}/drm/aes/{drm_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AesEncryptionDrm::class);
    }

    /**
     * List AES Encryption of TS muxing
     *
     * @param string $encodingId
     * @param string $muxingId
     * @param AesEncryptionDrmListQueryParams|null $queryParams
     * @return AesEncryptionDrmPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, string $muxingId, AesEncryptionDrmListQueryParams $queryParams = null) : AesEncryptionDrmPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/muxings/ts/{muxing_id}/drm/aes', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, AesEncryptionDrmPaginationResponse::class);
    }
}
