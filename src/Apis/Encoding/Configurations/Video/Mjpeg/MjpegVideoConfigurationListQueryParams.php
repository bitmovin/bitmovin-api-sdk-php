<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Video\Mjpeg;

use BitmovinApiSdk\Common\QueryParams;

class MjpegVideoConfigurationListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return MjpegVideoConfigurationListQueryParams
     */
    public static function create(): MjpegVideoConfigurationListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return MjpegVideoConfigurationListQueryParams
     */
    public function offset(int $offset): MjpegVideoConfigurationListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return MjpegVideoConfigurationListQueryParams
     */
    public function limit(int $limit): MjpegVideoConfigurationListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return MjpegVideoConfigurationListQueryParams
     */
    public function name(string $name): MjpegVideoConfigurationListQueryParams
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
