<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class DefaultDashManifestPeriod extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string[] */
    public $encodingIds;

    /** @var \BitmovinApiSdk\Models\DefaultManifestCondition[] */
    public $adaptationSets;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->adaptationSets = ObjectMapper::map($this->adaptationSets, DefaultManifestCondition::class);
    }

    /**
     * List the encoding ids for which the conditions should apply
     *
     * @param string[] $encodingIds
     * @return $this
     */
    public function encodingIds(array $encodingIds)
    {
        $this->encodingIds = $encodingIds;

        return $this;
    }

    /**
     * Adds an adaption set for every item to the period
     *
     * @param \BitmovinApiSdk\Models\DefaultManifestCondition[] $adaptationSets
     * @return $this
     */
    public function adaptationSets(array $adaptationSets)
    {
        $this->adaptationSets = $adaptationSets;

        return $this;
    }
}

