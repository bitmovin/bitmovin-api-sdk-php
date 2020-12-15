<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Sidecars\Webvtt;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class WebvttApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * WebvttApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Add WebVTT sidecar file
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\WebVttSidecarFile $webVttSidecarFile
     * @return \BitmovinApiSdk\Models\WebVttSidecarFile
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, \BitmovinApiSdk\Models\WebVttSidecarFile $webVttSidecarFile) : \BitmovinApiSdk\Models\WebVttSidecarFile
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/encodings/{encoding_id}/sidecars/webvtt', $pathParams,  null, $webVttSidecarFile, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\WebVttSidecarFile::class);
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

        $response = $this->httpWrapper->request('DELETE', '/encoding/encodings/{encoding_id}/sidecars/webvtt/{sidecar_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * WebVTT Sidecar Details
     *
     * @param string $encodingId
     * @param string $sidecarId
     * @return \BitmovinApiSdk\Models\WebVttSidecarFile
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $sidecarId) : \BitmovinApiSdk\Models\WebVttSidecarFile
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'sidecar_id' => $sidecarId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/sidecars/webvtt/{sidecar_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\WebVttSidecarFile::class);
    }

    /**
     * List WebVTT sidecar files
     *
     * @param string $encodingId
     * @param WebVttSidecarFileListQueryParams|null $queryParams
     * @return WebVttSidecarFilePaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, WebVttSidecarFileListQueryParams $queryParams = null) : WebVttSidecarFilePaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/sidecars/webvtt', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, WebVttSidecarFilePaginationResponse::class);
    }
}
