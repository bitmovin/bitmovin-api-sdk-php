<?php

namespace BitmovinApiSdk\Apis\Encoding\Infrastructure\Kubernetes\Status;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;


class StatusApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * StatusApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Kubernetes Cluster Status
     *
     * @param string $infrastructureId
     * @return \BitmovinApiSdk\Models\void
     * @throws BitmovinApiException
     */
    public function get(string $infrastructureId)
    {
        $pathParams = [
            'infrastructure_id' => $infrastructureId,
        ];
        $this->httpWrapper->request('GET','/encoding/infrastructure/kubernetes/{infrastructure_id}/status', $pathParams,  null, null, false);
    }
}
