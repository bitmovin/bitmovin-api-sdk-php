<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class StreamsConfigResponse extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $id;

    /** @var string */
    public $orgId;

    /** @var object */
    public $playerStyle;

    /** @var string */
    public $watermarkUrl;

    /** @var string */
    public $watermarkTargetLink;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * UUID of the associated organization
     *
     * @param string $orgId
     * @return $this
     */
    public function orgId(string $orgId)
    {
        $this->orgId = $orgId;

        return $this;
    }

    /**
     * Player style config
     *
     * @param object $playerStyle
     * @return $this
     */
    public function playerStyle(object $playerStyle)
    {
        $this->playerStyle = $playerStyle;

        return $this;
    }

    /**
     * URL of the watermark image
     *
     * @param string $watermarkUrl
     * @return $this
     */
    public function watermarkUrl(string $watermarkUrl)
    {
        $this->watermarkUrl = $watermarkUrl;

        return $this;
    }

    /**
     * Target link of the watermark image
     *
     * @param string $watermarkTargetLink
     * @return $this
     */
    public function watermarkTargetLink(string $watermarkTargetLink)
    {
        $this->watermarkTargetLink = $watermarkTargetLink;

        return $this;
    }
}

