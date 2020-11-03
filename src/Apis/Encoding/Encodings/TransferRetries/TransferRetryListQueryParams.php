<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\TransferRetries;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class TransferRetryListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return TransferRetryListQueryParams
     */
    public static function create(): TransferRetryListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return TransferRetryListQueryParams
     */
    public function offset(int $offset): TransferRetryListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return TransferRetryListQueryParams
     */
    public function limit(int $limit): TransferRetryListQueryParams
    {
        $this->limit = $limit;

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
