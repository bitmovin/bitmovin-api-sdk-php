<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class IABTaxonomy extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $contentVersion;

    /** @var string */
    public $adProductVersion;

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
     * contentVersion
     *
     * @param string $contentVersion
     * @return $this
     */
    public function contentVersion(string $contentVersion)
    {
        $this->contentVersion = $contentVersion;

        return $this;
    }

    /**
     * adProductVersion
     *
     * @param string $adProductVersion
     * @return $this
     */
    public function adProductVersion(string $adProductVersion)
    {
        $this->adProductVersion = $adProductVersion;

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

