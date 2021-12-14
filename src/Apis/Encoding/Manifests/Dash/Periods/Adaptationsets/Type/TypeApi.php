<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Dash\Periods\Adaptationsets\Type;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class TypeApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * TypeApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Get Input Type
     *
     * @param string $manifestId
     * @param string $periodId
     * @param string $adaptationsetId
     * @return \BitmovinApiSdk\Models\AdaptationSetTypeResponse
     * @throws BitmovinApiException
     */
    public function get(string $manifestId, string $periodId, string $adaptationsetId) : \BitmovinApiSdk\Models\AdaptationSetTypeResponse
    {
        $pathParams = [
            'manifest_id' => $manifestId,
            'period_id' => $periodId,
            'adaptationset_id' => $adaptationsetId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/manifests/dash/{manifest_id}/periods/{period_id}/adaptationsets/{adaptationset_id}/type', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AdaptationSetTypeResponse::class);
    }
}
