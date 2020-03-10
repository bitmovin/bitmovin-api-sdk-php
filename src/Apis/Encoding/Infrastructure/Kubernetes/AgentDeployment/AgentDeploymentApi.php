<?php

namespace BitmovinApiSdk\Apis\Encoding\Infrastructure\Kubernetes\AgentDeployment;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class AgentDeploymentApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * AgentDeploymentApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Download bitmovin-agent deployment
     *
     * @param string $infrastructureId
     * @throws BitmovinApiException
     */
    public function get(string $infrastructureId)
    {
        $pathParams = [
            'infrastructure_id' => $infrastructureId,
        ];

        $this->httpWrapper->request('GET', '/encoding/infrastructure/kubernetes/{infrastructure_id}/agent-deployment', $pathParams,  null, null, false);
    }
}
