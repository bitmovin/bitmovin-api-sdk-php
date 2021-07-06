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
     * Channel layout of the audio codec configuration. &lt;table&gt; &lt;tr&gt;&lt;th colspan&#x3D;2 align&#x3D;\&quot;left\&quot;&gt; Available values: &lt;/th&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt; NONE &lt;/td&gt;&lt;td&gt; No channel layout &lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt; MONO &lt;/td&gt;&lt;td&gt; Channel layout Mono &lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt; STEREO &lt;/td&gt;&lt;td&gt; Channel layout Stereo &lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt; SURROUND &lt;/td&gt;&lt;td&gt; Channel layout 3.0 (3 front (left + center + right), no LFE) &lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt; 3.1 &lt;/td&gt;&lt;td&gt; Channel layout 3.1 (3 front (left + center + right), LFE) &lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt; BACK_SURROUND &lt;/td&gt;&lt;td&gt; Channel layout Surround (2 front (left + right), 1 back center, no LFE) &lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt; BACK_SURROUND_LFE &lt;/td&gt;&lt;td&gt; Channel layout Surround with LFE (2 front (left + right), 1 back center, LFE) &lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt; QUAD &lt;/td&gt;&lt;td&gt; Channel layout Quad (2 front (left + right), 2 back (left + right), no LFE) &lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt; QUAD_LFE &lt;/td&gt;&lt;td&gt; Channel layout Quad with LFE (2 front (left + right), 2 back (left + right), LFE) &lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt; 4.0 &lt;/td&gt;&lt;td&gt; Channel layout 4.0 (3 front (left + center + right), 1 back center, no LFE) &lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt; 4.1 &lt;/td&gt;&lt;td&gt; Channel layout 4.1 (3 front (left + center + right), 1 back center, LFE) &lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt; 5.0 &lt;/td&gt;&lt;td&gt; Channel layout 5.0 (3 front (left + center + right), 2 side (left + right), no LFE) &lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt; 5.1 &lt;/td&gt;&lt;td&gt; Channel layout 5.1 (3 front (left + center + right), 2 side (left + right), LFE) &lt;/td&gt;&lt;/tr&gt; &lt;/table&gt;
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

