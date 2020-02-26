<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ProgressiveMov\Information;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class InformationApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * InformationApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Progressive MOV muxing Information
     *
     * @param string $encodingId
     * @param string $muxingId
     * @return \BitmovinApiSdk\Models\ProgressiveMovMuxingInformation
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $muxingId) : \BitmovinApiSdk\Models\ProgressiveMovMuxingInformation
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/muxings/progressive-mov/{muxing_id}/information', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\ProgressiveMovMuxingInformation::class);
    }
}
