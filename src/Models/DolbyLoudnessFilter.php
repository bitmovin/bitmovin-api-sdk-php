<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class DolbyLoudnessFilter extends Filter
{
    /** @var int */
    public $targetLoudness;

    /** @var float */
    public $maximumTruePeakLevel;

    /** @var DolbyLoudnessDialogueIntelligence */
    public $dialogueIntelligence;

    /** @var int */
    public $speechDetectionThreshold;

    /** @var DolbyLoudnessContentForm */
    public $contentForm;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->dialogueIntelligence = ObjectMapper::map($this->dialogueIntelligence, DolbyLoudnessDialogueIntelligence::class);
        $this->contentForm = ObjectMapper::map($this->contentForm, DolbyLoudnessContentForm::class);
    }

    /**
     * The target integrated loudness the audio should be corrected to. Range is from &#39;-31&#39; to &#39;-8&#39;. Default value is &#39;-24&#39;. Value is measured in LKFS (Loudness, K-weighted, relative to Full Scale).
     *
     * @param int $targetLoudness
     * @return $this
     */
    public function targetLoudness(int $targetLoudness)
    {
        $this->targetLoudness = $targetLoudness;

        return $this;
    }

    /**
     * The maximum true-peak level the corrected audio may reach. Range is from &#39;-8.0&#39; to &#39;-0.1&#39;. Default value is &#39;-2.0&#39;. Values are measured in dBTP (dB True Peak). Note that the maximum true peak level must be set at least 6 dB above the target loudness.
     *
     * @param float $maximumTruePeakLevel
     * @return $this
     */
    public function maximumTruePeakLevel(float $maximumTruePeakLevel)
    {
        $this->maximumTruePeakLevel = $maximumTruePeakLevel;

        return $this;
    }

    /**
     * Whether to use the Dolby Dialogue Intelligence feature, which identifies and analyzes dialogue segments within the audio as a basis for speech gating. Default value is &#39;ENABLED&#39;.
     *
     * @param DolbyLoudnessDialogueIntelligence $dialogueIntelligence
     * @return $this
     */
    public function dialogueIntelligence(DolbyLoudnessDialogueIntelligence $dialogueIntelligence)
    {
        $this->dialogueIntelligence = $dialogueIntelligence;

        return $this;
    }

    /**
     * The percentage of speech that must be detected within the audio before the dialogue loudness is used as the basis for loudness correction. Range is from &#39;0&#39; to &#39;100&#39;. Default value is &#39;20&#39;. This is only applied when dialogueIntelligence is &#39;ENABLED&#39;, as it selects between speech-gated and un-gated loudness measurement.
     *
     * @param int $speechDetectionThreshold
     * @return $this
     */
    public function speechDetectionThreshold(int $speechDetectionThreshold)
    {
        $this->speechDetectionThreshold = $speechDetectionThreshold;

        return $this;
    }

    /**
     * The form of the content, used to optimize the loudness measurement gating. Content longer than 3 minutes (180 seconds) is considered long-form, shorter content is considered short-form. Default value is &#39;AUTO_DETECT&#39;.
     *
     * @param DolbyLoudnessContentForm $contentForm
     * @return $this
     */
    public function contentForm(DolbyLoudnessContentForm $contentForm)
    {
        $this->contentForm = $contentForm;

        return $this;
    }
}

