<?php

namespace BitmovinApiSdk;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Account\AccountApi;
use BitmovinApiSdk\Apis\Analytics\AnalyticsApi;
use BitmovinApiSdk\Apis\Encoding\EncodingApi;
use BitmovinApiSdk\Apis\General\GeneralApi;
use BitmovinApiSdk\Apis\Notifications\NotificationsApi;
use BitmovinApiSdk\Apis\Player\PlayerApi;

class BitmovinApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var AccountApi */
    public $account;

    /** @var AnalyticsApi */
    public $analytics;

    /** @var EncodingApi */
    public $encoding;

    /** @var GeneralApi */
    public $general;

    /** @var NotificationsApi */
    public $notifications;

    /** @var PlayerApi */
    public $player;

    /**
     * BitmovinApi constructor.
     *
     * @param Configuration $config
     * @param HttpWrapper $httpWrapper
     */
    public function __construct(Configuration $config = null, HttpWrapper $httpWrapper = null)
    {
        $this->httpWrapper = $httpWrapper ?? new HttpWrapper($config);

        $this->account = new AccountApi(null, $this->httpWrapper);
        $this->analytics = new AnalyticsApi(null, $this->httpWrapper);
        $this->encoding = new EncodingApi(null, $this->httpWrapper);
        $this->general = new GeneralApi(null, $this->httpWrapper);
        $this->notifications = new NotificationsApi(null, $this->httpWrapper);
        $this->player = new PlayerApi(null, $this->httpWrapper);
    }
}
