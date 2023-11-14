<?php

namespace BitmovinApiSdk\Apis\Streams\SigningKeys;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class SigningKeysApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * SigningKeysApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Create new signing-key
     *
     * @return \BitmovinApiSdk\Models\StreamsSigningKeyResponse
     * @throws BitmovinApiException
     */
    public function create() : \BitmovinApiSdk\Models\StreamsSigningKeyResponse
    {
        $response = $this->httpWrapper->request('POST', '/streams/signing-keys', [],  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\StreamsSigningKeyResponse::class);
    }

    /**
     * Delete signing-key
     *
     * @param string $keyId
     * @throws BitmovinApiException
     */
    public function delete(string $keyId)
    {
        $pathParams = [
            'key_id' => $keyId,
        ];

        $this->httpWrapper->request('DELETE', '/streams/signing-keys/{key_id}', $pathParams,  null, null, false);
    }

    /**
     * Get list of public signing key ids
     *
     * @return \BitmovinApiSdk\Models\StreamsPublicSigningKeyResponse
     * @throws BitmovinApiException
     */
    public function get() : \BitmovinApiSdk\Models\StreamsPublicSigningKeyResponse
    {
        $response = $this->httpWrapper->request('GET', '/streams/signing-keys', [],  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\StreamsPublicSigningKeyResponse::class);
    }
}
