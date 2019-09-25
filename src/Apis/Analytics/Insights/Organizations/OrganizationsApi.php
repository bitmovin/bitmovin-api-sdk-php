<?php

namespace BitmovinApiSdk\Apis\Analytics\Insights\Organizations;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Analytics\Insights\Organizations\Settings\SettingsApi;

class OrganizationsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var SettingsApi */
    public $settings;

    /**
     * OrganizationsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->settings = new SettingsApi(null, $this->httpWrapper);
    }
}
