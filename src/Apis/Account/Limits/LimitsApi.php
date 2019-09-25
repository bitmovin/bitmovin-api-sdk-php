<?php

namespace BitmovinApiSdk\Apis\Account\Limits;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class LimitsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * LimitsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Organization Limits
     *
     * @return ResourceLimitContainerPaginationResponse
     * @throws BitmovinApiException
     */
    public function list() : ResourceLimitContainerPaginationResponse
    {
        
        $response = $this->httpWrapper->request('GET','/account/limits', [],  null, null, true);

        return ObjectMapper::map($response, ResourceLimitContainerPaginationResponse::class);
    }
}
