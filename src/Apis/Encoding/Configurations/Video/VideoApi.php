<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Video;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Configurations\Video\H262\H262Api;
use BitmovinApiSdk\Apis\Encoding\Configurations\Video\H264\H264Api;
use BitmovinApiSdk\Apis\Encoding\Configurations\Video\H265\H265Api;
use BitmovinApiSdk\Apis\Encoding\Configurations\Video\Vp8\Vp8Api;
use BitmovinApiSdk\Apis\Encoding\Configurations\Video\Vp9\Vp9Api;
use BitmovinApiSdk\Apis\Encoding\Configurations\Video\Av1\Av1Api;
use BitmovinApiSdk\Apis\Encoding\Configurations\Video\Mjpeg\MjpegApi;

class VideoApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var H262Api */
    public $h262;

    /** @var H264Api */
    public $h264;

    /** @var H265Api */
    public $h265;

    /** @var Vp8Api */
    public $vp8;

    /** @var Vp9Api */
    public $vp9;

    /** @var Av1Api */
    public $av1;

    /** @var MjpegApi */
    public $mjpeg;

    /**
     * VideoApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->h262 = new H262Api(null, $this->httpWrapper);
        $this->h264 = new H264Api(null, $this->httpWrapper);
        $this->h265 = new H265Api(null, $this->httpWrapper);
        $this->vp8 = new Vp8Api(null, $this->httpWrapper);
        $this->vp9 = new Vp9Api(null, $this->httpWrapper);
        $this->av1 = new Av1Api(null, $this->httpWrapper);
        $this->mjpeg = new MjpegApi(null, $this->httpWrapper);
    }
}
