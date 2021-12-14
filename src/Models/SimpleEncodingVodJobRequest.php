<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SimpleEncodingVodJobRequest extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var \BitmovinApiSdk\Models\SimpleEncodingVodJobUrlInput[] */
    public $inputs;

    /** @var \BitmovinApiSdk\Models\SimpleEncodingVodJobUrlOutput[] */
    public $outputs;

    /** @var string */
    public $name;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->inputs = ObjectMapper::map($this->inputs, SimpleEncodingVodJobUrlInput::class);
        $this->outputs = ObjectMapper::map($this->outputs, SimpleEncodingVodJobUrlOutput::class);
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

