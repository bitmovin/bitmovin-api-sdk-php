<?php

namespace BitmovinApiSdk\Models;

class S3StorageClass extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const GLACIER_IR = 'GLACIER_IR';

    /** @var string */
    private const INTELLIGENT_TIERING = 'INTELLIGENT_TIERING';

    /** @var string */
    private const ONEZONE_IA = 'ONEZONE_IA';

    /** @var string */
    private const REDUCED_REDUNDANCY = 'REDUCED_REDUNDANCY';

    /** @var string */
    private const STANDARD = 'STANDARD';

    /** @var string */
    private const STANDARD_IA = 'STANDARD_IA';

    /**
     * @param string $value
     * @return S3StorageClass
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * GLACIER_IR
     *
     * @return S3StorageClass
     */
    public static function GLACIER_IR()
    {
        return new S3StorageClass(self::GLACIER_IR);
    }

    /**
     * INTELLIGENT_TIERING
     *
     * @return S3StorageClass
     */
    public static function INTELLIGENT_TIERING()
    {
        return new S3StorageClass(self::INTELLIGENT_TIERING);
    }

    /**
     * ONEZONE_IA
     *
     * @return S3StorageClass
     */
    public static function ONEZONE_IA()
    {
        return new S3StorageClass(self::ONEZONE_IA);
    }

    /**
     * REDUCED_REDUNDANCY
     *
     * @return S3StorageClass
     */
    public static function REDUCED_REDUNDANCY()
    {
        return new S3StorageClass(self::REDUCED_REDUNDANCY);
    }

    /**
     * STANDARD
     *
     * @return S3StorageClass
     */
    public static function STANDARD()
    {
        return new S3StorageClass(self::STANDARD);
    }

    /**
     * STANDARD_IA
     *
     * @return S3StorageClass
     */
    public static function STANDARD_IA()
    {
        return new S3StorageClass(self::STANDARD_IA);
    }
}

