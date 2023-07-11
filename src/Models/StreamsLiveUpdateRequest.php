<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class StreamsLiveUpdateRequest extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $title;

    /** @var string */
    public $description;

    /** @var string */
    public $styleConfigId;

    /** @var string */
    public $posterUrl;

    /** @var string */
    public $adConfigId;

    /** @var string */
    public $contentProtectionId;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * The new title of the stream
     *
     * @param string $title
     * @return $this
     */
    public function title(string $title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * The new description of the stream
     *
     * @param string $description
     * @return $this
     */
    public function description(string $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Id of the style config to use
     *
     * @param string $styleConfigId
     * @return $this
     */
    public function styleConfigId(string $styleConfigId)
    {
        $this->styleConfigId = $styleConfigId;

        return $this;
    }

    /**
     * URL to hosted poster image
     *
     * @param string $posterUrl
     * @return $this
     */
    public function posterUrl(string $posterUrl)
    {
        $this->posterUrl = $posterUrl;

        return $this;
    }

    /**
     * Id of the advertisement config to use
     *
     * @param string $adConfigId
     * @return $this
     */
    public function adConfigId(string $adConfigId)
    {
        $this->adConfigId = $adConfigId;

        return $this;
    }

    /**
     * Id of the content protection config to use
     *
     * @param string $contentProtectionId
     * @return $this
     */
    public function contentProtectionId(string $contentProtectionId)
    {
        $this->contentProtectionId = $contentProtectionId;

        return $this;
    }
}

