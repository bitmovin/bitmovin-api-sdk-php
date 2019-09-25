<?php

namespace BitmovinApiSdk\Apis\Encoding\Infrastructure\Kubernetes\PrewarmedDeployment;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\PrewarmEncoderSettings;

class PrewarmEncoderSettingsPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var PrewarmEncoderSettings[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, PrewarmEncoderSettings::class);
    }
}
