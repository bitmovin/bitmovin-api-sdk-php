<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\Type\TypeApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\AudioMix\AudioMixApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\Ingest\IngestApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\Sidecar\SidecarApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\Concatenation\ConcatenationApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\File\FileApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\Trimming\TrimmingApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\Subtitles\SubtitlesApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\Captions\CaptionsApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\DolbyAtmos\DolbyAtmosApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\DolbyVision\DolbyVisionApi;

class InputStreamsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var TypeApi */
    public $type;

    /** @var AudioMixApi */
    public $audioMix;

    /** @var IngestApi */
    public $ingest;

    /** @var SidecarApi */
    public $sidecar;

    /** @var ConcatenationApi */
    public $concatenation;

    /** @var FileApi */
    public $file;

    /** @var TrimmingApi */
    public $trimming;

    /** @var SubtitlesApi */
    public $subtitles;

    /** @var CaptionsApi */
    public $captions;

    /** @var DolbyAtmosApi */
    public $dolbyAtmos;

    /** @var DolbyVisionApi */
    public $dolbyVision;

    /**
     * InputStreamsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->type = new TypeApi(null, $this->httpWrapper);
        $this->audioMix = new AudioMixApi(null, $this->httpWrapper);
        $this->ingest = new IngestApi(null, $this->httpWrapper);
        $this->sidecar = new SidecarApi(null, $this->httpWrapper);
        $this->concatenation = new ConcatenationApi(null, $this->httpWrapper);
        $this->file = new FileApi(null, $this->httpWrapper);
        $this->trimming = new TrimmingApi(null, $this->httpWrapper);
        $this->subtitles = new SubtitlesApi(null, $this->httpWrapper);
        $this->captions = new CaptionsApi(null, $this->httpWrapper);
        $this->dolbyAtmos = new DolbyAtmosApi(null, $this->httpWrapper);
        $this->dolbyVision = new DolbyVisionApi(null, $this->httpWrapper);
    }

    /**
     * Input Stream Details
     *
     * @param string $encodingId
     * @param string $inputStreamId
     * @return \BitmovinApiSdk\Models\InputStream
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $inputStreamId) : \BitmovinApiSdk\Models\InputStream
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'input_stream_id' => $inputStreamId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/input-streams/{input_stream_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\InputStream::class);
    }

    /**
     * List All Input Streams
     *
     * @param string $encodingId
     * @param InputStreamListQueryParams|null $queryParams
     * @return InputStreamPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, InputStreamListQueryParams $queryParams = null) : InputStreamPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/encodings/{encoding_id}/input-streams', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, InputStreamPaginationResponse::class);
    }
}
