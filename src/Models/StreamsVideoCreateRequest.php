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
    public $domainRestrictionId;

    /** @var StreamsEncodingProfile */
    public $encodingProfile;

    /** @var bool */
    public $signed;

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
     * Id of the domain restriction config to use
     *
     * @param string $domainRestrictionId
     * @return $this
     */
    public function domainRestrictionId(string $domainRestrictionId)
    {
        $this->domainRestrictionId = $domainRestrictionId;

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

    /**
     * If set to true the Stream is only accessible via a token
     *
     * @param bool $signed
     * @return $this
     */
    public function signed(bool $signed)
    {
        $this->signed = $signed;

        return $this;
    }
}

