<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class PccDeviceUnit extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $unitId;

    /** @var string[] */
    public $sessionIds;

    /** @var string */
    public $browserVersion;

    /** @var string */
    public $osVersion;

    /** @var string[] */
    public $tags;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * The fleet&#39;s identifier for one physical machine, so two rows of the same pool can be told apart. (required)
     *
     * @param string $unitId
     * @return $this
     */
    public function unitId(string $unitId)
    {
        $this->unitId = $unitId;

        return $this;
    }

    /**
     * sessionIds
     *
     * @param string[] $sessionIds
     * @return $this
     */
    public function sessionIds(array $sessionIds)
    {
        $this->sessionIds = $sessionIds;

        return $this;
    }

    /**
     * browserVersion
     *
     * @param string $browserVersion
     * @return $this
     */
    public function browserVersion(string $browserVersion)
    {
        $this->browserVersion = $browserVersion;

        return $this;
    }

    /**
     * osVersion
     *
     * @param string $osVersion
     * @return $this
     */
    public function osVersion(string $osVersion)
    {
        $this->osVersion = $osVersion;

        return $this;
    }

    /**
     * Attribute tags such as &#x60;webos:firmwareVersion:33.23.05&#x60;, which is where a television&#39;s firmware lives.
     *
     * @param string[] $tags
     * @return $this
     */
    public function tags(array $tags)
    {
        $this->tags = $tags;

        return $this;
    }
}

