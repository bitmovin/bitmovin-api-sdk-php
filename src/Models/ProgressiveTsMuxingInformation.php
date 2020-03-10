<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class ProgressiveTsMuxingInformation extends ProgressiveMuxingInformation
{
    /** @var \BitmovinApiSdk\Models\ProgressiveTsMuxingInformationByteRanges[] */
    public $byteRanges;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->byteRanges = ObjectMapper::map($this->byteRanges, ProgressiveTsMuxingInformationByteRanges::class);
    }
}

