<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class KantarWatermark extends BitmovinResponse
{
    /** @var string */
    public $login;

    /** @var string */
    public $password;

    /** @var int */
    public $licenseId;

    /** @var string */
    public $channelName;

    /** @var string */
    public $contentReference;

    /** @var string */
    public $serverUrl;

    /** @var \BitmovinApiSdk\Models\EncodingOutput[] */
    public $reportOutputs;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->reportOutputs = ObjectMapper::map($this->reportOutputs, EncodingOutput::class);
    }

    /**
     * Username used to authenticate with the Kantar watermarking service. (required)
     *
     * @param string $login
     * @return $this
     */
    public function login(string $login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Password associated with the provided login for authentication. (required)
     *
     * @param string $password
     * @return $this
     */
    public function password(string $password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Identifier of the Kantar license to be used when processing the audio watermark. (required)
     *
     * @param int $licenseId
     * @return $this
     */
    public function licenseId(int $licenseId)
    {
        $this->licenseId = $licenseId;

        return $this;
    }

    /**
     * Name of the distribution channel associated with the audio content being watermarked. (required)
     *
     * @param string $channelName
     * @return $this
     */
    public function channelName(string $channelName)
    {
        $this->channelName = $channelName;

        return $this;
    }

    /**
     * Unique reference or identifier for the audio content that will be processed. (required)
     *
     * @param string $contentReference
     * @return $this
     */
    public function contentReference(string $contentReference)
    {
        $this->contentReference = $contentReference;

        return $this;
    }

    /**
     * URL of the Kantar server endpoint used to apply or validate the audio watermark. (required)
     *
     * @param string $serverUrl
     * @return $this
     */
    public function serverUrl(string $serverUrl)
    {
        $this->serverUrl = $serverUrl;

        return $this;
    }

    /**
     * The outputs where the processing report should be delivered. (required)
     *
     * @param \BitmovinApiSdk\Models\EncodingOutput[] $reportOutputs
     * @return $this
     */
    public function reportOutputs(array $reportOutputs)
    {
        $this->reportOutputs = $reportOutputs;

        return $this;
    }
}

