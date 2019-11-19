<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class UpdateOrganizationRequest extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $name;

    /** @var string */
    public $description;

    /** @var string */
    public $labelColor;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
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

    /**
     * Hexadecimal color
     *
     * @param string $labelColor
     * @return $this
     */
    public function labelColor(string $labelColor)
    {
        $this->labelColor = $labelColor;

        return $this;
    }
}

