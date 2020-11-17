<?php

namespace BitmovinApiSdk\Models;

class ExternalIdMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const CUSTOM = 'CUSTOM';

    /** @var string */
    private const GLOBAL = 'GLOBAL';

    /** @var string */
    private const GENERATED = 'GENERATED';

    /**
     * @param string $value
     * @return ExternalIdMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * ExternalId can be provided by using the the &#x60;externalId&#x60; property. This way is not recommend by AWS (https://aws.amazon.com/blogs/security/how-to-use-external-id-when-granting-access-to-your-aws-resources/).
     *
     * @return ExternalIdMode
     */
    public static function CUSTOM()
    {
        return new ExternalIdMode(self::CUSTOM);
    }

    /**
     * The response will include an externalId that&#39;s unique and consistent for your organization
     *
     * @return ExternalIdMode
     */
    public static function GLOBAL()
    {
        return new ExternalIdMode(self::GLOBAL);
    }

    /**
     * The response will include a random externalId.
     *
     * @return ExternalIdMode
     */
    public static function GENERATED()
    {
        return new ExternalIdMode(self::GENERATED);
    }
}

