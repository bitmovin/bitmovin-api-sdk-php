<?php

namespace BitmovinApiSdk\Apis\Encoding\Infrastructure\Kubernetes\PrewarmedDeployment;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class PrewarmedDeploymentApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * PrewarmedDeploymentApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Prewarm Encoders
     *
     * @param string $infrastructureId
     * @param \BitmovinApiSdk\Models\PrewarmEncoderSettings $prewarmEncoderSettings
     * @return \BitmovinApiSdk\Models\PrewarmEncoderSettings
     * @throws BitmovinApiException
     */
    public function create(string $infrastructureId, \BitmovinApiSdk\Models\PrewarmEncoderSettings $prewarmEncoderSettings) : \BitmovinApiSdk\Models\PrewarmEncoderSettings
    {
        $pathParams = [
            'infrastructure_id' => $infrastructureId,
        ];
        $response = $this->httpWrapper->request('POST','/encoding/infrastructure/kubernetes/{infrastructure_id}/prewarmed-deployment', $pathParams,  null, $prewarmEncoderSettings, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\PrewarmEncoderSettings::class);
    }

    /**
     * Delete Prewarmed Encoders
     *
     * @param string $infrastructureId
     * @param string $deploymentId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $infrastructureId, string $deploymentId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'infrastructure_id' => $infrastructureId,
            'deployment_id' => $deploymentId,
        ];
        $response = $this->httpWrapper->request('DELETE','/encoding/infrastructure/kubernetes/{infrastructure_id}/prewarmed-deployment/{deployment_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Get Prewarmed Encoders
     *
     * @param string $infrastructureId
     * @param string $deploymentId
     * @return \BitmovinApiSdk\Models\PrewarmEncoderSettings
     * @throws BitmovinApiException
     */
    public function get(string $infrastructureId, string $deploymentId) : \BitmovinApiSdk\Models\PrewarmEncoderSettings
    {
        $pathParams = [
            'infrastructure_id' => $infrastructureId,
            'deployment_id' => $deploymentId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/infrastructure/kubernetes/{infrastructure_id}/prewarmed-deployment/{deployment_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\PrewarmEncoderSettings::class);
    }

    /**
     * List Prewarmed Encoders
     *
     * @param string $infrastructureId
     * @param PrewarmEncoderSettingsListQueryParams|null $queryParams
     * @return PrewarmEncoderSettingsPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $infrastructureId, PrewarmEncoderSettingsListQueryParams $queryParams = null) : PrewarmEncoderSettingsPaginationResponse
    {
        $pathParams = [
            'infrastructure_id' => $infrastructureId,
        ];
        $response = $this->httpWrapper->request('GET','/encoding/infrastructure/kubernetes/{infrastructure_id}/prewarmed-deployment', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, PrewarmEncoderSettingsPaginationResponse::class);
    }
}
