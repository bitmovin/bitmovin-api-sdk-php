<?php

namespace BitmovinApiSdk\Apis\Player\Channels;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Player\Channels\Versions\VersionsApi;

class ChannelsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var VersionsApi */
    public $versions;

    /**
     * ChannelsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->versions = new VersionsApi(null, $this->httpWrapper);
    }

    /**
     * List Player Channels
     *
     * @return PlayerChannelPaginationResponse
     * @throws BitmovinApiException
     */
    public function list() : PlayerChannelPaginationResponse
    {
        $response = $this->httpWrapper->request('GET', '/player/channels', [],  null, null, true);

        return ObjectMapper::map($response, PlayerChannelPaginationResponse::class);
    }
}
