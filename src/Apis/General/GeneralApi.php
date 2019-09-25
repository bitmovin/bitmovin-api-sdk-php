<?php

namespace BitmovinApiSdk\Apis\General;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\General\ErrorDefinitions\ErrorDefinitionsApi;

class GeneralApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var ErrorDefinitionsApi */
    public $errorDefinitions;

    /**
     * GeneralApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->errorDefinitions = new ErrorDefinitionsApi(null, $this->httpWrapper);
    }
}
