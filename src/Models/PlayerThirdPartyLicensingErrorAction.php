<?php

namespace BitmovinApiSdk\Models;

class PlayerThirdPartyLicensingErrorAction extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const ALLOW = 'ALLOW';

    /** @var string */
    private const DENY = 'DENY';

    /**
     * @param string $value
     * @return PlayerThirdPartyLicensingErrorAction
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Allow the licensing request if the Third Party Licensing server returns anything other than HTTP 2xx.
     *
     * @return PlayerThirdPartyLicensingErrorAction
     */
    public static function ALLOW()
    {
        return new PlayerThirdPartyLicensingErrorAction(self::ALLOW);
    }

    /**
     * Deny the licensing request if the Third Party Licensing server returns anything other than HTTP 2xx.
     *
     * @return PlayerThirdPartyLicensingErrorAction
     */
    public static function DENY()
    {
        return new PlayerThirdPartyLicensingErrorAction(self::DENY);
    }
}

