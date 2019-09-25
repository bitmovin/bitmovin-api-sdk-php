<?php

namespace BitmovinApiSdk\Apis\Encoding\Infrastructure\Kubernetes\Configuration;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class ConfigurationApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * ConfigurationApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Retrieve Kubernetes Cluster Configuration
     *
     * @param string $infrastructureId
     * @return \BitmovinApiSdk\Models\KubernetesClusterConfiguration
     * @throws BitmovinApiException
     */
    public function get(string $infrastructureId) : \BitmovinApiSdk\Models\KubernetesClusterConfiguration
    {
        $pathParams = [
            'infrastructure_id' => $infrastructureId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/infrastructure/kubernetes/{infrastructure_id}/configuration', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\KubernetesClusterConfiguration::class);
    }

    /**
     * Update Kubernetes Cluster Configuration
     *
     * @param string $infrastructureId
     * @param \BitmovinApiSdk\Models\KubernetesClusterConfiguration $kubernetesClusterConfiguration
     * @return \BitmovinApiSdk\Models\KubernetesClusterConfiguration
     * @throws BitmovinApiException
     */
    public function update(string $infrastructureId, \BitmovinApiSdk\Models\KubernetesClusterConfiguration $kubernetesClusterConfiguration) : \BitmovinApiSdk\Models\KubernetesClusterConfiguration
    {
        $pathParams = [
            'infrastructure_id' => $infrastructureId,
        ];
        $response = $this->httpWrapper->request('PUT','/encoding/infrastructure/kubernetes/{infrastructure_id}/configuration', $pathParams,  null, $kubernetesClusterConfiguration, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\KubernetesClusterConfiguration::class);
    }
}
