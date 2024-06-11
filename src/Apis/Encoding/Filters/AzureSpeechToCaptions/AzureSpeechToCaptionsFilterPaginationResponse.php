<?php

namespace BitmovinApiSdk\Apis\Encoding\Filters\AzureSpeechToCaptions;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\AzureSpeechToCaptionsFilter;

class AzureSpeechToCaptionsFilterPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var AzureSpeechToCaptionsFilter[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, AzureSpeechToCaptionsFilter::class);
    }
}
