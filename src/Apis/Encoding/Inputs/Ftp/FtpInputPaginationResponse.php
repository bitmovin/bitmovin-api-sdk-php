<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\Ftp;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\FtpInput;

class FtpInputPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var FtpInput[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, FtpInput::class);
    }
}
