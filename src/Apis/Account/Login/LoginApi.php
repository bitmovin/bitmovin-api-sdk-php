<?php

namespace BitmovinApiSdk\Apis\Account\Login;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class LoginApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * LoginApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Login
     *
     * @param \BitmovinApiSdk\Models\Login $login
     * @return \BitmovinApiSdk\Models\AccountInformation
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\Login $login) : \BitmovinApiSdk\Models\AccountInformation
    {
        
        $response = $this->httpWrapper->request('POST','/account/login', [],  null, $login, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AccountInformation::class);
    }
}
