<?php

namespace BitmovinApiSdk\Apis\Encoding\Live\StandbyPools\Actions;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class ActionsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * ActionsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Acquire an encoding from a standby pool
     *
     * @param string $poolId
     * @return \BitmovinApiSdk\Models\LiveStandbyPoolEncoding
     * @throws BitmovinApiException
     */
    public function acquireEncoding(string $poolId) : \BitmovinApiSdk\Models\LiveStandbyPoolEncoding
    {
        $pathParams = [
            'pool_id' => $poolId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/live/standby-pools/{pool_id}/actions/acquire-encoding', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\LiveStandbyPoolEncoding::class);
    }

    /**
     * Delete error encodings from the standby pool
     *
     * @param string $poolId
     * @return \BitmovinApiSdk\Models\LiveStandbyPoolEncoding
     * @throws BitmovinApiException
     */
    public function deleteErrorEncodings(string $poolId) : \BitmovinApiSdk\Models\LiveStandbyPoolEncoding
    {
        $pathParams = [
            'pool_id' => $poolId,
        ];

        $response = $this->httpWrapper->request('POST', '/encoding/live/standby-pools/{pool_id}/actions/delete-error-encodings', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\LiveStandbyPoolEncoding::class);
    }
}
