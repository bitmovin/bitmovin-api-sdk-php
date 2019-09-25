<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class PlayerLicense extends BitmovinResponse
{
    /** @var string */
    public $name;

    /** @var Carbon */
    public $createdAt;

    /** @var string */
    public $licenseKey;

    /** @var int */
    public $impressions;

    /** @var int */
    public $maxImpressions;

    /** @var bool */
    public $thirdPartyLicensingEnabled;

    /** @var \BitmovinApiSdk\Models\Domain[] */
    public $domains;

    /** @var string */
    public $analyticsKey;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->createdAt = ObjectMapper::map($this->createdAt, Carbon::class);
        $this->domains = ObjectMapper::map($this->domains, Domain::class);
    }

    /**
     * Name of the resource (required)
     *
     * @param string $name
     * @return $this
     */
    public function name(string $name)
    {
        $this->name = $name;

        return $this;
    }
}

