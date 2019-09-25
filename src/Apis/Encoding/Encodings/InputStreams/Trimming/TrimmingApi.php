<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\Trimming;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\Trimming\TimeBased\TimeBasedApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\Trimming\TimecodeTrack\TimecodeTrackApi;
use BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\Trimming\H264PictureTiming\H264PictureTimingApi;

class TrimmingApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var TimeBasedApi */
    public $timeBased;

    /** @var TimecodeTrackApi */
    public $timecodeTrack;

    /** @var H264PictureTimingApi */
    public $h264PictureTiming;

    /**
     * TrimmingApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->timeBased = new TimeBasedApi(null, $this->httpWrapper);
        $this->timecodeTrack = new TimecodeTrackApi(null, $this->httpWrapper);
        $this->h264PictureTiming = new H264PictureTimingApi(null, $this->httpWrapper);
    }
}
