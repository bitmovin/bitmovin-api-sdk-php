<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AzureServicePrincipal extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $tenantId;

    /** @var string */
    public $clientId;

    /** @var string */
    public $clientSecret;

    /** @var string */
    public $clientCertificate;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Tenant ID (Directory ID) of the Azure service principal (required)
     *
     * @param string $tenantId
     * @return $this
     */
    public function tenantId(string $tenantId)
    {
        $this->tenantId = $tenantId;

        return $this;
    }

    /**
     * Client ID of the Azure service principal (required)
     *
     * @param string $clientId
     * @return $this
     */
    public function clientId(string $clientId)
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * Client secret of the Azure service principal
     *
     * @param string $clientSecret
     * @return $this
     */
    public function clientSecret(string $clientSecret)
    {
        $this->clientSecret = $clientSecret;

        return $this;
    }

    /**
     * PEM-encoded client certificate and private key of the Azure service principal. Newline symbols must be preserved.
     *
     * @param string $clientCertificate
     * @return $this
     */
    public function clientCertificate(string $clientCertificate)
    {
        $this->clientCertificate = $clientCertificate;

        return $this;
    }
}

