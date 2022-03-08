<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SimpleEncodingLiveJobResponse extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $id;

    /** @var SimpleEncodingLiveJobStatus */
    public $status;

    /** @var string */
    public $encodingId;

    /** @var string */
    public $encoderIp;

    /** @var string */
    public $streamKey;

    /** @var SimpleEncodingLiveJobInput */
    public $input;

    /** @var \BitmovinApiSdk\Models\SimpleEncodingLiveJobUrlOutput[] */
    public $outputs;

    /** @var \BitmovinApiSdk\Models\SimpleEncodingVodJobErrors[] */
    public $errors;

    /** @var Carbon */
    public $createdAt;

    /** @var Carbon */
    public $modifiedAt;

    /** @var string */
    public $name;

    /** @var SimpleEncodingLiveCloudRegion */
    public $cloudRegion;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->status = ObjectMapper::map($this->status, SimpleEncodingLiveJobStatus::class);
        $this->input = ObjectMapper::map($this->input, SimpleEncodingLiveJobInput::class);
        $this->outputs = ObjectMapper::map($this->outputs, SimpleEncodingLiveJobUrlOutput::class);
        $this->errors = ObjectMapper::map($this->errors, SimpleEncodingVodJobErrors::class);
        $this->createdAt = ObjectMapper::map($this->createdAt, Carbon::class);
        $this->modifiedAt = ObjectMapper::map($this->modifiedAt, Carbon::class);
        $this->cloudRegion = ObjectMapper::map($this->cloudRegion, SimpleEncodingLiveCloudRegion::class);
    }

    /**
     * input
     *
     * @param SimpleEncodingLiveJobInput $input
     * @return $this
     */
    public function input(SimpleEncodingLiveJobInput $input)
    {
        $this->input = $input;

        return $this;
    }

    /**
     * outputs
     *
     * @param \BitmovinApiSdk\Models\SimpleEncodingLiveJobUrlOutput[] $outputs
     * @return $this
     */
    public function outputs(array $outputs)
    {
        $this->outputs = $outputs;

        return $this;
    }

    /**
     * Describes all the errors in cases the status of the job is &#39;error&#39;.   TODO right now this is the same for VOD and LIVE? maybe rename the schema and use the same for both?
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

    /**
     * The cloud region that will be used for the live encoding
     *
     * @param SimpleEncodingLiveCloudRegion $cloudRegion
     * @return $this
     */
    public function cloudRegion(SimpleEncodingLiveCloudRegion $cloudRegion)
    {
        $this->cloudRegion = $cloudRegion;

        return $this;
    }
}

