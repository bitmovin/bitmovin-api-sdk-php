<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\PackedAudio;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;

class PackedAudioMuxingListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /**
     * @return PackedAudioMuxingListQueryParams
     */
    public static function create(): PackedAudioMuxingListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return PackedAudioMuxingListQueryParams
     */
    public function offset(int $offset): PackedAudioMuxingListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return PackedAudioMuxingListQueryParams
     */
    public function limit(int $limit): PackedAudioMuxingListQueryParams
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
