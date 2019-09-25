<?php

namespace BitmovinApiSdk\Models;

class OrganizationType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const ROOT_ORGANIZATION = 'ROOT_ORGANIZATION';

    /** @var string */
    private const SUB_ORGANIZATION = 'SUB_ORGANIZATION';

    /**
     * @param string $value
     * @return OrganizationType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * ROOT_ORGANIZATION
     *
     * @return OrganizationType
     */
    public static function ROOT_ORGANIZATION()
    {
        return new OrganizationType(self::ROOT_ORGANIZATION);
    }

    /**
     * SUB_ORGANIZATION
     *
     * @return OrganizationType
     */
    public static function SUB_ORGANIZATION()
    {
        return new OrganizationType(self::SUB_ORGANIZATION);
    }
}

