<?php

namespace BitmovinApiSdk\Apis\Encoding\Infrastructure\Kubernetes;

use BitmovinApiSdk\Common\QueryParams;

class KubernetesClusterListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return KubernetesClusterListQueryParams
     */
    public static function create(): KubernetesClusterListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return KubernetesClusterListQueryParams
     */
    public function offset(int $offset): KubernetesClusterListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return KubernetesClusterListQueryParams
     */
    public function limit(int $limit): KubernetesClusterListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    public function toArray(): array
    {
        $data = array_map(function ($value) {
            if($value instanceof \JsonSerializable)
            {
                return $value->jsonSerialize();
            }

            return $value;
        }, get_object_vars($this));

        return $data;
    }
}
