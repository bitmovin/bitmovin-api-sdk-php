<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class IABTaxonomy extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $version;

    /** @var string[] */
    public $contentTaxonomies;

    /** @var string[] */
    public $adOpportunityTaxonomies;

    /** @var string[] */
    public $sensitiveTopicTaxonomies;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * version
     *
     * @param string $version
     * @return $this
     */
    public function version(string $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * contentTaxonomies
     *
     * @param string[] $contentTaxonomies
     * @return $this
     */
    public function contentTaxonomies(array $contentTaxonomies)
    {
        $this->contentTaxonomies = $contentTaxonomies;

        return $this;
    }

    /**
     * adOpportunityTaxonomies
     *
     * @param string[] $adOpportunityTaxonomies
     * @return $this
     */
    public function adOpportunityTaxonomies(array $adOpportunityTaxonomies)
    {
        $this->adOpportunityTaxonomies = $adOpportunityTaxonomies;

        return $this;
    }

    /**
     * sensitiveTopicTaxonomies
     *
     * @param string[] $sensitiveTopicTaxonomies
     * @return $this
     */
    public function sensitiveTopicTaxonomies(array $sensitiveTopicTaxonomies)
    {
        $this->sensitiveTopicTaxonomies = $sensitiveTopicTaxonomies;

        return $this;
    }
}

