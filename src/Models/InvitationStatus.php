<?php

namespace BitmovinApiSdk\Models;

class InvitationStatus extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const PENDING = 'PENDING';

    /** @var string */
    private const ACCEPTED = 'ACCEPTED';

    /**
     * @param string $value
     * @return InvitationStatus
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Pending status of the invitation
     *
     * @return InvitationStatus
     */
    public static function PENDING()
    {
        return new InvitationStatus(self::PENDING);
    }

    /**
     * Accepted status of the invitation
     *
     * @return InvitationStatus
     */
    public static function ACCEPTED()
    {
        return new InvitationStatus(self::ACCEPTED);
    }
}

