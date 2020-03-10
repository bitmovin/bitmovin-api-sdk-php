<?php

namespace BitmovinApiSdk\Apis\Account\ApiKeys;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class ApiKeysApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * ApiKeysApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Create Api Key
     *
     * @return \BitmovinApiSdk\Models\AccountApiKey
     * @throws BitmovinApiException
     */
    public function create() : \BitmovinApiSdk\Models\AccountApiKey
    {
        $response = $this->httpWrapper->request('POST', '/account/api-keys', [],  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AccountApiKey::class);
    }

    /**
     * Delete Api Key
     *
     * @param string $apiKeyId
     * @return \BitmovinApiSdk\Models\BitmovinResponse
     * @throws BitmovinApiException
     */
    public function delete(string $apiKeyId) : \BitmovinApiSdk\Models\BitmovinResponse
    {
        $pathParams = [
            'api_key_id' => $apiKeyId,
        ];

        $response = $this->httpWrapper->request('DELETE', '/account/api-keys/{api_key_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\BitmovinResponse::class);
    }

    /**
     * Get Api Key
     *
     * @param string $apiKeyId
     * @return \BitmovinApiSdk\Models\AccountApiKey
     * @throws BitmovinApiException
     */
    public function get(string $apiKeyId) : \BitmovinApiSdk\Models\AccountApiKey
    {
        $pathParams = [
            'api_key_id' => $apiKeyId,
        ];

        $response = $this->httpWrapper->request('GET', '/account/api-keys/{api_key_id}', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\AccountApiKey::class);
    }

    /**
     * List Api Keys
     *
     * @return AccountApiKeyPaginationResponse
     * @throws BitmovinApiException
     */
    public function list() : AccountApiKeyPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/account/api-keys', [],  null, null, true);

        return ObjectMapper::map($response, AccountApiKeyPaginationResponse::class);
    }
}
