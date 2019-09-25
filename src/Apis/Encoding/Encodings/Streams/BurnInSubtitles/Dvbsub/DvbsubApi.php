<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams\BurnInSubtitles\Dvbsub;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class DvbsubApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * DvbsubApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Burn-In DVB-SUB Subtitle into Stream
     *
     * @param string $encodingId
     * @param string $streamId
     * @param \BitmovinApiSdk\Models\StreamDvbSubSubtitle $streamDvbSubSubtitle
     * @return \BitmovinApiSdk\Models\StreamDvbSubSubtitle
     * @throws BitmovinApiException
     */
    public function create(string $encodingId, string $streamId, \BitmovinApiSdk\Models\StreamDvbSubSubtitle $streamDvbSubSubtitle) : \BitmovinApiSdk\Models\StreamDvbSubSubtitle
    {
        $pathParams = [
            'encoding_id' => $encodingId,
            'stream_id' => $streamId,
        ];
        $response = $this->httpWrapper->request('POST','/encoding/encodings/{encoding_id}/streams/{stream_id}/burn-in-subtitles/dvbsub', $pathParams,  null, $streamDvbSubSubtitle, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\StreamDvbSubSubtitle::class);
    }
}
