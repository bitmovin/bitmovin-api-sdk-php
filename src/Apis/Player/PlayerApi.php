<?php

namespace BitmovinApiSdk\Apis\Player;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Player\Channels\ChannelsApi;
use BitmovinApiSdk\Apis\Player\Licenses\LicensesApi;
use BitmovinApiSdk\Apis\Player\CustomBuilds\CustomBuildsApi;

class PlayerApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var ChannelsApi */
    public $channels;

    /** @var LicensesApi */
    public $licenses;

    /** @var CustomBuildsApi */
    public $customBuilds;

    /**
     * PlayerApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->channels = new ChannelsApi(null, $this->httpWrapper);
        $this->licenses = new LicensesApi(null, $this->httpWrapper);
        $this->customBuilds = new CustomBuildsApi(null, $this->httpWrapper);
    }
}
