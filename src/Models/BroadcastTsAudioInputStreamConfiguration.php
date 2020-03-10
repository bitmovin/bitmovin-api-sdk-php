<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class BroadcastTsAudioInputStreamConfiguration extends BroadcastTsInputStreamConfiguration
{
    /** @var bool */
    public $useATSCBufferModel;

    /** @var string */
    public $language;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Use ATSC buffer model for AC-3. If true, use the ATSC version of the T-STD buffer model is used. This parameter applies to AC-3 streams only.
     *
     * @param bool $useATSCBufferModel
     * @return $this
     */
    public function useATSCBufferModel(bool $useATSCBufferModel)
    {
        $this->useATSCBufferModel = $useATSCBufferModel;

        return $this;
    }

    /**
     * Language of the audio stream. Specified according to the ISO 639-2 alpha code for the language descriptor.
     *
     * @param string $language
     * @return $this
     */
    public function language(string $language)
    {
        $this->language = $language;

        return $this;
    }
}

