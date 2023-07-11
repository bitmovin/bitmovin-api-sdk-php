<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class StreamsLiveCreateRequest extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $title;

    /** @var string */
    public $description;

    /** @var string */
    public $styleConfigId;

    /** @var string */
    public $adConfigId;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
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
}

