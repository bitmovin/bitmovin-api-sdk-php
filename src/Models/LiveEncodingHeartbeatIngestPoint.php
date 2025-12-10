<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class LiveEncodingHeartbeatIngestPoint extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $name;

    /** @var string */
    public $inputId;

    /** @var \BitmovinApiSdk\Models\InputType */
    public $inputType;

    /** @var bool */
    public $isActive;

    /** @var bool */
    public $isBackup;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->inputType = ObjectMapper::map($this->inputType, InputType::class);
    }

    /**
     * The name of the ingestPoint of the original Input resource.
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
     * Id of the original Input resource. Note that multiple input points (main and backup) can be part of a single Input resource.
     *
     * @param string $inputId
     * @return $this
     */
    public function inputId(string $inputId)
    {
        $this->inputId = $inputId;

        return $this;
    }

    /**
     * inputType
     *
     * @param \BitmovinApiSdk\Models\InputType $inputType
     * @return $this
     */
    public function inputType(\BitmovinApiSdk\Models\InputType $inputType)
    {
        $this->inputType = $inputType;

        return $this;
    }

    /**
     * Indicates whether this particular input is active.
     *
     * @param bool $isActive
     * @return $this
     */
    public function isActive(bool $isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Indicates whether this particular input is a backup input.
     *
     * @param bool $isBackup
     * @return $this
     */
    public function isBackup(bool $isBackup)
    {
        $this->isBackup = $isBackup;

        return $this;
    }
}

