<?php

namespace BitmovinApiSdk\Apis\Notifications\Webhooks\Encoding;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Notifications\Webhooks\Encoding\Encodings\EncodingsApi;
use BitmovinApiSdk\Apis\Notifications\Webhooks\Encoding\Manifest\ManifestApi;

class EncodingApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var EncodingsApi */
    public $encodings;

    /** @var ManifestApi */
    public $manifest;

    /**
     * EncodingApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->encodings = new EncodingsApi(null, $this->httpWrapper);
        $this->manifest = new ManifestApi(null, $this->httpWrapper);
    }
}
