<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SimpleEncodingVodJobResponse extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $id;

    /** @var SimpleEncodingVodJobStatus */
    public $status;

    /** @var string */
    public $encodingId;

    /** @var \BitmovinApiSdk\Models\SimpleEncodingVodJobUrlInput[] */
    public $inputs;

    /** @var \BitmovinApiSdk\Models\SimpleEncodingVodJobUrlOutput[] */
    public $outputs;

    /** @var \BitmovinApiSdk\Models\SimpleEncodingVodJobErrors[] */
    public $errors;

    /** @var Carbon */
    public $createdAt;

    /** @var Carbon */
    public $modifiedAt;

    /** @var string */
    public $name;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->status = ObjectMapper::map($this->status, SimpleEncodingVodJobStatus::class);
        $this->inputs = ObjectMapper::map($this->inputs, SimpleEncodingVodJobUrlInput::class);
        $this->outputs = ObjectMapper::map($this->outputs, SimpleEncodingVodJobUrlOutput::class);
        $this->errors = ObjectMapper::map($this->errors, SimpleEncodingVodJobErrors::class);
        $this->createdAt = ObjectMapper::map($this->createdAt, Carbon::class);
        $this->modifiedAt = ObjectMapper::map($this->modifiedAt, Carbon::class);
    }

    /**
     * inputs
     *
     * @param \BitmovinApiSdk\Models\SimpleEncodingVodJobUrlInput[] $inputs
     * @return $this
     */
    public function inputs(array $inputs)
    {
        $this->inputs = $inputs;

        return $this;
    }

    /**
     * outputs
     *
     * @param \BitmovinApiSdk\Models\SimpleEncodingVodJobUrlOutput[] $outputs
     * @return $this
     */
    public function outputs(array $outputs)
    {
        $this->outputs = $outputs;

        return $this;
    }

    /**
     * Describes all the errors in cases the status of the job is &#39;error&#39;.
     *
     * @param \BitmovinApiSdk\Models\SimpleEncodingVodJobErrors[] $errors
     * @return $this
     */
    public function errors(array $errors)
    {
        $this->errors = $errors;

        return $this;
    }

    /**
     * Creation timestamp, returned as UTC expressed in ISO 8601 format: YYYY-MM-DDThh:mm:ssZ
     *
     * @param Carbon $createdAt
     * @return $this
     */
    public function createdAt(Carbon $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Modified timestamp, returned as UTC expressed in ISO 8601 format: YYYY-MM-DDThh:mm:ssZ. The job is updated for example when the status changes
     *
     * @param Carbon $modifiedAt
     * @return $this
     */
    public function modifiedAt(Carbon $modifiedAt)
    {
        $this->modifiedAt = $modifiedAt;

        return $this;
    }

    /**
     * This property will be used for naming the encoding and the manifests.
     *
     * @param string $name
     * @return $this
     */
    public function name(string $name)
    {
        $this->name = $name;

        return $this;
    }
}

