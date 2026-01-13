<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AdInsertionSettings extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var bool */
    public $enableEsamMediaPointInsertion;

    /** @var ClockSynchronizationMode */
    public $clockSynchronizationMode;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->clockSynchronizationMode = ObjectMapper::map($this->clockSynchronizationMode, ClockSynchronizationMode::class);
    }

    /**
     * Enabling this allows on-demand insertion of ESAM MediaPoints. When enabled, the encoder ensures that at least one SCTE-35 data stream is available.
     *
     * @param bool $enableEsamMediaPointInsertion
     * @return $this
     */
    public function enableEsamMediaPointInsertion(bool $enableEsamMediaPointInsertion)
    {
        $this->enableEsamMediaPointInsertion = $enableEsamMediaPointInsertion;

        return $this;
    }

    /**
     * Mode of clock synchronization during ad insertion.  If an HLS manifest is configured that has a PDT source set, the encoder defaults to the equivalent clockSynchronizationMode.  If both, HLS PDT source and clockSynchronizationMode, are set and don&#39;t match, the encoding will fail.
     *
     * @param ClockSynchronizationMode $clockSynchronizationMode
     * @return $this
     */
    public function clockSynchronizationMode(ClockSynchronizationMode $clockSynchronizationMode)
    {
        $this->clockSynchronizationMode = $clockSynchronizationMode;

        return $this;
    }
}

