<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AnalyticsAdsImpressionSample extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $adClickthroughUrl;

    /** @var string */
    public $adDescription;

    /** @var int */
    public $adDuration;

    /** @var int */
    public $adFallbackIndex;

    /** @var string */
    public $adId;

    /** @var string */
    public $adIdPlayer;

    /** @var string */
    public $adImpressionId;

    /** @var bool */
    public $adIsPersistent;

    /** @var string */
    public $adModule;

    /** @var string */
    public $adModuleVersion;

    /** @var string */
    public $adOffset;

    /** @var int */
    public $adPlaybackHeight;

    /** @var int */
    public $adPlaybackWidth;

    /** @var int */
    public $adPodPosition;

    /** @var string */
    public $adPosition;

    /** @var int */
    public $adPreloadOffset;

    /** @var int */
    public $adReplaceContentDuration;

    /** @var int */
    public $adScheduleTime;

    /** @var int */
    public $adSkipAfter;

    /** @var bool */
    public $adSkippable;

    /** @var int */
    public $adStartupTime;

    /** @var string */
    public $adSystem;

    /** @var string */
    public $adTagPath;

    /** @var string */
    public $adTagServer;

    /** @var string */
    public $adTagType;

    /** @var string */
    public $adTagUrl;

    /** @var string */
    public $adTitle;

    /** @var int */
    public $adWrapperAdsCount;

    /** @var string */
    public $advertiserName;

    /** @var string */
    public $analyticsVersion;

    /** @var string */
    public $apiFramework;

    /** @var string */
    public $apiorgId;

    /** @var string */
    public $apiuserId;

    /** @var int */
    public $audioBitrate;

    /** @var bool */
    public $autoplay;

    /** @var string */
    public $browser;

    /** @var bool */
    public $browserIsBot;

    /** @var string */
    public $browserVersionMajor;

    /** @var string */
    public $browserVersionMinor;

    /** @var string */
    public $cdnProvider;

    /** @var string */
    public $city;

    /** @var int */
    public $clickPercentage;

    /** @var int */
    public $clickPosition;

    /** @var int */
    public $clicked;

    /** @var int */
    public $clientTime;

    /** @var int */
    public $closePercentage;

    /** @var int */
    public $closePosition;

    /** @var int */
    public $closed;

    /** @var int */
    public $completed;

    /** @var string */
    public $country;

    /** @var string */
    public $creativeAdId;

    /** @var string */
    public $creativeId;

    /** @var string */
    public $customData1;

    /** @var string */
    public $customData2;

    /** @var string */
    public $customData3;

    /** @var string */
    public $customData4;

    /** @var string */
    public $customData5;

    /** @var string */
    public $customData6;

    /** @var string */
    public $customData7;

    /** @var string */
    public $customData8;

    /** @var string */
    public $customData9;

    /** @var string */
    public $customData10;

    /** @var string */
    public $customData11;

    /** @var string */
    public $customData12;

    /** @var string */
    public $customData13;

    /** @var string */
    public $customData14;

    /** @var string */
    public $customData15;

    /** @var string */
    public $customData16;

    /** @var string */
    public $customData17;

    /** @var string */
    public $customData18;

    /** @var string */
    public $customData19;

    /** @var string */
    public $customData20;

    /** @var string */
    public $customData21;

    /** @var string */
    public $customData22;

    /** @var string */
    public $customData23;

    /** @var string */
    public $customData24;

    /** @var string */
    public $customData25;

    /** @var string */
    public $customUserId;

    /** @var string */
    public $dealId;

    /** @var string */
    public $deviceClass;

    /** @var string */
    public $deviceType;

    /** @var string */
    public $domain;

    /** @var int */
    public $errorCode;

    /** @var string */
    public $errorData;

    /** @var string */
    public $errorMessage;

    /** @var int */
    public $errorPercentage;

    /** @var int */
    public $errorPosition;

    /** @var int */
    public $exitPosition;

    /** @var string */
    public $experimentName;

    /** @var string */
    public $ipAddress;

    /** @var string */
    public $isp;

    /** @var string */
    public $language;

    /** @var string */
    public $licenseKey;

    /** @var int */
    public $manifestDownloadTime;

    /** @var string */
    public $mediaPath;

    /** @var string */
    public $mediaServer;

    /** @var string */
    public $mediaUrl;

    /** @var int */
    public $midpoint;

    /** @var int */
    public $minSuggestedDuration;

    /** @var string */
    public $operatingsystem;

    /** @var string */
    public $operatingsystemVersionMajor;

    /** @var string */
    public $operatingsystemVersionMinor;

    /** @var int */
    public $pageLoadTime;

    /** @var int */
    public $pageLoadType;

    /** @var string */
    public $path;

    /** @var int */
    public $percentageInViewport;

    /** @var string */
    public $platform;

    /** @var string */
    public $player;

    /** @var string */
    public $playerKey;

    /** @var int */
    public $playerStartuptime;

    /** @var string */
    public $playerTech;

    /** @var string */
    public $playerVersion;

    /** @var int */
    public $playPercentage;

    /** @var int */
    public $quartile1;

    /** @var int */
    public $quartile3;

    /** @var string */
    public $region;

    /** @var int */
    public $screenHeight;

    /** @var int */
    public $screenWidth;

    /** @var string */
    public $size;

    /** @var int */
    public $skipPercentage;

    /** @var int */
    public $skipPosition;

    /** @var int */
    public $skipped;

    /** @var int */
    public $started;

    /** @var string */
    public $streamFormat;

    /** @var string */
    public $surveyUrl;

    /** @var int */
    public $time;

    /** @var int */
    public $timeInViewport;

    /** @var int */
    public $timePlayed;

    /** @var string */
    public $universalAdIdRegistry;

    /** @var string */
    public $universalAdIdValue;

    /** @var string */
    public $userId;

    /** @var int */
    public $videoBitrate;

    /** @var string */
    public $videoId;

    /** @var string */
    public $videoImpressionId;

    /** @var string */
    public $videoTitle;

    /** @var int */
    public $videoWindowHeight;

    /** @var int */
    public $videoWindowWidth;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Ad click through url
     *
     * @param string $adClickthroughUrl
     * @return $this
     */
    public function adClickthroughUrl(string $adClickthroughUrl)
    {
        $this->adClickthroughUrl = $adClickthroughUrl;

        return $this;
    }

    /**
     * Ad description
     *
     * @param string $adDescription
     * @return $this
     */
    public function adDescription(string $adDescription)
    {
        $this->adDescription = $adDescription;

        return $this;
    }

    /**
     * Ad duration
     *
     * @param int $adDuration
     * @return $this
     */
    public function adDuration(int $adDuration)
    {
        $this->adDuration = $adDuration;

        return $this;
    }

    /**
     * Ad fallback index
     *
     * @param int $adFallbackIndex
     * @return $this
     */
    public function adFallbackIndex(int $adFallbackIndex)
    {
        $this->adFallbackIndex = $adFallbackIndex;

        return $this;
    }

    /**
     * Ad id
     *
     * @param string $adId
     * @return $this
     */
    public function adId(string $adId)
    {
        $this->adId = $adId;

        return $this;
    }

    /**
     * Ad id player
     *
     * @param string $adIdPlayer
     * @return $this
     */
    public function adIdPlayer(string $adIdPlayer)
    {
        $this->adIdPlayer = $adIdPlayer;

        return $this;
    }

    /**
     * Ad impression id
     *
     * @param string $adImpressionId
     * @return $this
     */
    public function adImpressionId(string $adImpressionId)
    {
        $this->adImpressionId = $adImpressionId;

        return $this;
    }

    /**
     * Ad is persistent
     *
     * @param bool $adIsPersistent
     * @return $this
     */
    public function adIsPersistent(bool $adIsPersistent)
    {
        $this->adIsPersistent = $adIsPersistent;

        return $this;
    }

    /**
     * Ad module
     *
     * @param string $adModule
     * @return $this
     */
    public function adModule(string $adModule)
    {
        $this->adModule = $adModule;

        return $this;
    }

    /**
     * Ad module version
     *
     * @param string $adModuleVersion
     * @return $this
     */
    public function adModuleVersion(string $adModuleVersion)
    {
        $this->adModuleVersion = $adModuleVersion;

        return $this;
    }

    /**
     * Ad offset
     *
     * @param string $adOffset
     * @return $this
     */
    public function adOffset(string $adOffset)
    {
        $this->adOffset = $adOffset;

        return $this;
    }

    /**
     * Ad playback height
     *
     * @param int $adPlaybackHeight
     * @return $this
     */
    public function adPlaybackHeight(int $adPlaybackHeight)
    {
        $this->adPlaybackHeight = $adPlaybackHeight;

        return $this;
    }

    /**
     * Ad playback width
     *
     * @param int $adPlaybackWidth
     * @return $this
     */
    public function adPlaybackWidth(int $adPlaybackWidth)
    {
        $this->adPlaybackWidth = $adPlaybackWidth;

        return $this;
    }

    /**
     * Ad pod position
     *
     * @param int $adPodPosition
     * @return $this
     */
    public function adPodPosition(int $adPodPosition)
    {
        $this->adPodPosition = $adPodPosition;

        return $this;
    }

    /**
     * Ad position
     *
     * @param string $adPosition
     * @return $this
     */
    public function adPosition(string $adPosition)
    {
        $this->adPosition = $adPosition;

        return $this;
    }

    /**
     * Ad preload offset
     *
     * @param int $adPreloadOffset
     * @return $this
     */
    public function adPreloadOffset(int $adPreloadOffset)
    {
        $this->adPreloadOffset = $adPreloadOffset;

        return $this;
    }

    /**
     * Ad replace content duration
     *
     * @param int $adReplaceContentDuration
     * @return $this
     */
    public function adReplaceContentDuration(int $adReplaceContentDuration)
    {
        $this->adReplaceContentDuration = $adReplaceContentDuration;

        return $this;
    }

    /**
     * Ad schedule duration
     *
     * @param int $adScheduleTime
     * @return $this
     */
    public function adScheduleTime(int $adScheduleTime)
    {
        $this->adScheduleTime = $adScheduleTime;

        return $this;
    }

    /**
     * Ad skip after
     *
     * @param int $adSkipAfter
     * @return $this
     */
    public function adSkipAfter(int $adSkipAfter)
    {
        $this->adSkipAfter = $adSkipAfter;

        return $this;
    }

    /**
     * Ad is skippable
     *
     * @param bool $adSkippable
     * @return $this
     */
    public function adSkippable(bool $adSkippable)
    {
        $this->adSkippable = $adSkippable;

        return $this;
    }

    /**
     * Ad startup time
     *
     * @param int $adStartupTime
     * @return $this
     */
    public function adStartupTime(int $adStartupTime)
    {
        $this->adStartupTime = $adStartupTime;

        return $this;
    }

    /**
     * Ad system
     *
     * @param string $adSystem
     * @return $this
     */
    public function adSystem(string $adSystem)
    {
        $this->adSystem = $adSystem;

        return $this;
    }

    /**
     * Ad tag path
     *
     * @param string $adTagPath
     * @return $this
     */
    public function adTagPath(string $adTagPath)
    {
        $this->adTagPath = $adTagPath;

        return $this;
    }

    /**
     * Ad system
     *
     * @param string $adTagServer
     * @return $this
     */
    public function adTagServer(string $adTagServer)
    {
        $this->adTagServer = $adTagServer;

        return $this;
    }

    /**
     * Ad tag type
     *
     * @param string $adTagType
     * @return $this
     */
    public function adTagType(string $adTagType)
    {
        $this->adTagType = $adTagType;

        return $this;
    }

    /**
     * Ad tag url
     *
     * @param string $adTagUrl
     * @return $this
     */
    public function adTagUrl(string $adTagUrl)
    {
        $this->adTagUrl = $adTagUrl;

        return $this;
    }

    /**
     * Ad title
     *
     * @param string $adTitle
     * @return $this
     */
    public function adTitle(string $adTitle)
    {
        $this->adTitle = $adTitle;

        return $this;
    }

    /**
     * Ad wrapper ads count
     *
     * @param int $adWrapperAdsCount
     * @return $this
     */
    public function adWrapperAdsCount(int $adWrapperAdsCount)
    {
        $this->adWrapperAdsCount = $adWrapperAdsCount;

        return $this;
    }

    /**
     * Advertiser name
     *
     * @param string $advertiserName
     * @return $this
     */
    public function advertiserName(string $advertiserName)
    {
        $this->advertiserName = $advertiserName;

        return $this;
    }

    /**
     * Analytics version
     *
     * @param string $analyticsVersion
     * @return $this
     */
    public function analyticsVersion(string $analyticsVersion)
    {
        $this->analyticsVersion = $analyticsVersion;

        return $this;
    }

    /**
     * Api framework
     *
     * @param string $apiFramework
     * @return $this
     */
    public function apiFramework(string $apiFramework)
    {
        $this->apiFramework = $apiFramework;

        return $this;
    }

    /**
     * Organization id
     *
     * @param string $apiorgId
     * @return $this
     */
    public function apiorgId(string $apiorgId)
    {
        $this->apiorgId = $apiorgId;

        return $this;
    }

    /**
     * User id
     *
     * @param string $apiuserId
     * @return $this
     */
    public function apiuserId(string $apiuserId)
    {
        $this->apiuserId = $apiuserId;

        return $this;
    }

    /**
     * Audio bitrate
     *
     * @param int $audioBitrate
     * @return $this
     */
    public function audioBitrate(int $audioBitrate)
    {
        $this->audioBitrate = $audioBitrate;

        return $this;
    }

    /**
     * Is autoplay
     *
     * @param bool $autoplay
     * @return $this
     */
    public function autoplay(bool $autoplay)
    {
        $this->autoplay = $autoplay;

        return $this;
    }

    /**
     * Browser name
     *
     * @param string $browser
     * @return $this
     */
    public function browser(string $browser)
    {
        $this->browser = $browser;

        return $this;
    }

    /**
     * Browser is bot
     *
     * @param bool $browserIsBot
     * @return $this
     */
    public function browserIsBot(bool $browserIsBot)
    {
        $this->browserIsBot = $browserIsBot;

        return $this;
    }

    /**
     * Browser version major
     *
     * @param string $browserVersionMajor
     * @return $this
     */
    public function browserVersionMajor(string $browserVersionMajor)
    {
        $this->browserVersionMajor = $browserVersionMajor;

        return $this;
    }

    /**
     * Browser version minor
     *
     * @param string $browserVersionMinor
     * @return $this
     */
    public function browserVersionMinor(string $browserVersionMinor)
    {
        $this->browserVersionMinor = $browserVersionMinor;

        return $this;
    }

    /**
     * CDN Provider
     *
     * @param string $cdnProvider
     * @return $this
     */
    public function cdnProvider(string $cdnProvider)
    {
        $this->cdnProvider = $cdnProvider;

        return $this;
    }

    /**
     * City
     *
     * @param string $city
     * @return $this
     */
    public function city(string $city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Click percentage
     *
     * @param int $clickPercentage
     * @return $this
     */
    public function clickPercentage(int $clickPercentage)
    {
        $this->clickPercentage = $clickPercentage;

        return $this;
    }

    /**
     * Click position
     *
     * @param int $clickPosition
     * @return $this
     */
    public function clickPosition(int $clickPosition)
    {
        $this->clickPosition = $clickPosition;

        return $this;
    }

    /**
     * Clicked
     *
     * @param int $clicked
     * @return $this
     */
    public function clicked(int $clicked)
    {
        $this->clicked = $clicked;

        return $this;
    }

    /**
     * Current time of the client
     *
     * @param int $clientTime
     * @return $this
     */
    public function clientTime(int $clientTime)
    {
        $this->clientTime = $clientTime;

        return $this;
    }

    /**
     * Close percentage
     *
     * @param int $closePercentage
     * @return $this
     */
    public function closePercentage(int $closePercentage)
    {
        $this->closePercentage = $closePercentage;

        return $this;
    }

    /**
     * Close position
     *
     * @param int $closePosition
     * @return $this
     */
    public function closePosition(int $closePosition)
    {
        $this->closePosition = $closePosition;

        return $this;
    }

    /**
     * Closed
     *
     * @param int $closed
     * @return $this
     */
    public function closed(int $closed)
    {
        $this->closed = $closed;

        return $this;
    }

    /**
     * Completed
     *
     * @param int $completed
     * @return $this
     */
    public function completed(int $completed)
    {
        $this->completed = $completed;

        return $this;
    }

    /**
     * Country
     *
     * @param string $country
     * @return $this
     */
    public function country(string $country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Creative ad id
     *
     * @param string $creativeAdId
     * @return $this
     */
    public function creativeAdId(string $creativeAdId)
    {
        $this->creativeAdId = $creativeAdId;

        return $this;
    }

    /**
     * Creative id
     *
     * @param string $creativeId
     * @return $this
     */
    public function creativeId(string $creativeId)
    {
        $this->creativeId = $creativeId;

        return $this;
    }

    /**
     * Free form data set via the customData1 field in the analytics collector configuration
     *
     * @param string $customData1
     * @return $this
     */
    public function customData1(string $customData1)
    {
        $this->customData1 = $customData1;

        return $this;
    }

    /**
     * Free form data set via the customData2 field in the analytics collector configuration
     *
     * @param string $customData2
     * @return $this
     */
    public function customData2(string $customData2)
    {
        $this->customData2 = $customData2;

        return $this;
    }

    /**
     * Free form data set via the customData3 field in the analytics collector configuration
     *
     * @param string $customData3
     * @return $this
     */
    public function customData3(string $customData3)
    {
        $this->customData3 = $customData3;

        return $this;
    }

    /**
     * Free form data set via the customData4 field in the analytics collector configuration
     *
     * @param string $customData4
     * @return $this
     */
    public function customData4(string $customData4)
    {
        $this->customData4 = $customData4;

        return $this;
    }

    /**
     * Free form data set via the customData5 field in the analytics collector configuration
     *
     * @param string $customData5
     * @return $this
     */
    public function customData5(string $customData5)
    {
        $this->customData5 = $customData5;

        return $this;
    }

    /**
     * Free form data set via the customData6 field in the analytics collector configuration
     *
     * @param string $customData6
     * @return $this
     */
    public function customData6(string $customData6)
    {
        $this->customData6 = $customData6;

        return $this;
    }

    /**
     * Free form data set via the customData7 field in the analytics collector configuration
     *
     * @param string $customData7
     * @return $this
     */
    public function customData7(string $customData7)
    {
        $this->customData7 = $customData7;

        return $this;
    }

    /**
     * Free form data set via the customData8 field in the analytics collector configuration
     *
     * @param string $customData8
     * @return $this
     */
    public function customData8(string $customData8)
    {
        $this->customData8 = $customData8;

        return $this;
    }

    /**
     * Free form data set via the customData9 field in the analytics collector configuration
     *
     * @param string $customData9
     * @return $this
     */
    public function customData9(string $customData9)
    {
        $this->customData9 = $customData9;

        return $this;
    }

    /**
     * Free form data set via the customData10 field in the analytics collector configuration
     *
     * @param string $customData10
     * @return $this
     */
    public function customData10(string $customData10)
    {
        $this->customData10 = $customData10;

        return $this;
    }

    /**
     * Free form data set via the customData11 field in the analytics collector configuration
     *
     * @param string $customData11
     * @return $this
     */
    public function customData11(string $customData11)
    {
        $this->customData11 = $customData11;

        return $this;
    }

    /**
     * Free form data set via the customData12 field in the analytics collector configuration
     *
     * @param string $customData12
     * @return $this
     */
    public function customData12(string $customData12)
    {
        $this->customData12 = $customData12;

        return $this;
    }

    /**
     * Free form data set via the customData13 field in the analytics collector configuration
     *
     * @param string $customData13
     * @return $this
     */
    public function customData13(string $customData13)
    {
        $this->customData13 = $customData13;

        return $this;
    }

    /**
     * Free form data set via the customData14 field in the analytics collector configuration
     *
     * @param string $customData14
     * @return $this
     */
    public function customData14(string $customData14)
    {
        $this->customData14 = $customData14;

        return $this;
    }

    /**
     * Free form data set via the customData15 field in the analytics collector configuration
     *
     * @param string $customData15
     * @return $this
     */
    public function customData15(string $customData15)
    {
        $this->customData15 = $customData15;

        return $this;
    }

    /**
     * Free form data set via the customData16 field in the analytics collector configuration
     *
     * @param string $customData16
     * @return $this
     */
    public function customData16(string $customData16)
    {
        $this->customData16 = $customData16;

        return $this;
    }

    /**
     * Free form data set via the customData17 field in the analytics collector configuration
     *
     * @param string $customData17
     * @return $this
     */
    public function customData17(string $customData17)
    {
        $this->customData17 = $customData17;

        return $this;
    }

    /**
     * Free form data set via the customData18 field in the analytics collector configuration
     *
     * @param string $customData18
     * @return $this
     */
    public function customData18(string $customData18)
    {
        $this->customData18 = $customData18;

        return $this;
    }

    /**
     * Free form data set via the customData19 field in the analytics collector configuration
     *
     * @param string $customData19
     * @return $this
     */
    public function customData19(string $customData19)
    {
        $this->customData19 = $customData19;

        return $this;
    }

    /**
     * Free form data set via the customData20 field in the analytics collector configuration
     *
     * @param string $customData20
     * @return $this
     */
    public function customData20(string $customData20)
    {
        $this->customData20 = $customData20;

        return $this;
    }

    /**
     * Free form data set via the customData21 field in the analytics collector configuration
     *
     * @param string $customData21
     * @return $this
     */
    public function customData21(string $customData21)
    {
        $this->customData21 = $customData21;

        return $this;
    }

    /**
     * Free form data set via the customData22 field in the analytics collector configuration
     *
     * @param string $customData22
     * @return $this
     */
    public function customData22(string $customData22)
    {
        $this->customData22 = $customData22;

        return $this;
    }

    /**
     * Free form data set via the customData23 field in the analytics collector configuration
     *
     * @param string $customData23
     * @return $this
     */
    public function customData23(string $customData23)
    {
        $this->customData23 = $customData23;

        return $this;
    }

    /**
     * Free form data set via the customData24 field in the analytics collector configuration
     *
     * @param string $customData24
     * @return $this
     */
    public function customData24(string $customData24)
    {
        $this->customData24 = $customData24;

        return $this;
    }

    /**
     * Free form data set via the customData25 field in the analytics collector configuration
     *
     * @param string $customData25
     * @return $this
     */
    public function customData25(string $customData25)
    {
        $this->customData25 = $customData25;

        return $this;
    }

    /**
     * Custom user ID
     *
     * @param string $customUserId
     * @return $this
     */
    public function customUserId(string $customUserId)
    {
        $this->customUserId = $customUserId;

        return $this;
    }

    /**
     * Deal id
     *
     * @param string $dealId
     * @return $this
     */
    public function dealId(string $dealId)
    {
        $this->dealId = $dealId;

        return $this;
    }

    /**
     * Type of device (Desktop, Phone, Tablet)
     *
     * @param string $deviceClass
     * @return $this
     */
    public function deviceClass(string $deviceClass)
    {
        $this->deviceClass = $deviceClass;

        return $this;
    }

    /**
     * Type of the device detected via User Agent
     *
     * @param string $deviceType
     * @return $this
     */
    public function deviceType(string $deviceType)
    {
        $this->deviceType = $deviceType;

        return $this;
    }

    /**
     * Domain the player was loaded on (.www is stripped away)
     *
     * @param string $domain
     * @return $this
     */
    public function domain(string $domain)
    {
        $this->domain = $domain;

        return $this;
    }

    /**
     * Error code
     *
     * @param int $errorCode
     * @return $this
     */
    public function errorCode(int $errorCode)
    {
        $this->errorCode = $errorCode;

        return $this;
    }

    /**
     * Error data
     *
     * @param string $errorData
     * @return $this
     */
    public function errorData(string $errorData)
    {
        $this->errorData = $errorData;

        return $this;
    }

    /**
     * Error message
     *
     * @param string $errorMessage
     * @return $this
     */
    public function errorMessage(string $errorMessage)
    {
        $this->errorMessage = $errorMessage;

        return $this;
    }

    /**
     * Error percentage
     *
     * @param int $errorPercentage
     * @return $this
     */
    public function errorPercentage(int $errorPercentage)
    {
        $this->errorPercentage = $errorPercentage;

        return $this;
    }

    /**
     * Error position
     *
     * @param int $errorPosition
     * @return $this
     */
    public function errorPosition(int $errorPosition)
    {
        $this->errorPosition = $errorPosition;

        return $this;
    }

    /**
     * Exit position
     *
     * @param int $exitPosition
     * @return $this
     */
    public function exitPosition(int $exitPosition)
    {
        $this->exitPosition = $exitPosition;

        return $this;
    }

    /**
     * A/B test experiment name
     *
     * @param string $experimentName
     * @return $this
     */
    public function experimentName(string $experimentName)
    {
        $this->experimentName = $experimentName;

        return $this;
    }

    /**
     * IP Address of the client
     *
     * @param string $ipAddress
     * @return $this
     */
    public function ipAddress(string $ipAddress)
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    /**
     * The users Internet Service Provider inferred via the IP address
     *
     * @param string $isp
     * @return $this
     */
    public function isp(string $isp)
    {
        $this->isp = $isp;

        return $this;
    }

    /**
     * Language set in the browser
     *
     * @param string $language
     * @return $this
     */
    public function language(string $language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Analytics license key
     *
     * @param string $licenseKey
     * @return $this
     */
    public function licenseKey(string $licenseKey)
    {
        $this->licenseKey = $licenseKey;

        return $this;
    }

    /**
     * Manifest download time
     *
     * @param int $manifestDownloadTime
     * @return $this
     */
    public function manifestDownloadTime(int $manifestDownloadTime)
    {
        $this->manifestDownloadTime = $manifestDownloadTime;

        return $this;
    }

    /**
     * Media path
     *
     * @param string $mediaPath
     * @return $this
     */
    public function mediaPath(string $mediaPath)
    {
        $this->mediaPath = $mediaPath;

        return $this;
    }

    /**
     * Media server
     *
     * @param string $mediaServer
     * @return $this
     */
    public function mediaServer(string $mediaServer)
    {
        $this->mediaServer = $mediaServer;

        return $this;
    }

    /**
     * Media url
     *
     * @param string $mediaUrl
     * @return $this
     */
    public function mediaUrl(string $mediaUrl)
    {
        $this->mediaUrl = $mediaUrl;

        return $this;
    }

    /**
     * Midpoint
     *
     * @param int $midpoint
     * @return $this
     */
    public function midpoint(int $midpoint)
    {
        $this->midpoint = $midpoint;

        return $this;
    }

    /**
     * Minimum suggested duration
     *
     * @param int $minSuggestedDuration
     * @return $this
     */
    public function minSuggestedDuration(int $minSuggestedDuration)
    {
        $this->minSuggestedDuration = $minSuggestedDuration;

        return $this;
    }

    /**
     * Operating system
     *
     * @param string $operatingsystem
     * @return $this
     */
    public function operatingsystem(string $operatingsystem)
    {
        $this->operatingsystem = $operatingsystem;

        return $this;
    }

    /**
     * Operating system version major
     *
     * @param string $operatingsystemVersionMajor
     * @return $this
     */
    public function operatingsystemVersionMajor(string $operatingsystemVersionMajor)
    {
        $this->operatingsystemVersionMajor = $operatingsystemVersionMajor;

        return $this;
    }

    /**
     * Operating system version minor
     *
     * @param string $operatingsystemVersionMinor
     * @return $this
     */
    public function operatingsystemVersionMinor(string $operatingsystemVersionMinor)
    {
        $this->operatingsystemVersionMinor = $operatingsystemVersionMinor;

        return $this;
    }

    /**
     * Time in milliseconds the page took to load
     *
     * @param int $pageLoadTime
     * @return $this
     */
    public function pageLoadTime(int $pageLoadTime)
    {
        $this->pageLoadTime = $pageLoadTime;

        return $this;
    }

    /**
     * Player load type. 1 &#x3D; Foreground, 2 &#x3D; Background
     *
     * @param int $pageLoadType
     * @return $this
     */
    public function pageLoadType(int $pageLoadType)
    {
        $this->pageLoadType = $pageLoadType;

        return $this;
    }

    /**
     * path on the website
     *
     * @param string $path
     * @return $this
     */
    public function path(string $path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Percentage in viewport
     *
     * @param int $percentageInViewport
     * @return $this
     */
    public function percentageInViewport(int $percentageInViewport)
    {
        $this->percentageInViewport = $percentageInViewport;

        return $this;
    }

    /**
     * Platform the player is running on (web, android, ios)
     *
     * @param string $platform
     * @return $this
     */
    public function platform(string $platform)
    {
        $this->platform = $platform;

        return $this;
    }

    /**
     * Video player being used for this session
     *
     * @param string $player
     * @return $this
     */
    public function player(string $player)
    {
        $this->player = $player;

        return $this;
    }

    /**
     * Player license key
     *
     * @param string $playerKey
     * @return $this
     */
    public function playerKey(string $playerKey)
    {
        $this->playerKey = $playerKey;

        return $this;
    }

    /**
     * Time in milliseconds the player took to start up
     *
     * @param int $playerStartuptime
     * @return $this
     */
    public function playerStartuptime(int $playerStartuptime)
    {
        $this->playerStartuptime = $playerStartuptime;

        return $this;
    }

    /**
     * HTML or native playback
     *
     * @param string $playerTech
     * @return $this
     */
    public function playerTech(string $playerTech)
    {
        $this->playerTech = $playerTech;

        return $this;
    }

    /**
     * Player software version
     *
     * @param string $playerVersion
     * @return $this
     */
    public function playerVersion(string $playerVersion)
    {
        $this->playerVersion = $playerVersion;

        return $this;
    }

    /**
     * Play percentage
     *
     * @param int $playPercentage
     * @return $this
     */
    public function playPercentage(int $playPercentage)
    {
        $this->playPercentage = $playPercentage;

        return $this;
    }

    /**
     * Quartile 1
     *
     * @param int $quartile1
     * @return $this
     */
    public function quartile1(int $quartile1)
    {
        $this->quartile1 = $quartile1;

        return $this;
    }

    /**
     * Quartile 3
     *
     * @param int $quartile3
     * @return $this
     */
    public function quartile3(int $quartile3)
    {
        $this->quartile3 = $quartile3;

        return $this;
    }

    /**
     * Geographic region (ISO 3166-2 code)
     *
     * @param string $region
     * @return $this
     */
    public function region(string $region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Screen as reported by the browser
     *
     * @param int $screenHeight
     * @return $this
     */
    public function screenHeight(int $screenHeight)
    {
        $this->screenHeight = $screenHeight;

        return $this;
    }

    /**
     * Screen as reported by the browser
     *
     * @param int $screenWidth
     * @return $this
     */
    public function screenWidth(int $screenWidth)
    {
        $this->screenWidth = $screenWidth;

        return $this;
    }

    /**
     * Video size (FULLSCREEN or WINDOW)
     *
     * @param string $size
     * @return $this
     */
    public function size(string $size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Skip percentage
     *
     * @param int $skipPercentage
     * @return $this
     */
    public function skipPercentage(int $skipPercentage)
    {
        $this->skipPercentage = $skipPercentage;

        return $this;
    }

    /**
     * Skip position
     *
     * @param int $skipPosition
     * @return $this
     */
    public function skipPosition(int $skipPosition)
    {
        $this->skipPosition = $skipPosition;

        return $this;
    }

    /**
     * Skipped
     *
     * @param int $skipped
     * @return $this
     */
    public function skipped(int $skipped)
    {
        $this->skipped = $skipped;

        return $this;
    }

    /**
     * Started
     *
     * @param int $started
     * @return $this
     */
    public function started(int $started)
    {
        $this->started = $started;

        return $this;
    }

    /**
     * Format of the stream (HLS, DASH, Progressive MP4)
     *
     * @param string $streamFormat
     * @return $this
     */
    public function streamFormat(string $streamFormat)
    {
        $this->streamFormat = $streamFormat;

        return $this;
    }

    /**
     * Survey url
     *
     * @param string $surveyUrl
     * @return $this
     */
    public function surveyUrl(string $surveyUrl)
    {
        $this->surveyUrl = $surveyUrl;

        return $this;
    }

    /**
     * Current time in milliseconds
     *
     * @param int $time
     * @return $this
     */
    public function time(int $time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Time in viewport
     *
     * @param int $timeInViewport
     * @return $this
     */
    public function timeInViewport(int $timeInViewport)
    {
        $this->timeInViewport = $timeInViewport;

        return $this;
    }

    /**
     * Time played
     *
     * @param int $timePlayed
     * @return $this
     */
    public function timePlayed(int $timePlayed)
    {
        $this->timePlayed = $timePlayed;

        return $this;
    }

    /**
     * Universal ad id registry
     *
     * @param string $universalAdIdRegistry
     * @return $this
     */
    public function universalAdIdRegistry(string $universalAdIdRegistry)
    {
        $this->universalAdIdRegistry = $universalAdIdRegistry;

        return $this;
    }

    /**
     * Universal ad id value
     *
     * @param string $universalAdIdValue
     * @return $this
     */
    public function universalAdIdValue(string $universalAdIdValue)
    {
        $this->universalAdIdValue = $universalAdIdValue;

        return $this;
    }

    /**
     * ID that is persisted across sessions to identify a browser
     *
     * @param string $userId
     * @return $this
     */
    public function userId(string $userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Bitrate of the played back video rendition
     *
     * @param int $videoBitrate
     * @return $this
     */
    public function videoBitrate(int $videoBitrate)
    {
        $this->videoBitrate = $videoBitrate;

        return $this;
    }

    /**
     * ID of the video
     *
     * @param string $videoId
     * @return $this
     */
    public function videoId(string $videoId)
    {
        $this->videoId = $videoId;

        return $this;
    }

    /**
     * ID of related video impression
     *
     * @param string $videoImpressionId
     * @return $this
     */
    public function videoImpressionId(string $videoImpressionId)
    {
        $this->videoImpressionId = $videoImpressionId;

        return $this;
    }

    /**
     * Free form human readable video ad title
     *
     * @param string $videoTitle
     * @return $this
     */
    public function videoTitle(string $videoTitle)
    {
        $this->videoTitle = $videoTitle;

        return $this;
    }

    /**
     * Height of the video player on the page
     *
     * @param int $videoWindowHeight
     * @return $this
     */
    public function videoWindowHeight(int $videoWindowHeight)
    {
        $this->videoWindowHeight = $videoWindowHeight;

        return $this;
    }

    /**
     * Width of the video player on the page
     *
     * @param int $videoWindowWidth
     * @return $this
     */
    public function videoWindowWidth(int $videoWindowWidth)
    {
        $this->videoWindowWidth = $videoWindowWidth;

        return $this;
    }
}

