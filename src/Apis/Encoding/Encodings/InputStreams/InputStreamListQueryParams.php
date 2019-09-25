<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams;

use BitmovinApiSdk\Common\QueryParams;

class InputStreamListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return InputStreamListQueryParams
     */
    public static function create(): InputStreamListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return InputStreamListQueryParams
     */
    public function offset(int $offset): InputStreamListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return InputStreamListQueryParams
     */
    public function limit(int $limit): InputStreamListQueryParams
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
