<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class StreamsVideoCreateRequest extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $assetUrl;

    /** @var string */
    public $title;

    /** @var string */
    public $description;

    /** @var string */
    public $styleConfigId;

    /** @var string */
    public $adConfigId;

    /** @var StreamsEncodingProfile */
    public $encodingProfile;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->encodingProfile = ObjectMapper::map($this->encodingProfile, StreamsEncodingProfile::class);
    }

    /**
     * The streams input asset URL
     *
     * @param string $assetUrl
     * @return $this
     */
    public function assetUrl(string $assetUrl)
    {
        $this->assetUrl = $assetUrl;

        return $this;
    }

    /**
     * Title of the stream
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
     * Description of the stream
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
     * Profile to be used in encoding
     *
     * @param StreamsEncodingProfile $encodingProfile
     * @return $this
     */
    public function encodingProfile(StreamsEncodingProfile $encodingProfile)
    {
        $this->encodingProfile = $encodingProfile;

        return $this;
    }
}

