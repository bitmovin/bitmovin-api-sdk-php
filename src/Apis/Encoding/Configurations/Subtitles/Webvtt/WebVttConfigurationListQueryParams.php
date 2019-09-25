<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Subtitles\Webvtt;

use BitmovinApiSdk\Common\QueryParams;

class WebVttConfigurationListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return WebVttConfigurationListQueryParams
     */
    public static function create(): WebVttConfigurationListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return WebVttConfigurationListQueryParams
     */
    public function offset(int $offset): WebVttConfigurationListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return WebVttConfigurationListQueryParams
     */
    public function limit(int $limit): WebVttConfigurationListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return WebVttConfigurationListQueryParams
     */
    public function name(string $name): WebVttConfigurationListQueryParams
    {
        $this->name = $name;

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
