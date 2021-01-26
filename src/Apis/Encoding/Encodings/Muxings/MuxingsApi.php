<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Fmp4\Fmp4Api;
use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ChunkedText\ChunkedTextApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Cmaf\CmafApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\SegmentedRaw\SegmentedRawApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\PackedAudio\PackedAudioApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Text\TextApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Ts\TsApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Webm\WebmApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Mp3\Mp3Api;
use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Mp4\Mp4Api;
use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Mxf\MxfApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ProgressiveTs\ProgressiveTsApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\BroadcastTs\BroadcastTsApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ProgressiveWebm\ProgressiveWebmApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\ProgressiveMov\ProgressiveMovApi;

class MuxingsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var Fmp4Api */
    public $fmp4;

    /** @var ChunkedTextApi */
    public $chunkedText;

    /** @var CmafApi */
    public $cmaf;

    /** @var SegmentedRawApi */
    public $segmentedRaw;

    /** @var PackedAudioApi */
    public $packedAudio;

    /** @var TextApi */
    public $text;

    /** @var TsApi */
    public $ts;

    /** @var WebmApi */
    public $webm;

    /** @var Mp3Api */
    public $mp3;

    /** @var Mp4Api */
    public $mp4;

    /** @var MxfApi */
    public $mxf;

    /** @var ProgressiveTsApi */
    public $progressiveTs;

    /** @var BroadcastTsApi */
    public $broadcastTs;

    /** @var ProgressiveWebmApi */
    public $progressiveWebm;

    /** @var ProgressiveMovApi */
    public $progressiveMov;

    /**
     * MuxingsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->fmp4 = new Fmp4Api(null, $this->httpWrapper);
        $this->chunkedText = new ChunkedTextApi(null, $this->httpWrapper);
        $this->cmaf = new CmafApi(null, $this->httpWrapper);
        $this->segmentedRaw = new SegmentedRawApi(null, $this->httpWrapper);
        $this->packedAudio = new PackedAudioApi(null, $this->httpWrapper);
        $this->text = new TextApi(null, $this->httpWrapper);
        $this->ts = new TsApi(null, $this->httpWrapper);
        $this->webm = new WebmApi(null, $this->httpWrapper);
        $this->mp3 = new Mp3Api(null, $this->httpWrapper);
        $this->mp4 = new Mp4Api(null, $this->httpWrapper);
        $this->mxf = new MxfApi(null, $this->httpWrapper);
        $this->progressiveTs = new ProgressiveTsApi(null, $this->httpWrapper);
        $this->broadcastTs = new BroadcastTsApi(null, $this->httpWrapper);
        $this->progressiveWebm = new ProgressiveWebmApi(null, $this->httpWrapper);
        $this->progressiveMov = new ProgressiveMovApi(null, $this->httpWrapper);
    }

    /**
     * Muxing Details
     *
     * @param string $encodingId
     * @param string $muxingId
     * @return \BitmovinApiSdk\Models\Muxing
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $muxingId) : \BitmovinApiSdk\Models\Muxing
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'muxing_id' => $muxingId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/muxings/{muxing_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Muxing::class);
    }

    /**
     * List All Muxings
     *
     * @param string $encodingId
     * @param MuxingListQueryParams|null $queryParams
     * @return MuxingPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, MuxingListQueryParams $queryParams = null) : MuxingPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/muxings', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, MuxingPaginationResponse::class);
    }
}
