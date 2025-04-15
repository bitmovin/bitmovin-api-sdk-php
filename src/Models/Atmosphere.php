<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Atmosphere extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $mood;

    /** @var string */
    public $lighting;

    /** @var string */
    public $weather;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * mood
     *
     * @param string $mood
     * @return $this
     */
    public function mood(string $mood)
    {
        $this->mood = $mood;

        return $this;
    }

    /**
     * lighting
     *
     * @param string $lighting
     * @return $this
     */
    public function lighting(string $lighting)
    {
        $this->lighting = $lighting;

        return $this;
    }

    /**
     * weather
     *
     * @param string $weather
     * @return $this
     */
    public function weather(string $weather)
    {
        $this->weather = $weather;

        return $this;
    }
}

