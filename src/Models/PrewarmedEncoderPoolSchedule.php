<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class PrewarmedEncoderPoolSchedule extends BitmovinResponse
{
    /** @var PrewarmedEncoderPoolAction */
    public $action;

    /** @var Carbon */
    public $triggerDate;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->action = ObjectMapper::map($this->action, PrewarmedEncoderPoolAction::class);
        $this->triggerDate = ObjectMapper::map($this->triggerDate, Carbon::class);
    }

    /**
     * The action to be triggered by the schedule (start or stop) (required)
     *
     * @param PrewarmedEncoderPoolAction $action
     * @return $this
     */
    public function action(PrewarmedEncoderPoolAction $action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * An instant in the future when the specified action should be triggered. Given as UTC expressed in ISO 8601 format (\&quot;YYYY-MM-DDThh:mm:ssZ\&quot;). Seconds will be ignored. (required)
     *
     * @param Carbon $triggerDate
     * @return $this
     */
    public function triggerDate(Carbon $triggerDate)
    {
        $this->triggerDate = $triggerDate;

        return $this;
    }
}

