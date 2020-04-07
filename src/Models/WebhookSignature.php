<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class WebhookSignature extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var SignatureType */
    public $type;

    /** @var string */
    public $key;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->type = ObjectMapper::map($this->type, SignatureType::class);
    }

    /**
     * The signature type used for the webhook.  Selects one of the supported signatures. The signature is attached to the list of headers with the key &#x60;Bitmovin-Signature&#x60;. In case of the &#x60;HMAC&#x60; type the SHA512 hashing algorithm is used to generate an authentication code from the webhook body. (required)
     *
     * @param SignatureType $type
     * @return $this
     */
    public function type(SignatureType $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * The key of the signature (required)
     *
     * @param string $key
     * @return $this
     */
    public function key(string $key)
    {
        $this->key = $key;

        return $this;
    }
}

