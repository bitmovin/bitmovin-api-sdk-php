<?php

namespace BitmovinApiSdk\Models;

class RegulatoryAdvisoryTopic extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const TOBACCO = 'TOBACCO';

    /**
     * @param string $value
     * @return RegulatoryAdvisoryTopic
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Tobacco and vaping imagery, as covered by statutory on-screen advisory requirements such as the Indian Cigarettes and Other Tobacco Products Amendment Rules, 2023. Detected shots are reported per category, distinguishing tobacco from vaping imagery
     *
     * @return RegulatoryAdvisoryTopic
     */
    public static function TOBACCO()
    {
        return new RegulatoryAdvisoryTopic(self::TOBACCO);
    }
}

