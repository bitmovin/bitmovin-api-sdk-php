<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class DomainList extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var \BitmovinApiSdk\Models\Domain[] */
    public $domains;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->domains = ObjectMapper::map($this->domains, Domain::class);
    }

    /**
     * domains
     *
     * @param \BitmovinApiSdk\Models\Domain[] $domains
     * @return $this
     */
    public function domains(array $domains)
    {
        $this->domains = $domains;

        return $this;
    }
}

