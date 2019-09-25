<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\Trimming\TimecodeTrack;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\TimecodeTrackTrimmingInputStream;

class TimecodeTrackTrimmingInputStreamPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var TimecodeTrackTrimmingInputStream[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, TimecodeTrackTrimmingInputStream::class);
    }
}
