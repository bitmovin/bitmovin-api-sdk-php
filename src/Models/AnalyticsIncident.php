<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AnalyticsIncident extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $id;

    /** @var string */
    public $ruleId;

    /** @var string */
    public $start;

    /** @var string */
    public $end;

    /** @var bool */
    public $isRecovered;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Incident id
     *
     * @param string $id
     * @return $this
     */
    public function id(string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Rule Id
     *
     * @param string $ruleId
     * @return $this
     */
    public function ruleId(string $ruleId)
    {
        $this->ruleId = $ruleId;

        return $this;
    }

    /**
     * Start date of the incident
     *
     * @param string $start
     * @return $this
     */
    public function start(string $start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * End date of the incident
     *
     * @param string $end
     * @return $this
     */
    public function end(string $end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Recovery state of incident
     *
     * @param bool $isRecovered
     * @return $this
     */
    public function isRecovered(bool $isRecovered)
    {
        $this->isRecovered = $isRecovered;

        return $this;
    }
}

