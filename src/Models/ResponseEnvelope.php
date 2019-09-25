<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class ResponseEnvelope extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $requestId;

    /** @var ResponseStatus */
    public $status;

    /** @var ResultWrapper */
    public $data;

    /** @var object */
    public $more;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->status = ObjectMapper::map($this->status, ResponseStatus::class);
        $this->data = ObjectMapper::map($this->data, ResultWrapper::class);
    }

    /**
     * Additional endpoint specific information
     *
     * @param object $more
     * @return $this
     */
    public function more(object $more)
    {
        $this->more = $more;

        return $this;
    }
}

