<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SimpleEncodingVodJobRequest extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var EncodingTemplate */
    public $encodingTemplate;

    /** @var \BitmovinApiSdk\Models\SimpleEncodingVodJobUrlInput[] */
    public $inputs;

    /** @var \BitmovinApiSdk\Models\SimpleEncodingVodJobOutput[] */
    public $outputs;

    /** @var string */
    public $name;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->encodingTemplate = ObjectMapper::map($this->encodingTemplate, EncodingTemplate::class);
        $this->inputs = ObjectMapper::map($this->inputs, SimpleEncodingVodJobUrlInput::class);
        $this->outputs = ObjectMapper::map($this->outputs, SimpleEncodingVodJobOutput::class);
    }

    /**
     * The template that will be used for the encoding.
     *
     * @param EncodingTemplate $encodingTemplate
     * @return $this
     */
    public function encodingTemplate(EncodingTemplate $encodingTemplate)
    {
        $this->encodingTemplate = $encodingTemplate;

        return $this;
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
     * Please take a look at the [documentation](https://bitmovin.com/docs/encoding/articles/simple-encoding-api#inputs-outputs) (required)
     *
     * @param \BitmovinApiSdk\Models\SimpleEncodingVodJobOutput[] $outputs
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

