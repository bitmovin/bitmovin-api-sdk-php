<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class KubernetesCluster extends BitmovinResource
{
    /** @var bool */
    public $online;

    /** @var bool */
    public $connected;

    /** @var string */
    public $agentDeploymentDownloadUrl;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }
}

