<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class MuxingInformationAudioTrack extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var int */
    public $index;

    /** @var string */
    public $codec;

    /** @var string */
    public $codecIso;

    /** @var int */
    public $bitRate;

    /** @var int */
    public $rate;

    /** @var int */
    public $sampleRate;

    /** @var int */
    public $channels;

    /** @var float */
    public $duration;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }
}

