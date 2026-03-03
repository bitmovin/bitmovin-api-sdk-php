<?php

namespace BitmovinApiSdk\Apis\Agents;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Agents\Aisa\AisaApi;

class AgentsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var AisaApi */
    public $aisa;

    /**
     * AgentsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->aisa = new AisaApi(null, $this->httpWrapper);
    }
}
