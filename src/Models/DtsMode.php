<?php

namespace BitmovinApiSdk\Models;

class DtsMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const EXPRESS_AUDIO = 'EXPRESS_AUDIO';

    /** @var string */
    private const DIGITAL_SURROUND = 'DIGITAL_SURROUND';

    /**
     * @param string $value
     * @return DtsMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * DTS Express Audio
     *
     * @return DtsMode
     */
    public static function EXPRESS_AUDIO()
    {
        return new DtsMode(self::EXPRESS_AUDIO);
    }

    /**
     * DTS Digital Surround
     *
     * @return DtsMode
     */
    public static function DIGITAL_SURROUND()
    {
        return new DtsMode(self::DIGITAL_SURROUND);
    }
}

