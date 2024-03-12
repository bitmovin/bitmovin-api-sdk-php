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
    public $domainRestrictionId;

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
}

