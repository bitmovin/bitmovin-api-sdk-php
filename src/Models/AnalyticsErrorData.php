<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AnalyticsErrorData extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $exceptionMessage;

    /** @var string */
    public $additionalData;

    /** @var string[] */
    public $exceptionStacktrace;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Exception message
     *
     * @param string $exceptionMessage
     * @return $this
     */
    public function exceptionMessage(string $exceptionMessage)
    {
        $this->exceptionMessage = $exceptionMessage;

        return $this;
    }

    /**
     * Additional error data
     *
     * @param string $additionalData
     * @return $this
     */
    public function additionalData(string $additionalData)
    {
        $this->additionalData = $additionalData;

        return $this;
    }

    /**
     * exceptionStacktrace
     *
     * @param string[] $exceptionStacktrace
     * @return $this
     */
    public function exceptionStacktrace(array $exceptionStacktrace)
    {
        $this->exceptionStacktrace = $exceptionStacktrace;

        return $this;
    }
}

