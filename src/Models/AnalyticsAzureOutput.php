<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AnalyticsAzureOutput extends AnalyticsOutput
{
    /** @var string */
    public $accountName;

    /** @var string */
    public $accountKey;

    /** @var string */
    public $container;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
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
     * Microsoft Azure Account Access Key with the &#x60;Contributor Role&#x60; (required)
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
     * Microsoft Azure container name (required)
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

