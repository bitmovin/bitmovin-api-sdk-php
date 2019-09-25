<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Cmaf\Captions\Ttml;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class TtmlApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * TtmlApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Delete TTML Embed Captions
     *
     * @param string $encodingId
     * @param string $muxingId
     * @param string $captionsId
     * @return \BitmovinApiSdk\Models\TtmlEmbed
     * @throws BitmovinApiException
     */
    public function delete(string $encodingId, string $muxingId, string $captionsId) : \BitmovinApiSdk\Models\TtmlEmbed
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
            'captions_id' => $captionsId,
        ];
        $response = $this->httpWrapper->request('DELETE','/encoding/encodings/{encoding_id}/muxings/cmaf/{muxing_id}/captions/ttml/{captions_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\TtmlEmbed::class);
    }

    /**
     * TTML Embed Captions Details
     *
     * @param string $encodingId
     * @param string $muxingId
     * @param string $captionsId
     * @return \BitmovinApiSdk\Models\TtmlEmbed
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $muxingId, string $captionsId) : \BitmovinApiSdk\Models\TtmlEmbed
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
            'captions_id' => $captionsId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/muxings/cmaf/{muxing_id}/captions/ttml/{captions_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\TtmlEmbed::class);
    }
}
