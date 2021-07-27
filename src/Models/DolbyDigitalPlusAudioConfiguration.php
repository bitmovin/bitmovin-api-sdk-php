<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class DolbyDigitalPlusAudioConfiguration extends AudioConfiguration
{
    /** @var DolbyDigitalPlusBitstreamInfo */
    public $bitstreamInfo;

    /** @var DolbyDigitalPlusChannelLayout */
    public $channelLayout;

    /** @var DolbyDigitalPlusDownmixing */
    public $downmixing;

    /** @var DolbyDigitalPlusEvolutionFrameworkControl */
    public $evolutionFrameworkControl;

    /** @var DolbyDigitalPlusLoudnessControl */
    public $loudnessControl;

    /** @var DolbyDigitalPlusPreprocessing */
    public $preprocessing;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->bitstreamInfo = ObjectMapper::map($this->bitstreamInfo, DolbyDigitalPlusBitstreamInfo::class);
        $this->channelLayout = ObjectMapper::map($this->channelLayout, DolbyDigitalPlusChannelLayout::class);
        $this->downmixing = ObjectMapper::map($this->downmixing, DolbyDigitalPlusDownmixing::class);
        $this->evolutionFrameworkControl = ObjectMapper::map($this->evolutionFrameworkControl, DolbyDigitalPlusEvolutionFrameworkControl::class);
        $this->loudnessControl = ObjectMapper::map($this->loudnessControl, DolbyDigitalPlusLoudnessControl::class);
        $this->preprocessing = ObjectMapper::map($this->preprocessing, DolbyDigitalPlusPreprocessing::class);
    }

    /**
     * BitstreamInfo defines metadata parameters contained in the Dolby Digital Plus audio bitstream
     *
     * @param DolbyDigitalPlusBitstreamInfo $bitstreamInfo
     * @return $this
     */
    public function bitstreamInfo(DolbyDigitalPlusBitstreamInfo $bitstreamInfo)
    {
        $this->bitstreamInfo = $bitstreamInfo;

        return $this;
    }

    /**
     * Channel layout of the audio codec configuration.
     *
     * @param DolbyDigitalPlusChannelLayout $channelLayout
     * @return $this
     */
    public function channelLayout(DolbyDigitalPlusChannelLayout $channelLayout)
    {
        $this->channelLayout = $channelLayout;

        return $this;
    }

    /**
     * downmixing
     *
     * @param DolbyDigitalPlusDownmixing $downmixing
     * @return $this
     */
    public function downmixing(DolbyDigitalPlusDownmixing $downmixing)
    {
        $this->downmixing = $downmixing;

        return $this;
    }

    /**
     * It provides a framework for signaling new evolution framework applications, such as Intelligent Loudness, in each Dolby codec.
     *
     * @param DolbyDigitalPlusEvolutionFrameworkControl $evolutionFrameworkControl
     * @return $this
     */
    public function evolutionFrameworkControl(DolbyDigitalPlusEvolutionFrameworkControl $evolutionFrameworkControl)
    {
        $this->evolutionFrameworkControl = $evolutionFrameworkControl;

        return $this;
    }

    /**
     * Settings for loudness control (required)
     *
     * @param DolbyDigitalPlusLoudnessControl $loudnessControl
     * @return $this
     */
    public function loudnessControl(DolbyDigitalPlusLoudnessControl $loudnessControl)
    {
        $this->loudnessControl = $loudnessControl;

        return $this;
    }

    /**
     * preprocessing
     *
     * @param DolbyDigitalPlusPreprocessing $preprocessing
     * @return $this
     */
    public function preprocessing(DolbyDigitalPlusPreprocessing $preprocessing)
    {
        $this->preprocessing = $preprocessing;

        return $this;
    }
}

