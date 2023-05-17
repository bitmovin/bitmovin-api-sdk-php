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
    public $configId;

    /** @var string */
    public $adConfigId;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
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
     * Id of the stream config to use
     *
     * @param string $configId
     * @return $this
     */
    public function configId(string $configId)
    {
        $this->configId = $configId;

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
}

