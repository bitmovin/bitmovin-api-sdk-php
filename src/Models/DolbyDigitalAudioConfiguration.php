<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class DolbyDigitalAudioConfiguration extends AudioConfiguration
{
    /** @var DolbyDigitalBitstreamInfo */
    public $bitstreamInfo;

    /** @var DolbyDigitalChannelLayout */
    public $channelLayout;

    /** @var DolbyDigitalDownmixing */
    public $downmixing;

    /** @var DolbyDigitalEvolutionFrameworkControl */
    public $evolutionFrameworkControl;

    /** @var DolbyDigitalLoudnessControl */
    public $loudnessControl;

    /** @var DolbyDigitalPreprocessing */
    public $preprocessing;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->bitstreamInfo = ObjectMapper::map($this->bitstreamInfo, DolbyDigitalBitstreamInfo::class);
        $this->channelLayout = ObjectMapper::map($this->channelLayout, DolbyDigitalChannelLayout::class);
        $this->downmixing = ObjectMapper::map($this->downmixing, DolbyDigitalDownmixing::class);
        $this->evolutionFrameworkControl = ObjectMapper::map($this->evolutionFrameworkControl, DolbyDigitalEvolutionFrameworkControl::class);
        $this->loudnessControl = ObjectMapper::map($this->loudnessControl, DolbyDigitalLoudnessControl::class);
        $this->preprocessing = ObjectMapper::map($this->preprocessing, DolbyDigitalPreprocessing::class);
    }

    /**
     * BitstreamInfo defines metadata parameters contained in the Dolby Digital audio bitstream
     *
     * @param DolbyDigitalBitstreamInfo $bitstreamInfo
     * @return $this
     */
    public function bitstreamInfo(DolbyDigitalBitstreamInfo $bitstreamInfo)
    {
        $this->bitstreamInfo = $bitstreamInfo;

        return $this;
    }

    /**
     * Channel layout of the audio codec configuration.
     *
     * @param DolbyDigitalChannelLayout $channelLayout
     * @return $this
     */
    public function channelLayout(DolbyDigitalChannelLayout $channelLayout)
    {
        $this->channelLayout = $channelLayout;

        return $this;
    }

    /**
     * downmixing
     *
     * @param DolbyDigitalDownmixing $downmixing
     * @return $this
     */
    public function downmixing(DolbyDigitalDownmixing $downmixing)
    {
        $this->downmixing = $downmixing;

        return $this;
    }

    /**
     * It provides a framework for signaling new evolution framework applications, such as Intelligent Loudness, in each Dolby codec.
     *
     * @param DolbyDigitalEvolutionFrameworkControl $evolutionFrameworkControl
     * @return $this
     */
    public function evolutionFrameworkControl(DolbyDigitalEvolutionFrameworkControl $evolutionFrameworkControl)
    {
        $this->evolutionFrameworkControl = $evolutionFrameworkControl;

        return $this;
    }

    /**
     * Settings for loudness control (required)
     *
     * @param DolbyDigitalLoudnessControl $loudnessControl
     * @return $this
     */
    public function loudnessControl(DolbyDigitalLoudnessControl $loudnessControl)
    {
        $this->loudnessControl = $loudnessControl;

        return $this;
    }

    /**
     * preprocessing
     *
     * @param DolbyDigitalPreprocessing $preprocessing
     * @return $this
     */
    public function preprocessing(DolbyDigitalPreprocessing $preprocessing)
    {
        $this->preprocessing = $preprocessing;

        return $this;
    }
}

