<?php

namespace BitmovinApiSdk\Apis\Encoding\Outputs\LiveMediaIngest;

use BitmovinApiSdk\Common\QueryParams;

class LiveMediaIngestOutputListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /**
     * @return LiveMediaIngestOutputListQueryParams
     */
    public static function create(): LiveMediaIngestOutputListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return LiveMediaIngestOutputListQueryParams
     */
    public function offset(int $offset): LiveMediaIngestOutputListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return LiveMediaIngestOutputListQueryParams
     */
    public function limit(int $limit): LiveMediaIngestOutputListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return LiveMediaIngestOutputListQueryParams
     */
    public function name(string $name): LiveMediaIngestOutputListQueryParams
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
