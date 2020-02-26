<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Mp3\Information;

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
     * MP3 muxing Information
     *
     * @param string $encodingId
     * @param string $muxingId
     * @return \BitmovinApiSdk\Models\Mp3MuxingInformation
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $muxingId) : \BitmovinApiSdk\Models\Mp3MuxingInformation
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/muxings/mp3/{muxing_id}/information', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Mp3MuxingInformation::class);
    }
}
