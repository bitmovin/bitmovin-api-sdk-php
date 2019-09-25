<?php

namespace BitmovinApiSdk\Apis\Encoding\Outputs\Sftp;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\SftpOutput;

class SftpOutputPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var SftpOutput[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, SftpOutput::class);
    }
}
