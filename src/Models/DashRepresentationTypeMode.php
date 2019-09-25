<?php

namespace BitmovinApiSdk\Models;

class DashRepresentationTypeMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const TEMPLATE_REPRESENTATION = 'TEMPLATE_REPRESENTATION';

    /** @var string */
    private const TEMPLATE_ADAPTATION_SET = 'TEMPLATE_ADAPTATION_SET';

    /**
     * @param string $value
     * @return DashRepresentationTypeMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Generates representations containing segment templates. This is the default.
     *
     * @return DashRepresentationTypeMode
     */
    public static function TEMPLATE_REPRESENTATION()
    {
        return new DashRepresentationTypeMode(self::TEMPLATE_REPRESENTATION);
    }

    /**
     * Generates segment templates in the adaption sets. The representations will not contain any segment templates anymore.
     *
     * @return DashRepresentationTypeMode
     */
    public static function TEMPLATE_ADAPTATION_SET()
    {
        return new DashRepresentationTypeMode(self::TEMPLATE_ADAPTATION_SET);
    }
}

