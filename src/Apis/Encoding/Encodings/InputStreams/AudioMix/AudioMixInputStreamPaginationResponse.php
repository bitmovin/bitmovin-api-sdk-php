<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\AudioMix;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\AudioMixInputStream;

class AudioMixInputStreamPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var AudioMixInputStream[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, AudioMixInputStream::class);
    }
}
