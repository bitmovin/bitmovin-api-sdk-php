<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ProgressiveTs\Drm;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ProgressiveTs\Drm\Fairplay\FairplayApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ProgressiveTs\Drm\Speke\SpekeApi;

class DrmApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var FairplayApi */
    public $fairplay;

    /** @var SpekeApi */
    public $speke;

    /**
     * DrmApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->fairplay = new FairplayApi(null, $this->httpWrapper);
        $this->speke = new SpekeApi(null, $this->httpWrapper);
    }

    /**
     * List all DRM configurations of Progressive TS muxing
     *
     * @param string $encodingId
     * @param string $muxingId
     * @return DrmPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, string $muxingId) : DrmPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/muxings/progressive-ts/{muxing_id}/drm', $pathParams,  null, null, true);

        return ObjectMapper::map($response, DrmPaginationResponse::class);
    }
}
