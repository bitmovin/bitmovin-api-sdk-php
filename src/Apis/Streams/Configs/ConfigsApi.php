<?php

namespace BitmovinApiSdk\Apis\Streams\Configs;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class ConfigsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * ConfigsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Update stream config by id
     *
     * @param string $configId
     * @param \BitmovinApiSdk\Models\StreamsConfigUpdateRequest $streamsConfigUpdateRequest
     * @return \BitmovinApiSdk\Models\StreamsConfigResponse
     * @throws BitmovinApiException
     */
    public function patchStreamConfig(string $configId, \BitmovinApiSdk\Models\StreamsConfigUpdateRequest $streamsConfigUpdateRequest) : \BitmovinApiSdk\Models\StreamsConfigResponse
    {
        $pathParams = [
            'config_id' => $configId,
        ];

        $response = $this->httpWrapper->request('PATCH', '/streams/configs/{config_id}', $pathParams,  null, $streamsConfigUpdateRequest, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\StreamsConfigResponse::class);
    }
}
