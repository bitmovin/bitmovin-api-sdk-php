<?php

namespace BitmovinApiSdk\Common;

use Exception;

class BitmovinApiException extends Exception
{

    /** @var int */
    private $httpStatus;

    /** @var string */
    private $developerMessage;

    /** @var array */
    private $details;

    /**
     * BitmovinApiException constructor.
     *
     * @param int $httpStatus
     * @param string $message
     * @param string $developerMessage
     * @param array $details
     */
    public function __construct(
        int $httpStatus,
        string $message,
        string $developerMessage,
        array $details = []
    )
    {
        parent::__construct($message);
        $this->httpStatus = $httpStatus;
        $this->message = $message;
        $this->developerMessage = $developerMessage;
        $this->details = $details;
    }

    /**
     * @return int
     */
    public function getStatusCode(): int
    {
    	return $this->httpStatus;
    }

    /**
     * @return string
     */
    public function getDeveloperMessage(): string
    {
    	return $this->developerMessage;
    }

    /**
     * @return array
     */
    public function getDetails(): array
    {
    	return $this->details;
    }
}
