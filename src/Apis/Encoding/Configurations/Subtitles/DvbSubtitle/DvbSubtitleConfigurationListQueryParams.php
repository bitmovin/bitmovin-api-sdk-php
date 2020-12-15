<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Subtitles\DvbSubtitle;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class DvbSubtitleConfigurationListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return DvbSubtitleConfigurationListQueryParams
     */
    public static function create(): DvbSubtitleConfigurationListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return DvbSubtitleConfigurationListQueryParams
     */
    public function offset(int $offset): DvbSubtitleConfigurationListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return DvbSubtitleConfigurationListQueryParams
     */
    public function limit(int $limit): DvbSubtitleConfigurationListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return DvbSubtitleConfigurationListQueryParams
     */
    public function name(string $name): DvbSubtitleConfigurationListQueryParams
    {
        $this->name = $name;

        return $this;
    }

    public function toArray(): array
    {
        return array_map(function ($value) {
            if($value instanceof Carbon)
            {
                return $value->utc()->toIso8601ZuluString();
            }

            if($value instanceof \JsonSerializable)
            {
                return $value->jsonSerialize();
            }

            return $value;
        }, get_object_vars($this));
    }
}
