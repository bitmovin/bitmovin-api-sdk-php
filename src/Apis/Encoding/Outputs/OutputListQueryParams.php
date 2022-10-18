<?php

namespace BitmovinApiSdk\Apis\Encoding\Outputs;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;
use \BitmovinApiSdk\Models\OutputType;

class OutputListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $name;

    /** @var OutputType */
    private $type;

    /**
     * @return OutputListQueryParams
     */
    public static function create(): OutputListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return OutputListQueryParams
     */
    public function offset(int $offset): OutputListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return OutputListQueryParams
     */
    public function limit(int $limit): OutputListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $name
     * @return OutputListQueryParams
     */
    public function name(string $name): OutputListQueryParams
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param OutputType $type
     * @return OutputListQueryParams
     */
    public function type(OutputType $type): OutputListQueryParams
    {
        $this->type = $type;

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
