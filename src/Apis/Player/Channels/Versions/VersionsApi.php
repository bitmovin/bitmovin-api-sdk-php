<?php

namespace BitmovinApiSdk\Apis\Player\Channels\Versions;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Player\Channels\Versions\Latest\LatestApi;

class VersionsApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var LatestApi */
    public $latest;

    /**
     * VersionsApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->latest = new LatestApi(null, $this->httpWrapper);
    }

    /**
     * List Player Versions for Channel
     *
     * @param string $channelName
     * @return PlayerVersionPaginationResponse
     * @throws BitmovinApiException
     */
    public function list(string $channelName) : PlayerVersionPaginationResponse
    {
        $pathParams = [
            'channel_name' => $channelName,
        ];
        $response = $this->httpWrapper->request('GET','/player/channels/{channel_name}/versions', $pathParams,  null, null, true);

        return ObjectMapper::map($response, PlayerVersionPaginationResponse::class);
    }
}
