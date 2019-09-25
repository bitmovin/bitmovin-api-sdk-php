<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class StreamMetadata extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $language;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * Language of the media contained in the stream. If the value is not set, then no metadata tag is set for the media stream.
     *
     * @param string $language
     * @return $this
     */
    public function language(string $language)
    {
        $this->language = $language;

        return $this;
    }
}

