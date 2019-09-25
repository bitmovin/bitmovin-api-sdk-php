<?php

namespace BitmovinApiSdk\Apis\Account\Information;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class InformationApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * InformationApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Current Account Information
     *
     * @return \BitmovinApiSdk\Models\AccountInformation
     * @throws BitmovinApiException
     */
    public function get() : \BitmovinApiSdk\Models\AccountInformation
    {
        
        $response = $this->httpWrapper->request('GET','/account/information', [],  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AccountInformation::class);
    }
}
