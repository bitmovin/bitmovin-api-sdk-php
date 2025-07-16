<?php

namespace BitmovinApiSdk\Models;

class DashScte35PeriodOption extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const SINGLE_PERIOD = 'SINGLE_PERIOD';

    /** @var string */
    private const MULTI_PERIOD = 'MULTI_PERIOD';

    /**
     * @param string $value
     * @return DashScte35PeriodOption
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Controls how SCTE-35 signals are applied at the DASH period level. &lt;ul&gt;   &lt;li&gt;SINGLE_PERIOD: Applies SCTE markers to a single DASH period.&lt;/li&gt;   &lt;li&gt;MULTI_PERIOD: Multiple periods are created based on received SCTE-35 messages.&lt;/li&gt; &lt;/ul&gt;
     *
     * @return DashScte35PeriodOption
     */
    public static function SINGLE_PERIOD()
    {
        return new DashScte35PeriodOption(self::SINGLE_PERIOD);
    }

    /**
     * Controls how SCTE-35 signals are applied at the DASH period level. &lt;ul&gt;   &lt;li&gt;SINGLE_PERIOD: Applies SCTE markers to a single DASH period.&lt;/li&gt;   &lt;li&gt;MULTI_PERIOD: Multiple periods are created based on received SCTE-35 messages.&lt;/li&gt; &lt;/ul&gt;
     *
     * @return DashScte35PeriodOption
     */
    public static function MULTI_PERIOD()
    {
        return new DashScte35PeriodOption(self::MULTI_PERIOD);
    }
}

