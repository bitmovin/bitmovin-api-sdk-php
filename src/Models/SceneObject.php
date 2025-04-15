<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SceneObject extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $description;

    /** @var string */
    public $category;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
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
     * category
     *
     * @param string $category
     * @return $this
     */
    public function category(string $category)
    {
        $this->category = $category;

        return $this;
    }
}

