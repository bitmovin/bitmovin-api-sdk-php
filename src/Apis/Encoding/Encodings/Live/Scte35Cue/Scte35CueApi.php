<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Live\Scte35Cue;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class Scte35CueApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * Scte35CueApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Insert cue duration
     *
     * @param string $encodingId
     * @param \BitmovinApiSdk\Models\Scte35Cue $scte35Cue
     * @return \BitmovinApiSdk\Models\Scte35Cue
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, \BitmovinApiSdk\Models\Scte35Cue $scte35Cue) : \BitmovinApiSdk\Models\Scte35Cue
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/encodings/{encoding_id}/live/scte-35-cue', $pathParams,  null, $scte35Cue, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\Scte35Cue::class);
    }
}
