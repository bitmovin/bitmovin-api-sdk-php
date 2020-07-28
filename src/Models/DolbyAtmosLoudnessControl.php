<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class DolbyAtmosLoudnessControl extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var DolbyAtmosMeteringMode */
    public $meteringMode;

    /** @var DolbyAtmosDialogueIntelligence */
    public $dialogueIntelligence;

    /** @var int */
    public $speechThreshold;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->meteringMode = ObjectMapper::map($this->meteringMode, DolbyAtmosMeteringMode::class);
        $this->dialogueIntelligence = ObjectMapper::map($this->dialogueIntelligence, DolbyAtmosDialogueIntelligence::class);
    }

    /**
     * Algorithm to be used for measuring loudness. Recommended value is \&quot;ITU_R_BS_1770_4\&quot; (required)
     *
     * @param DolbyAtmosMeteringMode $meteringMode
     * @return $this
     */
    public function meteringMode(DolbyAtmosMeteringMode $meteringMode)
    {
        $this->meteringMode = $meteringMode;

        return $this;
    }

    /**
     * Whether to use the Dialogue Intelligence feature, which identifies and analyzes dialogue segments within audio as a basis for speech gating. Must not be \&quot;DISABLED\&quot; for meteringMode \&quot;ITU-R BS.1770-1\&quot; or \&quot;Leq (A)\&quot;, otherwise recommended value is \&quot;ENABLED\&quot; (required)
     *
     * @param DolbyAtmosDialogueIntelligence $dialogueIntelligence
     * @return $this
     */
    public function dialogueIntelligence(DolbyAtmosDialogueIntelligence $dialogueIntelligence)
    {
        $this->dialogueIntelligence = $dialogueIntelligence;

        return $this;
    }

    /**
     * Specifies the percentage of speech that must be detected in the metered content before using the measured speech loudness as the overall program loudness. Given as an integer percentage between 0 and 100 (0% to 100%). Recommended value is 15 (required)
     *
     * @param int $speechThreshold
     * @return $this
     */
    public function speechThreshold(int $speechThreshold)
    {
        $this->speechThreshold = $speechThreshold;

        return $this;
    }
}

