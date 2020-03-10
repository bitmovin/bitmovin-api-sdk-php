<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SubtitleAdaptationSet extends AdaptationSet
{
    /** @var string */
    public $lang;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * ISO 639-1 (Alpha-2) code identifying the language of the subtitle adaptation set (required)
     *
     * @param string $lang
     * @return $this
     */
    public function lang(string $lang)
    {
        $this->lang = $lang;

        return $this;
    }
}

