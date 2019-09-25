<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\AudioMix;

use BitmovinApiSdk\Common\QueryParams;

class AudioMixInputStreamListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return AudioMixInputStreamListQueryParams
     */
    public static function create(): AudioMixInputStreamListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return AudioMixInputStreamListQueryParams
     */
    public function offset(int $offset): AudioMixInputStreamListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return AudioMixInputStreamListQueryParams
     */
    public function limit(int $limit): AudioMixInputStreamListQueryParams
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
