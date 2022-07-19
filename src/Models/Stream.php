<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Stream extends BitmovinResource
{
    /** @var \BitmovinApiSdk\Models\StreamInput[] */
    public $inputStreams;

    /** @var \BitmovinApiSdk\Models\EncodingOutput[] */
    public $outputs;

    /** @var bool */
    public $createQualityMetaData;

    /** @var string */
    public $codecConfigId;

    /** @var int */
    public $segmentsEncoded;

    /** @var AbstractCondition */
    public $conditions;

    /** @var \BitmovinApiSdk\Models\Ignoring[] */
    public $ignoredBy;

    /** @var StreamMode */
    public $mode;

    /** @var EncodingMode */
    public $selectedEncodingMode;

    /** @var StreamPerTitleSettings */
    public $perTitleSettings;

    /** @var StreamMetadata */
    public $metadata;

    /** @var DecodingErrorMode */
    public $decodingErrorMode;

    /** @var AppliedStreamSettings */
    public $appliedSettings;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->inputStreams = ObjectMapper::map($this->inputStreams, StreamInput::class);
        $this->outputs = ObjectMapper::map($this->outputs, EncodingOutput::class);
        $this->conditions = ObjectMapper::map($this->conditions, AbstractCondition::class);
        $this->ignoredBy = ObjectMapper::map($this->ignoredBy, Ignoring::class);
        $this->mode = ObjectMapper::map($this->mode, StreamMode::class);
        $this->selectedEncodingMode = ObjectMapper::map($this->selectedEncodingMode, EncodingMode::class);
        $this->perTitleSettings = ObjectMapper::map($this->perTitleSettings, StreamPerTitleSettings::class);
        $this->metadata = ObjectMapper::map($this->metadata, StreamMetadata::class);
        $this->decodingErrorMode = ObjectMapper::map($this->decodingErrorMode, DecodingErrorMode::class);
        $this->appliedSettings = ObjectMapper::map($this->appliedSettings, AppliedStreamSettings::class);
    }

    /**
     * Determines the input source(s) for the stream. All video streams of an encoding need to have identical input configurations (required)
     *
     * @param \BitmovinApiSdk\Models\StreamInput[] $inputStreams
     * @return $this
     */
    public function inputStreams(array $inputStreams)
    {
        $this->inputStreams = $inputStreams;

        return $this;
    }

    /**
     * outputs
     *
     * @param \BitmovinApiSdk\Models\EncodingOutput[] $outputs
     * @return $this
     */
    public function outputs(array $outputs)
    {
        $this->outputs = $outputs;

        return $this;
    }

    /**
     * Set true to create quality metadata for this stream
     *
     * @param bool $createQualityMetaData
     * @return $this
     */
    public function createQualityMetaData(bool $createQualityMetaData)
    {
        $this->createQualityMetaData = $createQualityMetaData;

        return $this;
    }

    /**
     * Id of the codec configuration (required)
     *
     * @param string $codecConfigId
     * @return $this
     */
    public function codecConfigId(string $codecConfigId)
    {
        $this->codecConfigId = $codecConfigId;

        return $this;
    }

    /**
     * Conditions to evaluate before creating the stream. If this evaluation fails, the stream won&#39;t be created. All muxings that depend on the stream will also not be created.
     *
     * @param AbstractCondition $conditions
     * @return $this
     */
    public function conditions(AbstractCondition $conditions)
    {
        $this->conditions = $conditions;

        return $this;
    }

    /**
     * Mode of the stream
     *
     * @param StreamMode $mode
     * @return $this
     */
    public function mode(StreamMode $mode)
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * Settings to configure Per-Title on stream level
     *
     * @param StreamPerTitleSettings $perTitleSettings
     * @return $this
     */
    public function perTitleSettings(StreamPerTitleSettings $perTitleSettings)
    {
        $this->perTitleSettings = $perTitleSettings;

        return $this;
    }

    /**
     * metadata
     *
     * @param StreamMetadata $metadata
     * @return $this
     */
    public function metadata(StreamMetadata $metadata)
    {
        $this->metadata = $metadata;

        return $this;
    }

    /**
     * Determines how to react to errors during decoding
     *
     * @param DecodingErrorMode $decodingErrorMode
     * @return $this
     */
    public function decodingErrorMode(DecodingErrorMode $decodingErrorMode)
    {
        $this->decodingErrorMode = $decodingErrorMode;

        return $this;
    }
}

