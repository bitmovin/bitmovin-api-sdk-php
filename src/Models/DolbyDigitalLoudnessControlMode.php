<?php

namespace BitmovinApiSdk\Models;

class DolbyDigitalLoudnessControlMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const PASSTHROUGH = 'PASSTHROUGH';

    /** @var string */
    private const CORRECTION = 'CORRECTION';

    /**
     * @param string $value
     * @return DolbyDigitalLoudnessControlMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * The provided &#39;dialnorm&#39; value will be set in DD/DD+ bit-stream metadata. The provided value is assumed to be a correct measure of content loudness. No additional loudness measurement or loudness correction will take place.
     *
     * @return DolbyDigitalLoudnessControlMode
     */
    public static function PASSTHROUGH()
    {
        return new DolbyDigitalLoudnessControlMode(self::PASSTHROUGH);
    }

    /**
     * The loudness is corrected with the values provided
     *
     * @return DolbyDigitalLoudnessControlMode
     */
    public static function CORRECTION()
    {
        return new DolbyDigitalLoudnessControlMode(self::CORRECTION);
    }
}

