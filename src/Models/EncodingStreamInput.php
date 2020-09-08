<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class EncodingStreamInput extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $inputId;

    /** @var string */
    public $inputPath;

    /** @var EncodingStreamInputDetails */
    public $details;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->details = ObjectMapper::map($this->details, EncodingStreamInputDetails::class);
    }

    /**
     * details
     *
     * @param EncodingStreamInputDetails $details
     * @return $this
     */
    public function details(EncodingStreamInputDetails $details)
    {
        $this->details = $details;

        return $this;
    }
}

