<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Watermarking\NexguardFileMarker\Customdata;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class CustomdataApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * CustomdataApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Nexguard file marker watermarking configuration Custom Data
     *
     * @param string $encodingId
     * @param string $streamId
     * @param string $nexguardId
     * @return \BitmovinApiSdk\Models\CustomData
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $streamId, string $nexguardId) : \BitmovinApiSdk\Models\CustomData
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'stream_id' => $streamId,
            'nexguard_id' => $nexguardId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/streams/{stream_id}/watermarking/nexguard-file-marker/{nexguard_id}/customData', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\CustomData::class);
    }
}
