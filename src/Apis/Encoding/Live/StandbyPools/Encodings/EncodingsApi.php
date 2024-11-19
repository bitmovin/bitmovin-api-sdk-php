<?php

namespace BitmovinApiSdk\Apis\Encoding\Live\StandbyPools\Encodings;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class EncodingsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * EncodingsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Delete encoding from pool by id
     *
     * @param string $poolId
     * @param string $id
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $poolId, string $id) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'pool_id' => $poolId,
            'id' => $id,
        ];

        $response = $this->httpWrapper->request('DELETE', '/encoding/live/standby-pools/{pool_id}/encodings/{id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * List encodings from a standby pool
     *
     * @param string $poolId
     * @param LiveStandbyPoolEncodingListQueryParams|null $queryParams
     * @return LiveStandbyPoolEncodingPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $poolId, LiveStandbyPoolEncodingListQueryParams $queryParams = null) : LiveStandbyPoolEncodingPaginationResponse
    {
        $pathParams = [
            'pool_id' => $poolId,
        ];

        $response = $this->httpWrapper->request('GET', '/encoding/live/standby-pools/{pool_id}/encodings', $pathParams, $queryParams, null, true);

        return ObjectMapper::map($response, LiveStandbyPoolEncodingPaginationResponse::class);
    }
}
