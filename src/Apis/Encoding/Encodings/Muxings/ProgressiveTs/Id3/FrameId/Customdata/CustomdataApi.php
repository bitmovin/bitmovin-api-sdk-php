<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ProgressiveTs\Id3\FrameId\Customdata;

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
     * Frame ID ID3 Tag Custom Data of a Progressive TS muxing
     *
     * @param string $encodingId
     * @param string $muxingId
     * @param string $id3TagId
     * @return \BitmovinApiSdk\Models\CustomData
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $muxingId, string $id3TagId) : \BitmovinApiSdk\Models\CustomData
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
            'id3_tag_id' => $id3TagId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/muxings/progressive-ts/{muxing_id}/id3/frame-id/{id3_tag_id}/customData', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\CustomData::class);
    }
}
