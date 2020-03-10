<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SubtitleStream extends MediaStream
{
    /** @var string */
    public $language;

    /** @var bool */
    public $hearingImpaired;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Language of the stream
     *
     * @param string $language
     * @return $this
     */
    public function language(string $language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Hearing impaired support
     *
     * @param bool $hearingImpaired
     * @return $this
     */
    public function hearingImpaired(bool $hearingImpaired)
    {
        $this->hearingImpaired = $hearingImpaired;

        return $this;
    }
}

