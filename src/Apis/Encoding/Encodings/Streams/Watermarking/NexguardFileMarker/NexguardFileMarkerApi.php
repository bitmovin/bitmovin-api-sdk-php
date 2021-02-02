<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Watermarking\NexguardFileMarker;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Watermarking\NexguardFileMarker\Customdata\CustomdataApi;

class NexguardFileMarkerApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * NexguardFileMarkerApi constructor.
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
     * Add a nexguard file marker watermarking configurations
     *
     * @param string $encodingId
     * @param string $streamId
     * @param \BitmovinApiSdk\Models\NexGuardFileMarker $nexGuardFileMarker
     * @return \BitmovinApiSdk\Models\NexGuardFileMarker
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, string $streamId, \BitmovinApiSdk\Models\NexGuardFileMarker $nexGuardFileMarker) : \BitmovinApiSdk\Models\NexGuardFileMarker
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'stream_id' => $streamId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/encodings/{encoding_id}/streams/{stream_id}/watermarking/nexguard-file-marker', $pathParams,  null, $nexGuardFileMarker, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\NexGuardFileMarker::class);
    }

    /**
     * Delete nexguard file marker watermarking configurations
     *
     * @param string $encodingId
     * @param string $streamId
     * @param string $nexguardId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $encodingId, string $streamId, string $nexguardId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'stream_id' => $streamId,
            'nexguard_id' => $nexguardId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/encodings/{encoding_id}/streams/{stream_id}/watermarking/nexguard-file-marker/{nexguard_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Nexguard file marker watermarking configurations details
     *
     * @param string $encodingId
     * @param string $streamId
     * @param string $nexguardId
     * @return \BitmovinApiSdk\Models\NexGuardFileMarker
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $streamId, string $nexguardId) : \BitmovinApiSdk\Models\NexGuardFileMarker
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'stream_id' => $streamId,
            'nexguard_id' => $nexguardId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/streams/{stream_id}/watermarking/nexguard-file-marker/{nexguard_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\NexGuardFileMarker::class);
    }

    /**
     * List nexguard file marker watermarking configurations
     *
     * @param string $encodingId
     * @param string $streamId
     * @param NexGuardFileMarkerListQueryParams|null $queryParams
     * @return NexGuardFileMarkerPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, string $streamId, NexGuardFileMarkerListQueryParams $queryParams = null) : NexGuardFileMarkerPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'stream_id' => $streamId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/streams/{stream_id}/watermarking/nexguard-file-marker', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, NexGuardFileMarkerPaginationResponse::class);
    }
}
