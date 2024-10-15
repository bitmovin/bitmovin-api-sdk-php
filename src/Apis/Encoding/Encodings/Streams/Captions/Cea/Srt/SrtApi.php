<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Captions\Cea\Srt;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Captions\Cea\Srt\Customdata\CustomdataApi;

class SrtApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * SrtApi constructor.
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
     * Embed SRT captions as 608/708 into Stream
     *
     * @param string $encodingId
     * @param string $streamId
     * @param \BitmovinApiSdk\Models\SrtToCea608708Caption $srtToCea608708Caption
     * @return \BitmovinApiSdk\Models\SrtToCea608708Caption
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, string $streamId, \BitmovinApiSdk\Models\SrtToCea608708Caption $srtToCea608708Caption) : \BitmovinApiSdk\Models\SrtToCea608708Caption
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'stream_id' => $streamId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/encodings/{encoding_id}/streams/{stream_id}/captions/608-708/srt', $pathParams,  null, $srtToCea608708Caption, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\SrtToCea608708Caption::class);
    }

    /**
     * Delete SRT captions as 608/708 from Stream
     *
     * @param string $encodingId
     * @param string $streamId
     * @param string $captionsId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $encodingId, string $streamId, string $captionsId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'stream_id' => $streamId,
            'captions_id' => $captionsId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/encodings/{encoding_id}/streams/{stream_id}/captions/608-708/srt/{captions_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Embed SRT captions as 608/708 Details
     *
     * @param string $encodingId
     * @param string $streamId
     * @param string $captionsId
     * @return \BitmovinApiSdk\Models\SrtToCea608708Caption
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $streamId, string $captionsId) : \BitmovinApiSdk\Models\SrtToCea608708Caption
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'stream_id' => $streamId,
            'captions_id' => $captionsId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/streams/{stream_id}/captions/608-708/srt/{captions_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\SrtToCea608708Caption::class);
    }

    /**
     * List SRT captions as 608/708 from Stream
     *
     * @param string $encodingId
     * @param string $streamId
     * @param SrtToCea608708CaptionListQueryParams|null $queryParams
     * @return SrtToCea608708CaptionPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, string $streamId, SrtToCea608708CaptionListQueryParams $queryParams = null) : SrtToCea608708CaptionPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'stream_id' => $streamId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/streams/{stream_id}/captions/608-708/srt', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, SrtToCea608708CaptionPaginationResponse::class);
    }
}
