<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams\BurnInSubtitles\Dvbsub;

use BitmovinApiSdk\Common\QueryParams;

class BurnInSubtitleDvbSubListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return BurnInSubtitleDvbSubListQueryParams
     */
    public static function create(): BurnInSubtitleDvbSubListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return BurnInSubtitleDvbSubListQueryParams
     */
    public function offset(int $offset): BurnInSubtitleDvbSubListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return BurnInSubtitleDvbSubListQueryParams
     */
    public function limit(int $limit): BurnInSubtitleDvbSubListQueryParams
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
