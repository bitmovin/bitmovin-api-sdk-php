<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class MuxingInformationVideoTrack extends \BitmovinApiSdk\Common\ApiResource
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

    /** @var string */
    public $pixelFormat;

    /** @var string */
    public $frameMode;

    /** @var int */
    public $frameWidth;

    /** @var int */
    public $frameHeight;

    /** @var string */
    public $frameRate;

    /** @var float */
    public $startTime;

    /** @var float */
    public $duration;

    /** @var int */
    public $numberOfFrames;

    /** @var string */
    public $aspectRatio;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }
}

