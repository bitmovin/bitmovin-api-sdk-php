<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class ApiErrorDefinition extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var int */
    public $code;

    /** @var string */
    public $category;

    /** @var string */
    public $description;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * The error code.
     *
     * @param int $code
     * @return $this
     */
    public function code(int $code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * The error category.
     *
     * @param string $category
     * @return $this
     */
    public function category(string $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * The returned error description.
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

