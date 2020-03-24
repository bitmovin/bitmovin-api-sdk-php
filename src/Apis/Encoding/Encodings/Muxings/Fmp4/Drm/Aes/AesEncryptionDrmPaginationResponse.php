<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Fmp4\Drm\Aes;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\AesEncryptionDrm;

class AesEncryptionDrmPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var AesEncryptionDrm[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, AesEncryptionDrm::class);
    }
}
