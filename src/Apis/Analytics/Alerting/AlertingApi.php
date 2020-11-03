<?php

namespace BitmovinApiSdk\Apis\Analytics\Alerting;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Analytics\Alerting\Rules\RulesApi;
use BitmovinApiSdk\Apis\Analytics\Alerting\Incidents\IncidentsApi;

class AlertingApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var RulesApi */
    public $rules;

    /** @var IncidentsApi */
    public $incidents;

    /**
     * AlertingApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->rules = new RulesApi(null, $this->httpWrapper);
        $this->incidents = new IncidentsApi(null, $this->httpWrapper);
    }
}
