<?php

namespace BitmovinApiSdk\Apis\Account;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Account\Information\InformationApi;
use BitmovinApiSdk\Apis\Account\Login\LoginApi;
use BitmovinApiSdk\Apis\Account\Limits\LimitsApi;
use BitmovinApiSdk\Apis\Account\ApiKeys\ApiKeysApi;
use BitmovinApiSdk\Apis\Account\Organizations\OrganizationsApi;

class AccountApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var InformationApi */
    public $information;

    /** @var LoginApi */
    public $login;

    /** @var LimitsApi */
    public $limits;

    /** @var ApiKeysApi */
    public $apiKeys;

    /** @var OrganizationsApi */
    public $organizations;

    /**
     * AccountApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->information = new InformationApi(null, $this->httpWrapper);
        $this->login = new LoginApi(null, $this->httpWrapper);
        $this->limits = new LimitsApi(null, $this->httpWrapper);
        $this->apiKeys = new ApiKeysApi(null, $this->httpWrapper);
        $this->organizations = new OrganizationsApi(null, $this->httpWrapper);
    }
}
