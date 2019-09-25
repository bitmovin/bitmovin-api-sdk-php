<?php

namespace BitmovinApiSdk\Apis\Encoding\Outputs\Ftp;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\FtpOutput;

class FtpOutputPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var FtpOutput[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, FtpOutput::class);
    }
}
