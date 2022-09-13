<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class UpdateBitmovinStreamRequest extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var BitmovinStreamStatus */
    public $status;

    /** @var string */
    public $title;

    /** @var string */
    public $description;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->status = ObjectMapper::map($this->status, BitmovinStreamStatus::class);
    }

    /**
     * The status of the Stream
     *
     * @param BitmovinStreamStatus $status
     * @return $this
     */
    public function status(BitmovinStreamStatus $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Title of the Stream
     *
     * @param string $title
     * @return $this
     */
    public function title(string $title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Description of the Stream
     *
     * @param string $description
     * @return $this
     */
    public function description(string $description)
    {
        $this->description = $description;

        return $this;
    }
}

