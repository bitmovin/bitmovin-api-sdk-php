<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class BitmovinStreamResponse extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $id;

    /** @var string */
    public $assetUrl;

    /** @var string */
    public $title;

    /** @var string */
    public $description;

    /** @var Carbon */
    public $createdAt;

    /** @var BitmovinStreamStatus */
    public $status;

    /** @var BitmovinStreamQuality */
    public $targetQuality;

    /** @var \BitmovinApiSdk\Models\BitmovinStreamQuality[] */
    public $availableQualities;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->createdAt = ObjectMapper::map($this->createdAt, Carbon::class);
        $this->status = ObjectMapper::map($this->status, BitmovinStreamStatus::class);
        $this->targetQuality = ObjectMapper::map($this->targetQuality, BitmovinStreamQuality::class);
        $this->availableQualities = ObjectMapper::map($this->availableQualities, BitmovinStreamQuality::class);
    }
}

