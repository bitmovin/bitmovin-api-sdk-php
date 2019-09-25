<?php

namespace BitmovinApiSdk\Apis\Encoding\Infrastructure\Kubernetes;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\KubernetesCluster;

class KubernetesClusterPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var KubernetesCluster[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, KubernetesCluster::class);
    }
}
