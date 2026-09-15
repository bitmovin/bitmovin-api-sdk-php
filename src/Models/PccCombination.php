<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class PccCombination extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $codec;

    /** @var string */
    public $protection;

    /** @var string */
    public $label;

    /** @var bool */
    public $hdr;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * The codec, as the shared contract spells it. (required)
     *
     * @param string $codec
     * @return $this
     */
    public function codec(string $codec)
    {
        $this->codec = $codec;

        return $this;
    }

    /**
     * The content protection, as the shared contract spells it. (required)
     *
     * @param string $protection
     * @return $this
     */
    public function protection(string $protection)
    {
        $this->protection = $protection;

        return $this;
    }

    /**
     * The column heading, spelled the way a reader reads it rather than the way the catalogue spells it. (required)
     *
     * @param string $label
     * @return $this
     */
    public function label(string $label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Whether this column&#39;s stream is HDR. Read it here rather than out of the codec name: not every HDR codec spells &#x60;hdr10&#x60;, and the Dolby Vision ones never do. (required)
     *
     * @param bool $hdr
     * @return $this
     */
    public function hdr(bool $hdr)
    {
        $this->hdr = $hdr;

        return $this;
    }
}

