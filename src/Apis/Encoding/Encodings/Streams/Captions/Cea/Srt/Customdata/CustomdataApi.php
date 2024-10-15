<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Captions\Cea\Srt\Customdata;

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
     * Embed SRT captions as 608/708 Custom Data
     *
     * @param string $encodingId
     * @param string $streamId
     * @param string $captionsId
     * @return \BitmovinApiSdk\Models\CustomData
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $streamId, string $captionsId) : \BitmovinApiSdk\Models\CustomData
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'stream_id' => $streamId,
            'captions_id' => $captionsId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/streams/{stream_id}/captions/608-708/srt/{captions_id}/customData', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\CustomData::class);
    }
}
