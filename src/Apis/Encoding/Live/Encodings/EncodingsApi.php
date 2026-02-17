<?php

namespace BitmovinApiSdk\Apis\Encoding\Live\Encodings;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\Live\Encodings\Actions\ActionsApi;
use BitmovinApiSdk\Apis\Encoding\Live\Encodings\DnsMappings\DnsMappingsApi;

class EncodingsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var ActionsApi */
    public $actions;

    /** @var DnsMappingsApi */
    public $dnsMappings;

    /**
     * EncodingsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->actions = new ActionsApi(null, $this->httpWrapper);
        $this->dnsMappings = new DnsMappingsApi(null, $this->httpWrapper);
    }
}
