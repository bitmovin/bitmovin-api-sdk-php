<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class DolbyDigitalPlusLoudnessControl extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var int */
    public $dialnorm;

    /** @var DolbyDigitalPlusDialogueIntelligence */
    public $dialogueIntelligence;

    /** @var DolbyDigitalPlusLoudnessControlMode */
    public $mode;

    /** @var float */
    public $peakLimit;

    /** @var DolbyDigitalPlusLoudnessControlRegulationType */
    public $regulationType;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->dialogueIntelligence = ObjectMapper::map($this->dialogueIntelligence, DolbyDigitalPlusDialogueIntelligence::class);
        $this->mode = ObjectMapper::map($this->mode, DolbyDigitalPlusLoudnessControlMode::class);
        $this->regulationType = ObjectMapper::map($this->regulationType, DolbyDigitalPlusLoudnessControlRegulationType::class);
    }

    /**
     * Dialogue Normalization value to be set on the bitstream metadata. Required if the mode is &#x60;PASSTHROUGH&#x60;, or if the mode is &#x60;CORRECTION&#x60; and regulationType is &#x60;MANUAL&#x60;. For all other combinations dialnorm must not be set.
     *
     * @param int $dialnorm
     * @return $this
     */
    public function dialnorm(int $dialnorm)
    {
        $this->dialnorm = $dialnorm;

        return $this;
    }

    /**
     * This may only be set if the mode is &#x60;PASSTHROUGH&#x60;, or if the mode is &#x60;CORRECTION&#x60; and regulationType is &#x60;MANUAL&#x60;. For all other regulationType values dialogueIntelligence must not be set.
     *
     * @param DolbyDigitalPlusDialogueIntelligence $dialogueIntelligence
     * @return $this
     */
    public function dialogueIntelligence(DolbyDigitalPlusDialogueIntelligence $dialogueIntelligence)
    {
        $this->dialogueIntelligence = $dialogueIntelligence;

        return $this;
    }

    /**
     * mode
     *
     * @param DolbyDigitalPlusLoudnessControlMode $mode
     * @return $this
     */
    public function mode(DolbyDigitalPlusLoudnessControlMode $mode)
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * The peak value in dB to use for loudness correction. This may only be set if the mode is &#x60;PASSTHROUGH&#x60;, or if the mode is &#x60;CORRECTION&#x60; and regulationType is &#x60;MANUAL&#x60;. For all other regulationType values peakLimit must not be set.
     *
     * @param float $peakLimit
     * @return $this
     */
    public function peakLimit(float $peakLimit)
    {
        $this->peakLimit = $peakLimit;

        return $this;
    }

    /**
     * This is only allowed if the mode is CORRECTION. &lt;table&gt; &lt;tr&gt;&lt;th colspan&#x3D;4 align&#x3D;\&quot;left\&quot;&gt; Predefined values for each regulation type: &lt;/th&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt; Regulation Type &lt;/td&gt;&lt;td&gt; EBU R128 &lt;/td&gt;&lt;td&gt; ATSC A/85 Fixed &lt;/td&gt;&lt;td&gt; ATSC A/85 Agile&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt; Limit Mode &lt;/td&gt;&lt;td&gt; &#x60;True Peak&#x60; &lt;/td&gt;&lt;td&gt; &#x60;True Peak&#x60; &lt;/td&gt;&lt;td&gt; &#x60;True Peak&#x60; &lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt; Correction Mode &lt;/td&gt;&lt;td&gt; &#x60;PCM Normalization&#x60; &lt;/td&gt;&lt;td&gt; &#x60;PCM Normalization&#x60; &lt;/td&gt;&lt;td&gt; &#x60;Metadata Update&#x60; &lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt; Peak Limit &lt;/td&gt;&lt;td&gt; &#x60;–3 dBTP&#x60; &lt;/td&gt;&lt;td&gt; &#x60;–2 dBTP&#x60; &lt;/td&gt;&lt;td&gt; &#x60;N/A&#x60; &lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt; Dialogue Intelligence &lt;/td&gt;&lt;td&gt; &#x60;Off&#x60; &lt;/td&gt;&lt;td&gt; &#x60;On&#x60; &lt;/td&gt;&lt;td&gt; &#x60;On&#x60; &lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt; Meter Mode &lt;/td&gt;&lt;td&gt; &#x60;ITU-R BS.1770-3&#x60; &lt;/td&gt;&lt;td&gt; &#x60;ITU-R BS.1770-3&#x60; &lt;/td&gt;&lt;td&gt; &#x60;ITU-R BS.1770-3&#x60; &lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt; Speech Threshold &lt;/td&gt;&lt;td&gt; &#x60;20&#x60; &lt;/td&gt;&lt;td&gt; &#x60;20&#x60; &lt;/td&gt;&lt;td&gt; &#x60;20&#x60; &lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt; Dialogue Normalization &lt;/td&gt;&lt;td&gt; &#x60;-23 dB&#x60; &lt;/td&gt;&lt;td&gt; &#x60;-24 dB&#x60; &lt;/td&gt;&lt;td&gt; &#x60;Set to measured loudness&#x60; &lt;/td&gt;&lt;/tr&gt; &lt;/table&gt;
     *
     * @param DolbyDigitalPlusLoudnessControlRegulationType $regulationType
     * @return $this
     */
    public function regulationType(DolbyDigitalPlusLoudnessControlRegulationType $regulationType)
    {
        $this->regulationType = $regulationType;

        return $this;
    }
}

