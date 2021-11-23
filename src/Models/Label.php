<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Label extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var int */
    public $id;

    /** @var string */
    public $lang;

    /** @var string */
    public $value;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Identifier of the label.
     *
     * @param int $id
     * @return $this
     */
    public function id(int $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Specifies the language of the label.
     *
     * @param string $lang
     * @return $this
     */
    public function lang(string $lang)
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * Content of the label. (required)
     *
     * @param string $value
     * @return $this
     */
    public function value(string $value)
    {
        $this->value = $value;

        return $this;
    }
}

