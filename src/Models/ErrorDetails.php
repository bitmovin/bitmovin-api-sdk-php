<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class ErrorDetails extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var int */
    public $code;

    /** @var string */
    public $category;

    /** @var string */
    public $text;

    /** @var RetryHint */
    public $retryHint;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->retryHint = ObjectMapper::map($this->retryHint, RetryHint::class);
    }

    /**
     * Specific error code (required)
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
     * Error group name (required)
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
     * Detailed error message (required)
     *
     * @param string $text
     * @return $this
     */
    public function text(string $text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Information if the encoding could potentially succeed when retrying. (required)
     *
     * @param RetryHint $retryHint
     * @return $this
     */
    public function retryHint(RetryHint $retryHint)
    {
        $this->retryHint = $retryHint;

        return $this;
    }
}

