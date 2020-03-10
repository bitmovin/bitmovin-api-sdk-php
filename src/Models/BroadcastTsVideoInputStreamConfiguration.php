<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class BroadcastTsVideoInputStreamConfiguration extends BroadcastTsInputStreamConfiguration
{
    /** @var bool */
    public $insertAccessUnitDelimiterInAvc;

    /** @var int */
    public $maxDecodeDelay;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * If true, add access unit delimiters (AUD) to AVC stream if AUD is missing from input elementary stream.
     *
     * @param bool $insertAccessUnitDelimiterInAvc
     * @return $this
     */
    public function insertAccessUnitDelimiterInAvc(bool $insertAccessUnitDelimiterInAvc)
    {
        $this->insertAccessUnitDelimiterInAvc = $insertAccessUnitDelimiterInAvc;

        return $this;
    }

    /**
     * Maximum Decoder Delay in 90 KHz cycles. When non-zero, the difference between the PCR and the DTS for each picture as it is inserted into the output transport stream is limited to this number of 90 KHz cycles. Values below 1000 are treated as 0 and ignored. Valid Range [0, 1000-900000]
     *
     * @param int $maxDecodeDelay
     * @return $this
     */
    public function maxDecodeDelay(int $maxDecodeDelay)
    {
        $this->maxDecodeDelay = $maxDecodeDelay;

        return $this;
    }
}

