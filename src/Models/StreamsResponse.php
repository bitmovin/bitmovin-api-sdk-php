<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class StreamsResponse extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $id;

    /** @var string */
    public $title;

    /** @var string */
    public $description;

    /** @var Carbon */
    public $createdAt;

    /** @var StreamsType */
    public $type;

    public static $discriminatorName = "type";
    public static $discriminatorMapping = [
        "VIDEO" => StreamsVideoResponse::class,
        "LIVE" => StreamsLiveResponse::class,
    ];

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->createdAt = ObjectMapper::map($this->createdAt, Carbon::class);
        $this->type = ObjectMapper::map($this->type, StreamsType::class);
    }
}

