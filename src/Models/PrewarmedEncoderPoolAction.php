<?php

namespace BitmovinApiSdk\Models;

class PrewarmedEncoderPoolAction extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const START = 'START';

    /** @var string */
    private const STOP = 'STOP';

    /**
     * @param string $value
     * @return PrewarmedEncoderPoolAction
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * START
     *
     * @return PrewarmedEncoderPoolAction
     */
    public static function START()
    {
        return new PrewarmedEncoderPoolAction(self::START);
    }

    /**
     * STOP
     *
     * @return PrewarmedEncoderPoolAction
     */
    public static function STOP()
    {
        return new PrewarmedEncoderPoolAction(self::STOP);
    }
}

