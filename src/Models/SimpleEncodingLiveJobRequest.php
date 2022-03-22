<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SimpleEncodingLiveJobRequest extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var SimpleEncodingLiveJobInput */
    public $input;

    /** @var \BitmovinApiSdk\Models\SimpleEncodingLiveJobUrlOutput[] */
    public $outputs;

    /** @var SimpleEncodingLiveCloudRegion */
    public $cloudRegion;

    /** @var string */
    public $name;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->input = ObjectMapper::map($this->input, SimpleEncodingLiveJobInput::class);
        $this->outputs = ObjectMapper::map($this->outputs, SimpleEncodingLiveJobUrlOutput::class);
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
     * output of the live encoding job (required)
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
     * The cloud region that will be used for the live encoding. This value has to be set.
     *
     * @param SimpleEncodingLiveCloudRegion $cloudRegion
     * @return $this
     */
    public function cloudRegion(SimpleEncodingLiveCloudRegion $cloudRegion)
    {
        $this->cloudRegion = $cloudRegion;

        return $this;
    }

    /**
     * This property will be used for naming the encoding.
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

