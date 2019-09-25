<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class DailyStatisticsPerLabel extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var Carbon */
    public $date;

    /** @var \BitmovinApiSdk\Models\DailyStatistics[] */
    public $labels;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->date = ObjectMapper::map($this->date, Carbon::class);
        $this->labels = ObjectMapper::map($this->labels, DailyStatistics::class);
    }

    /**
     * Date, format. yyyy-MM-dd (required)
     *
     * @param Carbon $date
     * @return $this
     */
    public function date(Carbon $date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * List of labels and their aggregated statistics (required)
     *
     * @param \BitmovinApiSdk\Models\DailyStatistics[] $labels
     * @return $this
     */
    public function labels(array $labels)
    {
        $this->labels = $labels;

        return $this;
    }
}

