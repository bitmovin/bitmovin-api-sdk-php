<?php

namespace BitmovinApiSdk\Models;

class SidecarErrorMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const FAIL_ON_ERROR = 'FAIL_ON_ERROR';

    /** @var string */
    private const CONTINUE_ON_ERROR = 'CONTINUE_ON_ERROR';

    /**
     * @param string $value
     * @return SidecarErrorMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * If the transfer of the sidecar file fails, the whole encoding will fail
     *
     * @return SidecarErrorMode
     */
    public static function FAIL_ON_ERROR()
    {
        return new SidecarErrorMode(self::FAIL_ON_ERROR);
    }

    /**
     * If the transfer of the sidecar file fails, there is only a warning and the encoding will still continue
     *
     * @return SidecarErrorMode
     */
    public static function CONTINUE_ON_ERROR()
    {
        return new SidecarErrorMode(self::CONTINUE_ON_ERROR);
    }
}

