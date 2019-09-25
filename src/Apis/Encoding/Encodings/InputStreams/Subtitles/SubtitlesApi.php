<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\Subtitles;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\Subtitles\DvbTeletext\DvbTeletextApi;

class SubtitlesApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var DvbTeletextApi */
    public $dvbTeletext;

    /**
     * SubtitlesApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->dvbTeletext = new DvbTeletextApi(null, $this->httpWrapper);
    }
}
