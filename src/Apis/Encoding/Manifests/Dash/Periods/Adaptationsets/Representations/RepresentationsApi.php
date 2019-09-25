<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Representations;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Representations\Vtt\VttApi;
use BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Representations\Fmp4\Fmp4Api;
use BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Representations\Cmaf\CmafApi;
use BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Representations\Mp4\Mp4Api;
use BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Representations\Webm\WebmApi;

class RepresentationsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var VttApi */
    public $vtt;

    /** @var Fmp4Api */
    public $fmp4;

    /** @var CmafApi */
    public $cmaf;

    /** @var Mp4Api */
    public $mp4;

    /** @var WebmApi */
    public $webm;

    /**
     * RepresentationsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->vtt = new VttApi(null, $this->httpWrapper);
        $this->fmp4 = new Fmp4Api(null, $this->httpWrapper);
        $this->cmaf = new CmafApi(null, $this->httpWrapper);
        $this->mp4 = new Mp4Api(null, $this->httpWrapper);
        $this->webm = new WebmApi(null, $this->httpWrapper);
    }
}
