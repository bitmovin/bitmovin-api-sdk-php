<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Live\InsertableContent\Stop;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class StopApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * StopApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Stops Currently Running Inserted Content
     *
     * @param string $encodingId
     * @throws BitmovinApiException
     */
    public function create(string $encodingId)
    {
        $pathParams = [
            'encoding_id' => $encodingId,
        ];

        $this->httpWrapper->request('POST', '/encoding/encodings/{encoding_id}/live/insertable-content/stop', $pathParams,  null, null, false);
    }
}
