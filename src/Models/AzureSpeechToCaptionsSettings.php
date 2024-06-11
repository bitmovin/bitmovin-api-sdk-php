<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AzureSpeechToCaptionsSettings extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var AzureSpeechServicesCredentials */
    public $azureSpeechServicesCredentials;

    /** @var string */
    public $region;

    /** @var string */
    public $apiEndpoint;

    /** @var string */
    public $language;

    /** @var int */
    public $captionDelay;

    /** @var int */
    public $captionRemainTime;

    /** @var int */
    public $captionMaxLineLength;

    /** @var int */
    public $captionLines;

    /** @var AzureSpeechToCaptionsProfanity */
    public $profanityOption;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->azureSpeechServicesCredentials = ObjectMapper::map($this->azureSpeechServicesCredentials, AzureSpeechServicesCredentials::class);
        $this->profanityOption = ObjectMapper::map($this->profanityOption, AzureSpeechToCaptionsProfanity::class);
    }

    /**
     * Credential settings to access Azure Speech Services
     *
     * @param AzureSpeechServicesCredentials $azureSpeechServicesCredentials
     * @return $this
     */
    public function azureSpeechServicesCredentials(AzureSpeechServicesCredentials $azureSpeechServicesCredentials)
    {
        $this->azureSpeechServicesCredentials = $azureSpeechServicesCredentials;

        return $this;
    }

    /**
     * Azure Speech Services Region Identifier. The list of speech service supported regions can be found at Azure&#39;s official documentation.
     *
     * @param string $region
     * @return $this
     */
    public function region(string $region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Azure Speech Services API endpoint. This information can be found in Azure&#39;s Speech resource data.
     *
     * @param string $apiEndpoint
     * @return $this
     */
    public function apiEndpoint(string $apiEndpoint)
    {
        $this->apiEndpoint = $apiEndpoint;

        return $this;
    }

    /**
     * Azure Speech to captions supported language (IETF BCP 47 language tag). The list of supported languages can be found at Azure&#39;s official documentation.
     *
     * @param string $language
     * @return $this
     */
    public function language(string $language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * How many MILLISECONDS to delay the display of each caption, to mimic a real-time experience. The minimum value is 0.
     *
     * @param int $captionDelay
     * @return $this
     */
    public function captionDelay(int $captionDelay)
    {
        $this->captionDelay = $captionDelay;

        return $this;
    }

    /**
     * How many MILLISECONDS a caption should remain on screen if it is not replaced by another. The minimum value is 0.
     *
     * @param int $captionRemainTime
     * @return $this
     */
    public function captionRemainTime(int $captionRemainTime)
    {
        $this->captionRemainTime = $captionRemainTime;

        return $this;
    }

    /**
     * The maximum number of characters per line for a caption.  The minimum value is 20.
     *
     * @param int $captionMaxLineLength
     * @return $this
     */
    public function captionMaxLineLength(int $captionMaxLineLength)
    {
        $this->captionMaxLineLength = $captionMaxLineLength;

        return $this;
    }

    /**
     * The number of lines for a caption. The minimum value is 1.
     *
     * @param int $captionLines
     * @return $this
     */
    public function captionLines(int $captionLines)
    {
        $this->captionLines = $captionLines;

        return $this;
    }

    /**
     * The profanity filter options are:  - Masked: Replaces letters in profane words with asterisk (*) characters. - Raw: Include the profane words verbatim. - Removed: Removes profane words.
     *
     * @param AzureSpeechToCaptionsProfanity $profanityOption
     * @return $this
     */
    public function profanityOption(AzureSpeechToCaptionsProfanity $profanityOption)
    {
        $this->profanityOption = $profanityOption;

        return $this;
    }
}

