<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Rating extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $region;

    /** @var string */
    public $system;

    /** @var string */
    public $rating;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * region
     *
     * @param string $region
     * @return $this
     */
    public function region(string $region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * system
     *
     * @param string $system
     * @return $this
     */
    public function system(string $system)
    {
        $this->system = $system;

        return $this;
    }

    /**
     * rating
     *
     * @param string $rating
     * @return $this
     */
    public function rating(string $rating)
    {
        $this->rating = $rating;

        return $this;
    }
}

