<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AzureAccount extends BitmovinResource
{
    /** @var string */
    public $subscriptionId;

    /** @var string */
    public $resourceGroupId;

    /** @var string */
    public $tenantId;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Your Azure Subscription ID (The ID of your subscription where you intend to run the Encoding VMs) (required)
     *
     * @param string $subscriptionId
     * @return $this
     */
    public function subscriptionId(string $subscriptionId)
    {
        $this->subscriptionId = $subscriptionId;

        return $this;
    }

    /**
     * The name of the resource group where you intend to run the Encoding VMs (required)
     *
     * @param string $resourceGroupId
     * @return $this
     */
    public function resourceGroupId(string $resourceGroupId)
    {
        $this->resourceGroupId = $resourceGroupId;

        return $this;
    }

    /**
     * The ID of your Active Directory where your subscription runs in (required)
     *
     * @param string $tenantId
     * @return $this
     */
    public function tenantId(string $tenantId)
    {
        $this->tenantId = $tenantId;

        return $this;
    }
}

