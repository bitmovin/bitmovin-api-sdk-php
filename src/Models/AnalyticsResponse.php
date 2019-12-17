<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AnalyticsResponse extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var object[] */
    public $rows;

    /** @var int */
    public $rowCount;

    /** @var \BitmovinApiSdk\Models\AnalyticsColumnLabel[] */
    public $columnLabels;

    /** @var \BitmovinApiSdk\Models\AnalyticsContextDescription[] */
    public $contextDescription;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->columnLabels = ObjectMapper::map($this->columnLabels, AnalyticsColumnLabel::class);
        $this->contextDescription = ObjectMapper::map($this->contextDescription, AnalyticsContextDescription::class);
    }

    /**
     * rows
     *
     * @param object[] $rows
     * @return $this
     */
    public function rows(array $rows)
    {
        $this->rows = $rows;

        return $this;
    }

    /**
     * Number of rows returned
     *
     * @param int $rowCount
     * @return $this
     */
    public function rowCount(int $rowCount)
    {
        $this->rowCount = $rowCount;

        return $this;
    }

    /**
     * columnLabels
     *
     * @param \BitmovinApiSdk\Models\AnalyticsColumnLabel[] $columnLabels
     * @return $this
     */
    public function columnLabels(array $columnLabels)
    {
        $this->columnLabels = $columnLabels;

        return $this;
    }

    /**
     * contextDescription
     *
     * @param \BitmovinApiSdk\Models\AnalyticsContextDescription[] $contextDescription
     * @return $this
     */
    public function contextDescription(array $contextDescription)
    {
        $this->contextDescription = $contextDescription;

        return $this;
    }
}

