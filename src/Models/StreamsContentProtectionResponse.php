<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class StreamsContentProtectionResponse extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $id;

    /** @var string[] */
    public $allowedDomains;

    /** @var bool */
    public $allowNoReferer;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * The list of allowed domains
     *
     * @param string[] $allowedDomains
     * @return $this
     */
    public function allowedDomains(array $allowedDomains)
    {
        $this->allowedDomains = $allowedDomains;

        return $this;
    }

    /**
     * Controls if requests to content protected streams without referer header should be allowed or denied
     *
     * @param bool $allowNoReferer
     * @return $this
     */
    public function allowNoReferer(bool $allowNoReferer)
    {
        $this->allowNoReferer = $allowNoReferer;

        return $this;
    }
}
