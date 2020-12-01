<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings;

use Carbon\Carbon;
use BitmovinApiSdk\Common\QueryParams;
use \BitmovinApiSdk\Models\CloudRegion;
use \BitmovinApiSdk\Models\EncodingMode;

class EncodingListQueryParams implements QueryParams
{
    /** @var int */
    private $offset;

    /** @var int */
    private $limit;

    /** @var string */
    private $sort;

    /** @var string */
    private $type;

    /** @var string */
    private $status;

    /** @var CloudRegion */
    private $cloudRegion;

    /** @var CloudRegion */
    private $selectedCloudRegion;

    /** @var string */
    private $encoderVersion;

    /** @var string */
    private $selectedEncoderVersion;

    /** @var EncodingMode */
    private $selectedEncodingMode;

    /** @var string */
    private $name;

    /** @var string */
    private $search;

    /** @var Carbon */
    private $createdAtNewerThan;

    /** @var Carbon */
    private $createdAtOlderThan;

    /** @var Carbon */
    private $startedAtNewerThan;

    /** @var Carbon */
    private $startedAtOlderThan;

    /** @var Carbon */
    private $finishedAtNewerThan;

    /** @var Carbon */
    private $finishedAtOlderThan;

    /**
     * @return EncodingListQueryParams
     */
    public static function create(): EncodingListQueryParams
    {
        return new static();
    }

    /**
     * @param int $offset
     * @return EncodingListQueryParams
     */
    public function offset(int $offset): EncodingListQueryParams
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param int $limit
     * @return EncodingListQueryParams
     */
    public function limit(int $limit): EncodingListQueryParams
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param string $sort
     * @return EncodingListQueryParams
     */
    public function sort(string $sort): EncodingListQueryParams
    {
        $this->sort = $sort;

        return $this;
    }

    /**
     * @param string $type
     * @return EncodingListQueryParams
     */
    public function type(string $type): EncodingListQueryParams
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param string $status
     * @return EncodingListQueryParams
     */
    public function status(string $status): EncodingListQueryParams
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @param CloudRegion $cloudRegion
     * @return EncodingListQueryParams
     */
    public function cloudRegion(CloudRegion $cloudRegion): EncodingListQueryParams
    {
        $this->cloudRegion = $cloudRegion;

        return $this;
    }

    /**
     * @param CloudRegion $selectedCloudRegion
     * @return EncodingListQueryParams
     */
    public function selectedCloudRegion(CloudRegion $selectedCloudRegion): EncodingListQueryParams
    {
        $this->selectedCloudRegion = $selectedCloudRegion;

        return $this;
    }

    /**
     * @param string $encoderVersion
     * @return EncodingListQueryParams
     */
    public function encoderVersion(string $encoderVersion): EncodingListQueryParams
    {
        $this->encoderVersion = $encoderVersion;

        return $this;
    }

    /**
     * @param string $selectedEncoderVersion
     * @return EncodingListQueryParams
     */
    public function selectedEncoderVersion(string $selectedEncoderVersion): EncodingListQueryParams
    {
        $this->selectedEncoderVersion = $selectedEncoderVersion;

        return $this;
    }

    /**
     * @param EncodingMode $selectedEncodingMode
     * @return EncodingListQueryParams
     */
    public function selectedEncodingMode(EncodingMode $selectedEncodingMode): EncodingListQueryParams
    {
        $this->selectedEncodingMode = $selectedEncodingMode;

        return $this;
    }

    /**
     * @param string $name
     * @return EncodingListQueryParams
     */
    public function name(string $name): EncodingListQueryParams
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param string $search
     * @return EncodingListQueryParams
     */
    public function search(string $search): EncodingListQueryParams
    {
        $this->search = $search;

        return $this;
    }

    /**
     * @param Carbon $createdAtNewerThan
     * @return EncodingListQueryParams
     */
    public function createdAtNewerThan(Carbon $createdAtNewerThan): EncodingListQueryParams
    {
        $this->createdAtNewerThan = $createdAtNewerThan;

        return $this;
    }

    /**
     * @param Carbon $createdAtOlderThan
     * @return EncodingListQueryParams
     */
    public function createdAtOlderThan(Carbon $createdAtOlderThan): EncodingListQueryParams
    {
        $this->createdAtOlderThan = $createdAtOlderThan;

        return $this;
    }

    /**
     * @param Carbon $startedAtNewerThan
     * @return EncodingListQueryParams
     */
    public function startedAtNewerThan(Carbon $startedAtNewerThan): EncodingListQueryParams
    {
        $this->startedAtNewerThan = $startedAtNewerThan;

        return $this;
    }

    /**
     * @param Carbon $startedAtOlderThan
     * @return EncodingListQueryParams
     */
    public function startedAtOlderThan(Carbon $startedAtOlderThan): EncodingListQueryParams
    {
        $this->startedAtOlderThan = $startedAtOlderThan;

        return $this;
    }

    /**
     * @param Carbon $finishedAtNewerThan
     * @return EncodingListQueryParams
     */
    public function finishedAtNewerThan(Carbon $finishedAtNewerThan): EncodingListQueryParams
    {
        $this->finishedAtNewerThan = $finishedAtNewerThan;

        return $this;
    }

    /**
     * @param Carbon $finishedAtOlderThan
     * @return EncodingListQueryParams
     */
    public function finishedAtOlderThan(Carbon $finishedAtOlderThan): EncodingListQueryParams
    {
        $this->finishedAtOlderThan = $finishedAtOlderThan;

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
