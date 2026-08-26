<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class ShotAdvisories extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var AdvisoryAnalysisStatus */
    public $status;

    /** @var \BitmovinApiSdk\Models\ContentAdvisory[] */
    public $advisories;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->status = ObjectMapper::map($this->status, AdvisoryAnalysisStatus::class);
        $this->advisories = ObjectMapper::map($this->advisories, ContentAdvisory::class);
    }

    /**
     * Whether and how the shot was assessed for content advisories (required)
     *
     * @param AdvisoryAnalysisStatus $status
     * @return $this
     */
    public function status(AdvisoryAnalysisStatus $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * The advisory-relevant imagery detected in this shot. Empty when the shot was assessed and nothing was found, or when it was not assessed at all (required)
     *
     * @param \BitmovinApiSdk\Models\ContentAdvisory[] $advisories
     * @return $this
     */
    public function advisories(array $advisories)
    {
        $this->advisories = $advisories;

        return $this;
    }
}

