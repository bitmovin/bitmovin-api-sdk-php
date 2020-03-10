<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AnalyticsContextDescription extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $label;

    /** @var string */
    public $description;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * label
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

