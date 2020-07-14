<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Configurations\Audio\Aac\AacApi;
use BitmovinApiSdk\Apis\Encoding\Configurations\Audio\DtsPassthrough\DtsPassthroughApi;
use BitmovinApiSdk\Apis\Encoding\Configurations\Audio\HeAacV1\HeAacV1Api;
use BitmovinApiSdk\Apis\Encoding\Configurations\Audio\HeAacV2\HeAacV2Api;
use BitmovinApiSdk\Apis\Encoding\Configurations\Audio\Vorbis\VorbisApi;
use BitmovinApiSdk\Apis\Encoding\Configurations\Audio\Opus\OpusApi;
use BitmovinApiSdk\Apis\Encoding\Configurations\Audio\Ac3\Ac3Api;
use BitmovinApiSdk\Apis\Encoding\Configurations\Audio\Eac3\Eac3Api;
use BitmovinApiSdk\Apis\Encoding\Configurations\Audio\Mp2\Mp2Api;
use BitmovinApiSdk\Apis\Encoding\Configurations\Audio\Mp3\Mp3Api;

class AudioApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var AacApi */
    public $aac;

    /** @var DtsPassthroughApi */
    public $dtsPassthrough;

    /** @var HeAacV1Api */
    public $heAacV1;

    /** @var HeAacV2Api */
    public $heAacV2;

    /** @var VorbisApi */
    public $vorbis;

    /** @var OpusApi */
    public $opus;

    /** @var Ac3Api */
    public $ac3;

    /** @var Eac3Api */
    public $eac3;

    /** @var Mp2Api */
    public $mp2;

    /** @var Mp3Api */
    public $mp3;

    /**
     * AudioApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->aac = new AacApi(null, $this->httpWrapper);
        $this->dtsPassthrough = new DtsPassthroughApi(null, $this->httpWrapper);
        $this->heAacV1 = new HeAacV1Api(null, $this->httpWrapper);
        $this->heAacV2 = new HeAacV2Api(null, $this->httpWrapper);
        $this->vorbis = new VorbisApi(null, $this->httpWrapper);
        $this->opus = new OpusApi(null, $this->httpWrapper);
        $this->ac3 = new Ac3Api(null, $this->httpWrapper);
        $this->eac3 = new Eac3Api(null, $this->httpWrapper);
        $this->mp2 = new Mp2Api(null, $this->httpWrapper);
        $this->mp3 = new Mp3Api(null, $this->httpWrapper);
    }
}
