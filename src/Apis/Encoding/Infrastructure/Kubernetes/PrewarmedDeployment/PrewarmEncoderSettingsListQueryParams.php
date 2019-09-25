<?php

namespace BitmovinApiSdk\Apis\Encoding\Infrastructure\Kubernetes\PrewarmedDeployment;

use BitmovinApiSdk\Common\QueryParams;

class PrewarmEncoderSettingsListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return PrewarmEncoderSettingsListQueryParams
     */
    public static function create(): PrewarmEncoderSettingsListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return PrewarmEncoderSettingsListQueryParams
     */
    public function offset(int $offset): PrewarmEncoderSettingsListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return PrewarmEncoderSettingsListQueryParams
     */
    public function limit(int $limit): PrewarmEncoderSettingsListQueryParams
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
