<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\PackedAudio;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\PackedAudioMuxing;

class PackedAudioMuxingPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var PackedAudioMuxing[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, PackedAudioMuxing::class);
    }
}
