<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class WebhookEncryption extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var EncryptionType */
    public $type;

    /** @var string */
    public $key;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->type = ObjectMapper::map($this->type, EncryptionType::class);
    }

    /**
     * The encryption algorithm used for the webhook (required)
     *
     * @param EncryptionType $type
     * @return $this
     */
    public function type(EncryptionType $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * The key of the encryption (required)
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

