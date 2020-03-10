<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class StreamFilterList extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var \BitmovinApiSdk\Models\StreamFilter[] */
    public $filters;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->filters = ObjectMapper::map($this->filters, StreamFilter::class);
    }

    /**
     * List of stream filters (required)
     *
     * @param \BitmovinApiSdk\Models\StreamFilter[] $filters
     * @return $this
     */
    public function filters(array $filters)
    {
        $this->filters = $filters;

        return $this;
    }
}

