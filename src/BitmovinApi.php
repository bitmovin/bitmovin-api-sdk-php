<?php

namespace BitmovinApiSdk;

use Carbon\Carbon;
use BitmovinApiSdk\Configuration;
use BitmovinApiSdk\Common\HttpWrapper;
use BitmovinApiSdk\Common\ObjectMapper;
use BitmovinApiSdk\Common\BitmovinApiException;

use BitmovinApiSdk\Apis\Account\AccountApi;
use BitmovinApiSdk\Apis\AiSceneAnalysis\AiSceneAnalysisApi;
use BitmovinApiSdk\Apis\Analytics\AnalyticsApi;
use BitmovinApiSdk\Apis\Encoding\EncodingApi;
use BitmovinApiSdk\Apis\General\GeneralApi;
use BitmovinApiSdk\Apis\Notifications\NotificationsApi;
use BitmovinApiSdk\Apis\Player\PlayerApi;
use BitmovinApiSdk\Apis\Streams\StreamsApi;

class BitmovinApi
{
    /** @var HttpWrapper */
    private $httpWrapper;

    /** @var AccountApi */
    public $account;

    /** @var AiSceneAnalysisApi */
    public $aiSceneAnalysis;

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

    /** @var StreamsApi */
    public $streams;

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
        $this->aiSceneAnalysis = new AiSceneAnalysisApi(null, $this->httpWrapper);
        $this->analytics = new AnalyticsApi(null, $this->httpWrapper);
        $this->encoding = new EncodingApi(null, $this->httpWrapper);
        $this->general = new GeneralApi(null, $this->httpWrapper);
        $this->notifications = new NotificationsApi(null, $this->httpWrapper);
        $this->player = new PlayerApi(null, $this->httpWrapper);
        $this->streams = new StreamsApi(null, $this->httpWrapper);
    }
}
