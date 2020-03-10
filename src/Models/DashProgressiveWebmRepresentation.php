<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class DashProgressiveWebmRepresentation extends DashRepresentation
{
    /** @var string */
    public $filePath;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Path to the Progressive WebM file (required)
     *
     * @param string $filePath
     * @return $this
     */
    public function filePath(string $filePath)
    {
        $this->filePath = $filePath;

        return $this;
    }
}

