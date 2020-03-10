<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Sidecars;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Sidecars\Customdata\CustomdataApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Sidecars\Webvtt\WebvttApi;

class SidecarsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /** @var WebvttApi */
    public $webvtt;

    /**
     * SidecarsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->customdata = new CustomdataApi(null, $this->httpWrapper);
        $this->webvtt = new WebvttApi(null, $this->httpWrapper);
    }

    /**
     * Add Sidecar
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\SidecarFile $sidecarFile
     * @return \BitmovinApiSdk\Models\SidecarFile
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, \BitmovinApiSdk\Models\SidecarFile $sidecarFile) : \BitmovinApiSdk\Models\SidecarFile
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/encodings/{encoding_id}/sidecars', $pathParams,  null, $sidecarFile, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\SidecarFile::class);
    }

    /**
     * Delete Sidecar
     *
     * @param string $encodingId
     * @param string $sidecarId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $encodingId, string $sidecarId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'sidecar_id' => $sidecarId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/encodings/{encoding_id}/sidecars/{sidecar_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Sidecar Details
     *
     * @param string $encodingId
     * @param string $sidecarId
     * @return \BitmovinApiSdk\Models\SidecarFile
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $sidecarId) : \BitmovinApiSdk\Models\SidecarFile
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'sidecar_id' => $sidecarId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/sidecars/{sidecar_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\SidecarFile::class);
    }

    /**
     * List Sidecars
     *
     * @param string $encodingId
     * @param SidecarFileListQueryParams|null $queryParams
     * @return SidecarFilePaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, SidecarFileListQueryParams $queryParams = null) : SidecarFilePaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/sidecars', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, SidecarFilePaginationResponse::class);
    }
}
