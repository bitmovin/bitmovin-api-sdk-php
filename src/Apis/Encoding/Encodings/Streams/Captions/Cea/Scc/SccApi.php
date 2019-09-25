<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Captions\Cea\Scc;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Captions\Cea\Scc\Customdata\CustomdataApi;

class SccApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /**
     * SccApi constructor.
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
     * Embed SCC captions as 608/708 into Stream
     *
     * @param string $encodingId
     * @param string $streamId
     * @param \BitmovinApiSdk\Models\SccCaption $sccCaption
     * @return \BitmovinApiSdk\Models\SccCaption
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, string $streamId, \BitmovinApiSdk\Models\SccCaption $sccCaption) : \BitmovinApiSdk\Models\SccCaption
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'stream_id' => $streamId,
        ];
        $response = $this->httpWrapper->request('POST','/encoding/encodings/{encoding_id}/streams/{stream_id}/captions/608-708/scc', $pathParams,  null, $sccCaption, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\SccCaption::class);
    }

    /**
     * Delete SCC captions as 608/708 from Stream
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
        $response = $this->httpWrapper->request('DELETE','/encoding/encodings/{encoding_id}/streams/{stream_id}/captions/608-708/scc/{captions_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Embed SCC captions as 608/708 Details
     *
     * @param string $encodingId
     * @param string $streamId
     * @param string $captionsId
     * @return \BitmovinApiSdk\Models\SccCaption
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $streamId, string $captionsId) : \BitmovinApiSdk\Models\SccCaption
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'stream_id' => $streamId,
            'captions_id' => $captionsId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/streams/{stream_id}/captions/608-708/scc/{captions_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\SccCaption::class);
    }

    /**
     * List SCC captions as 608/708 from Stream
     *
     * @param string $encodingId
     * @param string $streamId
     * @param SccCaptionListQueryParams|null $queryParams
     * @return SccCaptionPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, string $streamId, SccCaptionListQueryParams $queryParams = null) : SccCaptionPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'stream_id' => $streamId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/streams/{stream_id}/captions/608-708/scc', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, SccCaptionPaginationResponse::class);
    }
}
