<?php

namespace BitmovinApiSdk\Apis\Agents\Assistant;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Agents\Assistant\Sessions\SessionsApi;

class AssistantApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var SessionsApi */
    public $sessions;

    /**
     * AssistantApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->sessions = new SessionsApi(null, $this->httpWrapper);
    }
}
