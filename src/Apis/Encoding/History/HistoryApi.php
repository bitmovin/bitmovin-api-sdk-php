<?php

namespace BitmovinApiSdk\Apis\Encoding\History;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Encoding\History\Encodings\EncodingsApi;

class HistoryApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var EncodingsApi */
    public $encodings;

    /**
     * HistoryApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->encodings = new EncodingsApi(null, $this->httpWrapper);
    }
}
