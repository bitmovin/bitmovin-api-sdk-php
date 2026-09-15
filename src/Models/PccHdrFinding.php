<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class PccHdrFinding extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $device;

    /** @var string */
    public $codec;

    /** @var string */
    public $protection;

    /** @var string */
    public $sentence;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * The device pool, under the name the rest of the report shows it by. (required)
     *
     * @param string $device
     * @return $this
     */
    public function device(string $device)
    {
        $this->device = $device;

        return $this;
    }

    /**
     * codec
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
     * protection
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
     * What was found, in one paragraph. (required)
     *
     * @param string $sentence
     * @return $this
     */
    public function sentence(string $sentence)
    {
        $this->sentence = $sentence;

        return $this;
    }
}

