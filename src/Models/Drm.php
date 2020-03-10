<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Drm extends BitmovinResource
{
    /** @var \BitmovinApiSdk\Models\EncodingOutput[] */
    public $outputs;

    public static $discriminatorMapping = [
        "WIDEVINE" => WidevineDrm::class,
        "PLAYREADY" => PlayReadyDrm::class,
        "PRIMETIME" => PrimeTimeDrm::class,
        "FAIRPLAY" => FairPlayDrm::class,
        "MARLIN" => MarlinDrm::class,
        "CLEARKEY" => ClearKeyDrm::class,
        "AES" => AesEncryptionDrm::class,
        "CENC" => CencDrm::class,
        "SPEKE" => SpekeDrm::class,
    ];

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->outputs = ObjectMapper::map($this->outputs, EncodingOutput::class);
    }

    /**
     * outputs
     *
     * @param \BitmovinApiSdk\Models\EncodingOutput[] $outputs
     * @return $this
     */
    public function outputs(array $outputs)
    {
        $this->outputs = $outputs;

        return $this;
    }
}

