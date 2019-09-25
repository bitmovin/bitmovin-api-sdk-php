<?php

namespace BitmovinApiSdk;

use GuzzleHttp\Client;
use Psr\Log\LoggerInterface;

class Configuration
{

    /** @var string */
    public $apiKey;

    /** @var string */
    public $baseUrl = 'https://api.bitmovin.com/v1';

    /** @var LoggerInterface */
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
     * @param string $baseUrl
     * @return $this
     */
    public function baseUrl(string $baseUrl)
    {
        $this->baseUrl = $baseUrl;

        return $this;
    }

    /**
     * @param LoggerInterface $logger
     * @return $this
     */
    public function logger(LoggerInterface $logger)
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
