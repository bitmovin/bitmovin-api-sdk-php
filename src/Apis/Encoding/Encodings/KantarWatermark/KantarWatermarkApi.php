<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\KantarWatermark;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class KantarWatermarkApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * KantarWatermarkApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Create or replace the Kantar Watermark for an encoding
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\KantarWatermark $kantarWatermark
     * @return \BitmovinApiSdk\Models\KantarWatermark
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, \BitmovinApiSdk\Models\KantarWatermark $kantarWatermark) : \BitmovinApiSdk\Models\KantarWatermark
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/encodings/{encoding_id}/kantar-watermark', $pathParams,  null, $kantarWatermark, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\KantarWatermark::class);
    }

    /**
     * Delete the Kantar Watermark for an encoding
     *
     * @param string $encodingId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $encodingId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/encodings/{encoding_id}/kantar-watermark', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Get the Kantar Watermark for an encoding
     *
     * @param string $encodingId
     * @return \BitmovinApiSdk\Models\KantarWatermark
     * @throws BitmovinApiException
     */
    public function get(string $encodingId) : \BitmovinApiSdk\Models\KantarWatermark
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/kantar-watermark', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\KantarWatermark::class);
    }
}
