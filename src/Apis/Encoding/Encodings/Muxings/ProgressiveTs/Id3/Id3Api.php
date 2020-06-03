<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ProgressiveTs\Id3;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ProgressiveTs\Id3\Raw\RawApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ProgressiveTs\Id3\FrameId\FrameIdApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ProgressiveTs\Id3\PlainText\PlainTextApi;

class Id3Api
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var RawApi */
    public $raw;

    /** @var FrameIdApi */
    public $frameId;

    /** @var PlainTextApi */
    public $plainText;

    /**
     * Id3Api constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->raw = new RawApi(null, $this->httpWrapper);
        $this->frameId = new FrameIdApi(null, $this->httpWrapper);
        $this->plainText = new PlainTextApi(null, $this->httpWrapper);
    }

    /**
     * List all ID3 Tags of a Progressive TS muxing
     *
     * @param string $encodingId
     * @param string $muxingId
     * @param Id3TagListQueryParams|null $queryParams
     * @return Id3TagPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, string $muxingId, Id3TagListQueryParams $queryParams = null) : Id3TagPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/muxings/progressive-ts/{muxing_id}/id3', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, Id3TagPaginationResponse::class);
    }
}
