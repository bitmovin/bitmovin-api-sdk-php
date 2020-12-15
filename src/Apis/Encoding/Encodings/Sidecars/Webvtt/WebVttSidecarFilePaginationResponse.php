<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Sidecars\Webvtt;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\WebVttSidecarFile;

class WebVttSidecarFilePaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var WebVttSidecarFile[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, WebVttSidecarFile::class);
    }
}
