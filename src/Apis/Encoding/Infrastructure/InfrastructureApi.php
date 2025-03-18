<?php

namespace BitmovinApiSdk\Apis\Encoding\Infrastructure;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Infrastructure\Aws\AwsApi;
use BitmovinApiSdk\Apis\Encoding\Infrastructure\StaticIps\StaticIpsApi;
use BitmovinApiSdk\Apis\Encoding\Infrastructure\Azure\AzureApi;
use BitmovinApiSdk\Apis\Encoding\Infrastructure\Gce\GceApi;
use BitmovinApiSdk\Apis\Encoding\Infrastructure\Akamai\AkamaiApi;
use BitmovinApiSdk\Apis\Encoding\Infrastructure\Oci\OciApi;
use BitmovinApiSdk\Apis\Encoding\Infrastructure\PrewarmedEncoderPools\PrewarmedEncoderPoolsApi;

class InfrastructureApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var AwsApi */
    public $aws;

    /** @var StaticIpsApi */
    public $staticIps;

    /** @var AzureApi */
    public $azure;

    /** @var GceApi */
    public $gce;

    /** @var AkamaiApi */
    public $akamai;

    /** @var OciApi */
    public $oci;

    /** @var PrewarmedEncoderPoolsApi */
    public $prewarmedEncoderPools;

    /**
     * InfrastructureApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->aws = new AwsApi(null, $this->httpWrapper);
        $this->staticIps = new StaticIpsApi(null, $this->httpWrapper);
        $this->azure = new AzureApi(null, $this->httpWrapper);
        $this->gce = new GceApi(null, $this->httpWrapper);
        $this->akamai = new AkamaiApi(null, $this->httpWrapper);
        $this->oci = new OciApi(null, $this->httpWrapper);
        $this->prewarmedEncoderPools = new PrewarmedEncoderPoolsApi(null, $this->httpWrapper);
    }
}
