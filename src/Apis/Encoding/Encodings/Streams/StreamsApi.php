<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Customdata\CustomdataApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Input\InputApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Inputs\InputsApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Filters\FiltersApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Streams\BurnInSubtitles\BurnInSubtitlesApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Captions\CaptionsApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Bifs\BifsApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Thumbnails\ThumbnailsApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Sprites\SpritesApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Qc\QcApi;

class StreamsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var CustomdataApi */
    public $customdata;

    /** @var InputApi */
    public $input;

    /** @var InputsApi */
    public $inputs;

    /** @var FiltersApi */
    public $filters;

    /** @var BurnInSubtitlesApi */
    public $burnInSubtitles;

    /** @var CaptionsApi */
    public $captions;

    /** @var BifsApi */
    public $bifs;

    /** @var ThumbnailsApi */
    public $thumbnails;

    /** @var SpritesApi */
    public $sprites;

    /** @var QcApi */
    public $qc;

    /**
     * StreamsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->customdata = new CustomdataApi(null, $this->httpWrapper);
        $this->input = new InputApi(null, $this->httpWrapper);
        $this->inputs = new InputsApi(null, $this->httpWrapper);
        $this->filters = new FiltersApi(null, $this->httpWrapper);
        $this->burnInSubtitles = new BurnInSubtitlesApi(null, $this->httpWrapper);
        $this->captions = new CaptionsApi(null, $this->httpWrapper);
        $this->bifs = new BifsApi(null, $this->httpWrapper);
        $this->thumbnails = new ThumbnailsApi(null, $this->httpWrapper);
        $this->sprites = new SpritesApi(null, $this->httpWrapper);
        $this->qc = new QcApi(null, $this->httpWrapper);
    }

    /**
     * Add Stream
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\Stream $stream
     * @return \BitmovinApiSdk\Models\Stream
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, \BitmovinApiSdk\Models\Stream $stream) : \BitmovinApiSdk\Models\Stream
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];
        $response = $this->httpWrapper->request('POST','/encoding/encodings/{encoding_id}/streams', $pathParams,  null, $stream, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Stream::class);
    }

    /**
     * Delete Stream
     *
     * @param string $encodingId
     * @param string $streamId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $encodingId, string $streamId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'stream_id' => $streamId,
        ];
        $response = $this->httpWrapper->request('DELETE','/encoding/encodings/{encoding_id}/streams/{stream_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Stream Details
     *
     * @param string $encodingId
     * @param string $streamId
     * @return \BitmovinApiSdk\Models\Stream
     * @throws BitmovinApiException
     */
    public function get(string $encodingId, string $streamId) : \BitmovinApiSdk\Models\Stream
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'stream_id' => $streamId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/streams/{stream_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Stream::class);
    }

    /**
     * List Streams
     *
     * @param string $encodingId
     * @param StreamListQueryParams|null $queryParams
     * @return StreamPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $encodingId, StreamListQueryParams $queryParams = null) : StreamPaginationResponse
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/encodings/{encoding_id}/streams', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, StreamPaginationResponse::class);
    }
}
