<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Hls\Media\Subtitles;

use BitmovinApiSdk\Common\QueryParams;

class SubtitlesMediaInfoListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return SubtitlesMediaInfoListQueryParams
     */
    public static function create(): SubtitlesMediaInfoListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return SubtitlesMediaInfoListQueryParams
     */
    public function offset(int $offset): SubtitlesMediaInfoListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return SubtitlesMediaInfoListQueryParams
     */
    public function limit(int $limit): SubtitlesMediaInfoListQueryParams
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
