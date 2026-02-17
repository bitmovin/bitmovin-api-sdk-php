<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class DnsMappingRequest extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $subdomain;

    /** @var string */
    public $name;

    /** @var string */
    public $description;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Subdomain used for the DNS mapping. It can only contain lowercase letters, numbers and dashes (-). It can be at most 63 characters long (required)
     *
     * @param string $subdomain
     * @return $this
     */
    public function subdomain(string $subdomain)
    {
        $this->subdomain = $subdomain;

        return $this;
    }

    /**
     * Optional name for the DNS mapping
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
     * Optional description for the DNS mapping
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

