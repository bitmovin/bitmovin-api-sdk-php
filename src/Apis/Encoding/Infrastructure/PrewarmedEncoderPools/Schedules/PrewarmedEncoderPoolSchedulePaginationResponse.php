<?php

namespace BitmovinApiSdk\Apis\Encoding\Infrastructure\PrewarmedEncoderPools\Schedules;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\PrewarmedEncoderPoolSchedule;

class PrewarmedEncoderPoolSchedulePaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var PrewarmedEncoderPoolSchedule[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, PrewarmedEncoderPoolSchedule::class);
    }
}
