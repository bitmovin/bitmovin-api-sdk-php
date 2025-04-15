<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Character extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $appearance;

    /** @var string */
    public $name;

    /** @var string */
    public $description;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * appearance
     *
     * @param string $appearance
     * @return $this
     */
    public function appearance(string $appearance)
    {
        $this->appearance = $appearance;

        return $this;
    }

    /**
     * name
     *
     * @param string $name
     * @return $this
     */
    public function name(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * description
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

