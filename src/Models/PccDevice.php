<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class PccDevice extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $name;

    /** @var bool */
    public $namePlaceholder;

    /** @var string */
    public $qualifier;

    /** @var string */
    public $deviceType;

    /** @var string[] */
    public $sessionIds;

    /** @var \BitmovinApiSdk\Models\PccDeviceUnit[] */
    public $units;

    /** @var string[] */
    public $playerVersions;

    /** @var \BitmovinApiSdk\Models\PccCell[] */
    public $cells;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->units = ObjectMapper::map($this->units, PccDeviceUnit::class);
        $this->cells = ObjectMapper::map($this->cells, PccCell::class);
    }

    /**
     * The device pool, as the reader is shown it. (required)
     *
     * @param string $name
     * @return $this
     */
    public function name(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * True where no naming rule recognised this pool, so &#x60;name&#x60; is a stated placeholder rather than the pool&#39;s own. The units and sessions below still tell two such pools apart. (required)
     *
     * @param bool $namePlaceholder
     * @return $this
     */
    public function namePlaceholder(bool $namePlaceholder)
    {
        $this->namePlaceholder = $namePlaceholder;

        return $this;
    }

    /**
     * What distinguishes this pool from another of the same name, where anything does.
     *
     * @param string $qualifier
     * @return $this
     */
    public function qualifier(string $qualifier)
    {
        $this->qualifier = $qualifier;

        return $this;
    }

    /**
     * The fleet&#39;s own classification, such as &#x60;tv&#x60;, &#x60;desktop&#x60;, &#x60;stb&#x60; or &#x60;mobile&#x60;. Never one guessed from a name, and not a closed set: the fleet may answer with a kind this list does not name.
     *
     * @param string $deviceType
     * @return $this
     */
    public function deviceType(string $deviceType)
    {
        $this->deviceType = $deviceType;

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
     * units
     *
     * @param \BitmovinApiSdk\Models\PccDeviceUnit[] $units
     * @return $this
     */
    public function units(array $units)
    {
        $this->units = $units;

        return $this;
    }

    /**
     * Every player version that measured this pool. More than one means the runs spanned a player release. (required)
     *
     * @param string[] $playerVersions
     * @return $this
     */
    public function playerVersions(array $playerVersions)
    {
        $this->playerVersions = $playerVersions;

        return $this;
    }

    /**
     * One per column, in &#x60;combinations&#x60; order. (required)
     *
     * @param \BitmovinApiSdk\Models\PccCell[] $cells
     * @return $this
     */
    public function cells(array $cells)
    {
        $this->cells = $cells;

        return $this;
    }
}

