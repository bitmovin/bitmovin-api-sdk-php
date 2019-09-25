<?php

namespace BitmovinApiSdk\Common;

class BasePaginationResponse extends ApiResource
{
    /** @var int */
    public $totalCount;

    /** @var int */
    public $offset;

    /** @var int */
    public $limit;

    /** @var string */
    public $previous;

    /** @var string */
    public $next;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * totalCount
     *
     * @param int $totalCount
     * @return $this
     */
    public function totalCount(int $totalCount)
    {
        $this->totalCount = $totalCount;

        return $this;
    }

    /**
     * offset
     *
     * @param int $offset
     * @return $this
     */
    public function offset(int $offset)
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * limit
     *
     * @param int $limit
     * @return $this
     */
    public function limit(int $limit)
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * previous
     *
     * @param string $previous
     * @return $this
     */
    public function previous(string $previous)
    {
        $this->previous = $previous;

        return $this;
    }

    /**
     * next
     *
     * @param string $next
     * @return $this
     */
    public function next(string $next)
    {
        $this->next = $next;

        return $this;
    }
}

