<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Link extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $href;

    /** @var string */
    public $title;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * webpage target URL (required)
     *
     * @param string $href
     * @return $this
     */
    public function href(string $href)
    {
        $this->href = $href;

        return $this;
    }

    /**
     * Short description of the linked page
     *
     * @param string $title
     * @return $this
     */
    public function title(string $title)
    {
        $this->title = $title;

        return $this;
    }
}

