<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\Subtitles;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\Subtitles\DvbSubtitle\DvbSubtitleApi;

class SubtitlesApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var DvbSubtitleApi */
    public $dvbSubtitle;

    /**
     * SubtitlesApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->dvbSubtitle = new DvbSubtitleApi(null, $this->httpWrapper);
    }
}
