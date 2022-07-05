<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class CdnUsageStatistics extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var Carbon */
    public $from;

    /** @var Carbon */
    public $to;

    /** @var float */
    public $storageUsageTotal;

    /** @var float */
    public $transferUsageTotal;

    /** @var \BitmovinApiSdk\Models\CdnUsage[] */
    public $usage;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->from = ObjectMapper::map($this->from, Carbon::class);
        $this->to = ObjectMapper::map($this->to, Carbon::class);
        $this->usage = ObjectMapper::map($this->usage, CdnUsage::class);
    }

    /**
     * usage
     *
     * @param \BitmovinApiSdk\Models\CdnUsage[] $usage
     * @return $this
     */
    public function usage(array $usage)
    {
        $this->usage = $usage;

        return $this;
    }
}

