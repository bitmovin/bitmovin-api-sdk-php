<?php

namespace BitmovinApiSdk\Apis\Encoding\Infrastructure\Kubernetes;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Infrastructure\Kubernetes\Status\StatusApi;
use BitmovinApiSdk\Apis\Encoding\Infrastructure\Kubernetes\Customdata\CustomdataApi;
use BitmovinApiSdk\Apis\Encoding\Infrastructure\Kubernetes\Configuration\ConfigurationApi;
use BitmovinApiSdk\Apis\Encoding\Infrastructure\Kubernetes\AgentDeployment\AgentDeploymentApi;
use BitmovinApiSdk\Apis\Encoding\Infrastructure\Kubernetes\PrewarmedDeployment\PrewarmedDeploymentApi;

class KubernetesApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var StatusApi */
    public $status;

    /** @var CustomdataApi */
    public $customdata;

    /** @var ConfigurationApi */
    public $configuration;

    /** @var AgentDeploymentApi */
    public $agentDeployment;

    /** @var PrewarmedDeploymentApi */
    public $prewarmedDeployment;

    /**
     * KubernetesApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->status = new StatusApi(null, $this->httpWrapper);
        $this->customdata = new CustomdataApi(null, $this->httpWrapper);
        $this->configuration = new ConfigurationApi(null, $this->httpWrapper);
        $this->agentDeployment = new AgentDeploymentApi(null, $this->httpWrapper);
        $this->prewarmedDeployment = new PrewarmedDeploymentApi(null, $this->httpWrapper);
    }

    /**
     * Connect Kubernetes Cluster
     *
     * @param \BitmovinApiSdk\Models\KubernetesCluster $kubernetesCluster
     * @return \BitmovinApiSdk\Models\KubernetesCluster
     * @throws BitmovinApiException
     */
    public function create(\BitmovinApiSdk\Models\KubernetesCluster $kubernetesCluster) : \BitmovinApiSdk\Models\KubernetesCluster
    {
        
        $response = $this->httpWrapper->request('POST','/encoding/infrastructure/kubernetes', [],  null, $kubernetesCluster, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\KubernetesCluster::class);
    }

    /**
     * Disconnect Kubernetes Cluster
     *
     * @param string $infrastructureId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $infrastructureId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'infrastructure_id' => $infrastructureId,
        ];
        $response = $this->httpWrapper->request('DELETE','/encoding/infrastructure/kubernetes/{infrastructure_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Kubernetes Cluster Details
     *
     * @param string $infrastructureId
     * @return \BitmovinApiSdk\Models\KubernetesCluster
     * @throws BitmovinApiException
     */
    public function get(string $infrastructureId) : \BitmovinApiSdk\Models\KubernetesCluster
    {
        $pathParams = [
            'infrastructure_id' => $infrastructureId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/infrastructure/kubernetes/{infrastructure_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\KubernetesCluster::class);
    }

    /**
     * List Kubernetes Cluster
     *
     * @param KubernetesClusterListQueryParams|null $queryParams
     * @return KubernetesClusterPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(KubernetesClusterListQueryParams $queryParams = null) : KubernetesClusterPaginationResponse
    {
        
        $response = $this->httpWrapper->request('GET','/encoding/infrastructure/kubernetes', [], $queryParams, null, true);

        return ObjectMapper::map($response, KubernetesClusterPaginationResponse::class);
    }
}
