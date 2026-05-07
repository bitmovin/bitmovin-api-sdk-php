<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AzureOutput extends Output
{
    /** @var string */
    public $accountName;

    /** @var string */
    public $accountKey;

    /** @var AzureServicePrincipal */
    public $servicePrincipal;

    /** @var string */
    public $container;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->servicePrincipal = ObjectMapper::map($this->servicePrincipal, AzureServicePrincipal::class);
    }

    /**
     * Azure Account Name (required)
     *
     * @param string $accountName
     * @return $this
     */
    public function accountName(string $accountName)
    {
        $this->accountName = $accountName;

        return $this;
    }

    /**
     * Azure Account Key
     *
     * @param string $accountKey
     * @return $this
     */
    public function accountKey(string $accountKey)
    {
        $this->accountKey = $accountKey;

        return $this;
    }

    /**
     * servicePrincipal
     *
     * @param AzureServicePrincipal $servicePrincipal
     * @return $this
     */
    public function servicePrincipal(AzureServicePrincipal $servicePrincipal)
    {
        $this->servicePrincipal = $servicePrincipal;

        return $this;
    }

    /**
     * Name of the bucket (required)
     *
     * @param string $container
     * @return $this
     */
    public function container(string $container)
    {
        $this->container = $container;

        return $this;
    }
}

