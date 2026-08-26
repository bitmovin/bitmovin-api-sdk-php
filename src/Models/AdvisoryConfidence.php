<?php

namespace BitmovinApiSdk\Models;

class AdvisoryConfidence extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const HIGH = 'HIGH';

    /** @var string */
    private const MEDIUM = 'MEDIUM';

    /** @var string */
    private const LOW = 'LOW';

    /** @var string */
    private const UNKNOWN = 'UNKNOWN';

    /**
     * @param string $value
     * @return AdvisoryConfidence
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * The model is certain of the detection, with the subject plainly visible
     *
     * @return AdvisoryConfidence
     */
    public static function HIGH()
    {
        return new AdvisoryConfidence(self::HIGH);
    }

    /**
     * The model is reasonably certain, but the subject is partly obscured, brief or otherwise not plainly visible
     *
     * @return AdvisoryConfidence
     */
    public static function MEDIUM()
    {
        return new AdvisoryConfidence(self::MEDIUM);
    }

    /**
     * The model flagged the shot on a cue it could not resolve, for example a small, dark or fleeting object, and another reading of it is possible. Detection is tuned to flag uncertain cases rather than miss them, so advisories below HIGH confidence are expected
     *
     * @return AdvisoryConfidence
     */
    public static function LOW()
    {
        return new AdvisoryConfidence(self::LOW);
    }

    /**
     * No confidence could be established because the shot was never assessed. Returned with status BLOCKED, where the advisory is a conservative assumption rather than an observation
     *
     * @return AdvisoryConfidence
     */
    public static function UNKNOWN()
    {
        return new AdvisoryConfidence(self::UNKNOWN);
    }
}

