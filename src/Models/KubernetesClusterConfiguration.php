<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class KubernetesClusterConfiguration extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var int */
    public $parallelEncodings;

    /** @var int */
    public $workersPerEncoding;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * Number of parallel scheduled encodings on the Kubernetes cluster (required)
     *
     * @param int $parallelEncodings
     * @return $this
     */
    public function parallelEncodings(int $parallelEncodings)
    {
        $this->parallelEncodings = $parallelEncodings;

        return $this;
    }

    /**
     * Number of worker nodes used for each encoding on the Kubernetes cluster (required)
     *
     * @param int $workersPerEncoding
     * @return $this
     */
    public function workersPerEncoding(int $workersPerEncoding)
    {
        $this->workersPerEncoding = $workersPerEncoding;

        return $this;
    }
}

