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
     * Channel layout of the audio codec configuration. &lt;table&gt; &lt;tr&gt;&lt;th colspan&#x3D;2 align&#x3D;\&quot;left\&quot;&gt; Available values: &lt;/th&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt; NONE &lt;/td&gt;&lt;td&gt; No channel layout &lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt; MONO &lt;/td&gt;&lt;td&gt; Channel layout Mono &lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt; STEREO &lt;/td&gt;&lt;td&gt; Channel layout Stereo &lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt; SURROUND &lt;/td&gt;&lt;td&gt; Channel layout 3.0 (3 front (left + center + right), no LFE) &lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt; 3.1 &lt;/td&gt;&lt;td&gt; Channel layout 3.1 (3 front (left + center + right), LFE) &lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt; BACK_SURROUND &lt;/td&gt;&lt;td&gt; Channel layout Surround (2 front (left + right), 1 back center, no LFE) &lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt; BACK_SURROUND_LFE &lt;/td&gt;&lt;td&gt; Channel layout Surround with LFE (2 front (left + right), 1 back center, LFE) &lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt; QUAD &lt;/td&gt;&lt;td&gt; Channel layout Quad (2 front (left + right), 2 back (left + right), no LFE) &lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt; QUAD_LFE &lt;/td&gt;&lt;td&gt; Channel layout Quad with LFE (2 front (left + right), 2 back (left + right), LFE) &lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt; 4.0 &lt;/td&gt;&lt;td&gt; Channel layout 4.0 (3 front (left + center + right), 1 back center, no LFE) &lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt; 4.1 &lt;/td&gt;&lt;td&gt; Channel layout 4.1 (3 front (left + center + right), 1 back center, LFE) &lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt; 5.0 &lt;/td&gt;&lt;td&gt; Channel layout 5.0 (3 front (left + center + right), 2 side (left + right), no LFE) &lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt; 5.1 &lt;/td&gt;&lt;td&gt; Channel layout 5.1 (3 front (left + center + right), 2 side (left + right), LFE) &lt;/td&gt;&lt;/tr&gt; &lt;/table&gt;
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

