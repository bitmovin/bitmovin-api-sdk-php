<?php

namespace BitmovinApiSdk\Models;

class AnalyticsRuleMetric extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const AVG_VIDEO_STARTUPTIME = 'AVG_VIDEO_STARTUPTIME';

    /** @var string */
    private const MEDIAN_VIDEO_STARTUPTIME = 'MEDIAN_VIDEO_STARTUPTIME';

    /**
     * @param string $value
     * @return AnalyticsRuleMetric
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * AVG_VIDEO_STARTUPTIME
     *
     * @return AnalyticsRuleMetric
     */
    public static function AVG_VIDEO_STARTUPTIME()
    {
        return new AnalyticsRuleMetric(self::AVG_VIDEO_STARTUPTIME);
    }

    /**
     * MEDIAN_VIDEO_STARTUPTIME
     *
     * @return AnalyticsRuleMetric
     */
    public static function MEDIAN_VIDEO_STARTUPTIME()
    {
        return new AnalyticsRuleMetric(self::MEDIAN_VIDEO_STARTUPTIME);
    }
}

