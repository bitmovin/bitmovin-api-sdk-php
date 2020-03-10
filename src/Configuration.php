<?php

namespace BitmovinApiSdk;

use BitmovinApiSdk\Common\Logging\BitmovinLoggerInterface;
use GuzzleHttp\Client;

class Configuration
{
    /** @var string */
    public $apiKey;

    /** @var string */
    public $tenantOrgId;

    /** @var string */
    public $baseUrl = 'https://api.bitmovin.com/v1';

    /** @var BitmovinLoggerInterface */
    public $logger;

    /** @var Client */
    public $httpClient;

    public static function create()
    {
        return new static();
    }

    /**
     * @param string $apiKey
     * @return Configuration
     */
    public function apiKey(string $apiKey)
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    /**
     * @param string $tenantOrgId
     * @return Configuration
     */
    public function tenantOrgId(string $tenantOrgId)
    {
        $this->tenantOrgId = $tenantOrgId;

        return $this;
    }

    /**
     * @param string $baseUrl
     * @return $this
     */
    public function baseUrl(string $baseUrl)
    {
        $this->baseUrl = $baseUrl;

        return $this;
    }

    /**
     * @param BitmovinLoggerInterface $logger
     * @return $this
     */
    public function logger(BitmovinLoggerInterface $logger)
    {
        $this->logger = $logger;

        return $this;
    }

    /**
     * @param Client $client
     * @return $this
     */
    public function httpClient(Client $client)
    {
        $this->httpClient = $client;

        return $this;
    }
}
