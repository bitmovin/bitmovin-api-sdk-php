<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams\BurnInSubtitles;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\Streams\BurnInSubtitles\Dvbsub\DvbsubApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\Streams\BurnInSubtitles\Srt\SrtApi;

class BurnInSubtitlesApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var DvbsubApi */
    public $dvbsub;

    /** @var SrtApi */
    public $srt;

    /**
     * BurnInSubtitlesApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->dvbsub = new DvbsubApi(null, $this->httpWrapper);
        $this->srt = new SrtApi(null, $this->httpWrapper);
    }
}
