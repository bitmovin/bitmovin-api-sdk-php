<?php

namespace BitmovinApiSdk\Models;

class WebhookHttpMethod extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const POST = 'POST';

    /** @var string */
    private const PUT = 'PUT';

    /**
     * @param string $value
     * @return WebhookHttpMethod
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * POST
     *
     * @return WebhookHttpMethod
     */
    public static function POST()
    {
        return new WebhookHttpMethod(self::POST);
    }

    /**
     * PUT
     *
     * @return WebhookHttpMethod
     */
    public static function PUT()
    {
        return new WebhookHttpMethod(self::PUT);
    }
}

