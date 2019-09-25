<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\Sftp;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\SftpInput;

class SftpInputPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var SftpInput[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, SftpInput::class);
    }
}
