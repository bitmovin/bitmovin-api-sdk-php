<?php

namespace BitmovinApiSdk\Apis\Player\CustomBuilds\Web\Status;

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
     * Custom Web Player Build Status
     *
     * @param string $customBuildId
     * @return \BitmovinApiSdk\Models\CustomPlayerBuildStatus
     * @throws BitmovinApiException
     */
    public function get(string $customBuildId) : \BitmovinApiSdk\Models\CustomPlayerBuildStatus
    {
        $pathParams = [
            'custom_build_id' => $customBuildId,
        ];
        $response = $this->httpWrapper->request('GET','/player/custom-builds/web/{custom_build_id}/status', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\CustomPlayerBuildStatus::class);
    }
}
