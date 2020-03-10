<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class EncodingErrorDefinition extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var int */
    public $code;

    /** @var string */
    public $category;

    /** @var string */
    public $message;

    /** @var string */
    public $description;

    /** @var ErrorRetryHint */
    public $retryHint;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->retryHint = ObjectMapper::map($this->retryHint, ErrorRetryHint::class);
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
     * The error message, optional. Can include placeholders like {1}, {2} which are replaced with the respective dependency when the error is thrown.
     *
     * @param string $message
     * @return $this
     */
    public function message(string $message)
    {
        $this->message = $message;

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

    /**
     * Indicates if the call that caused the error should be retried.
     *
     * @param ErrorRetryHint $retryHint
     * @return $this
     */
    public function retryHint(ErrorRetryHint $retryHint)
    {
        $this->retryHint = $retryHint;

        return $this;
    }
}

