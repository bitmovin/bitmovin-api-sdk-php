<?php

namespace BitmovinApiSdk\Apis\Player\Channels\Versions\Latest;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

class LatestApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /**
     * LatestApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

    }

    /**
     * Get Latest Player Version for Channel
     *
     * @param string $channelName
     * @return \BitmovinApiSdk\Models\PlayerVersion
     * @throws BitmovinApiException
     */
    public function get(string $channelName) : \BitmovinApiSdk\Models\PlayerVersion
    {
        $pathParams = [
            'channel_name' => $channelName,
        ];

        $response = $this->httpWrapper->request('GET', '/player/channels/{channel_name}/versions/latest', $pathParams,  null, null, true);

        return ObjectMapper::map($response, \BitmovinApiSdk\Models\PlayerVersion::class);
    }
}
