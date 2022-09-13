<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class CreateBitmovinStreamRequest extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $assetUrl;

    /** @var string */
    public $title;

    /** @var string */
    public $description;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * The Streams input asset URL
     *
     * @param string $assetUrl
     * @return $this
     */
    public function assetUrl(string $assetUrl)
    {
        $this->assetUrl = $assetUrl;

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

