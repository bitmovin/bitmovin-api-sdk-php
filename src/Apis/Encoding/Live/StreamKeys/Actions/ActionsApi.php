<?php

namespace BitmovinApiSdk\Apis\Encoding\Live\StreamKeys\Actions;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class ActionsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * ActionsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Unassign stream keys
     *
     * @param \BitmovinApiSdk\Models\StreamKeysUnassignAction $streamKeysUnassignAction
     * @return \BitmovinApiSdk\Models\StreamKeysUnassignAction
     * @throws BitmovinApiException
     */
    public function unassign(\BitmovinApiSdk\Models\StreamKeysUnassignAction $streamKeysUnassignAction) : \BitmovinApiSdk\Models\StreamKeysUnassignAction
    {
        $response = $this->httpWrapper->request('POST', '/encoding/live/stream-keys/actions/unassign', [],  null, $streamKeysUnassignAction, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\StreamKeysUnassignAction::class);
    }
}
