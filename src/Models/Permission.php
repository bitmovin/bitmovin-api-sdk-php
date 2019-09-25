<?php

namespace BitmovinApiSdk\Models;

class Permission extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const GET = 'GET';

    /** @var string */
    private const DELETE = 'DELETE';

    /** @var string */
    private const POST = 'POST';

    /** @var string */
    private const PUT = 'PUT';

    /** @var string */
    private const PATCH = 'PATCH';

    /**
     * @param string $value
     * @return Permission
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Permission to call http GET on the defined resource.
     *
     * @return Permission
     */
    public static function GET()
    {
        return new Permission(self::GET);
    }

    /**
     * Permission to call http DELETE on the defined resource.
     *
     * @return Permission
     */
    public static function DELETE()
    {
        return new Permission(self::DELETE);
    }

    /**
     * Permission to call http POST on the defined resource.
     *
     * @return Permission
     */
    public static function POST()
    {
        return new Permission(self::POST);
    }

    /**
     * Permission to call http PUT on the defined resource.
     *
     * @return Permission
     */
    public static function PUT()
    {
        return new Permission(self::PUT);
    }

    /**
     * Permission to call http PATCH on the defined resource.
     *
     * @return Permission
     */
    public static function PATCH()
    {
        return new Permission(self::PATCH);
    }
}

