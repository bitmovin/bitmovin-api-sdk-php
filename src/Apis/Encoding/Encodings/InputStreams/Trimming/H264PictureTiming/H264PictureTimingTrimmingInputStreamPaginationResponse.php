<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\Trimming\H264PictureTiming;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\H264PictureTimingTrimmingInputStream;

class H264PictureTimingTrimmingInputStreamPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var H264PictureTimingTrimmingInputStream[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, H264PictureTimingTrimmingInputStream::class);
    }
}
