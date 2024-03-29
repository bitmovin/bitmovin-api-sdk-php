<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AnalyticsImpressionSample extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var int */
    public $ad;

    /** @var string */
    public $analyticsVersion;

    /** @var int */
    public $audioBitrate;

    /** @var string */
    public $audioCodec;

    /** @var string */
    public $audioLanguage;

    /** @var bool */
    public $autoplay;

    /** @var string */
    public $browser;

    /** @var string */
    public $browserVersionMajor;

    /** @var string */
    public $browserVersionMinor;

    /** @var int */
    public $buffered;

    /** @var string */
    public $cdnProvider;

    /** @var string */
    public $castTech;

    /** @var string */
    public $city;

    /** @var int */
    public $clientTime;

    /** @var string */
    public $country;

    /** @var string */
    public $customUserId;

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
    public $customData26;

    /** @var string */
    public $customData27;

    /** @var string */
    public $customData28;

    /** @var string */
    public $customData29;

    /** @var string */
    public $customData30;

    /** @var string */
    public $deviceClass;

    /** @var string */
    public $deviceType;

    /** @var string */
    public $domain;

    /** @var int */
    public $drmLoadTime;

    /** @var string */
    public $drmType;

    /** @var int */
    public $droppedFrames;

    /** @var int */
    public $duration;

    /** @var int */
    public $errorCode;

    /** @var string */
    public $errorMessage;

    /** @var string */
    public $experimentName;

    /** @var string */
    public $impressionId;

    /** @var string */
    public $ipAddress;

    /** @var bool */
    public $isCasting;

    /** @var bool */
    public $isLive;

    /** @var bool */
    public $isMuted;

    /** @var string */
    public $isp;

    /** @var string */
    public $language;

    /** @var string */
    public $licenseKey;

    /** @var string */
    public $m3u8Url;

    /** @var string */
    public $mpdUrl;

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
    public $paused;

    /** @var string */
    public $platform;

    /** @var int */
    public $played;

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

    /** @var string */
    public $progUrl;

    /** @var string */
    public $region;

    /** @var int */
    public $screenHeight;

    /** @var int */
    public $screenWidth;

    /** @var string */
    public $screenOrientation;

    /** @var int */
    public $seeked;

    /** @var int */
    public $segmentDownloadCount;

    /** @var int */
    public $segmentDownloadSize;

    /** @var int */
    public $segmentDownloadTime;

    /** @var int */
    public $sequenceNumber;

    /** @var string */
    public $size;

    /** @var int */
    public $startuptime;

    /** @var string */
    public $state;

    /** @var string */
    public $streamFormat;

    /** @var bool */
    public $subtitleEnabled;

    /** @var string */
    public $subtitleLanguage;

    /** @var string[] */
    public $supportedVideoCodes;

    /** @var int */
    public $time;

    /** @var string */
    public $userId;

    /** @var int */
    public $videoBitrate;

    /** @var string */
    public $videoCodec;

    /** @var int */
    public $videoDuration;

    /** @var string */
    public $videoId;

    /** @var string */
    public $videoTitle;

    /** @var int */
    public $videoPlaybackHeight;

    /** @var int */
    public $videoPlaybackWidth;

    /** @var int */
    public $videoStartuptime;

    /** @var int */
    public $videotimeEnd;

    /** @var int */
    public $videotimeStart;

    /** @var int */
    public $videoWindowHeight;

    /** @var int */
    public $videoWindowWidth;

    /** @var bool */
    public $videostartFailed;

    /** @var AnalyticsVideoStartFailedReason */
    public $videostartFailedReason;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->videostartFailedReason = ObjectMapper::map($this->videostartFailedReason, AnalyticsVideoStartFailedReason::class);
    }

    /**
     * Is an ad playing. 0 indicates no, 1 indicates yes
     *
     * @param int $ad
     * @return $this
     */
    public function ad(int $ad)
    {
        $this->ad = $ad;

        return $this;
    }

    /**
     * Collector version
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
     * Audio Bitrate
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
     * Audio codec of currently playing stream
     *
     * @param string $audioCodec
     * @return $this
     */
    public function audioCodec(string $audioCodec)
    {
        $this->audioCodec = $audioCodec;

        return $this;
    }

    /**
     * Selected audio language
     *
     * @param string $audioLanguage
     * @return $this
     */
    public function audioLanguage(string $audioLanguage)
    {
        $this->audioLanguage = $audioLanguage;

        return $this;
    }

    /**
     * Autoplay enabled
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
     * Milliseconds the player buffered
     *
     * @param int $buffered
     * @return $this
     */
    public function buffered(int $buffered)
    {
        $this->buffered = $buffered;

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
     * Casting Technology
     *
     * @param string $castTech
     * @return $this
     */
    public function castTech(string $castTech)
    {
        $this->castTech = $castTech;

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
     * Free form data set via the customData26 field in the analytics collector configuration
     *
     * @param string $customData26
     * @return $this
     */
    public function customData26(string $customData26)
    {
        $this->customData26 = $customData26;

        return $this;
    }

    /**
     * Free form data set via the customData27 field in the analytics collector configuration
     *
     * @param string $customData27
     * @return $this
     */
    public function customData27(string $customData27)
    {
        $this->customData27 = $customData27;

        return $this;
    }

    /**
     * Free form data set via the customData28 field in the analytics collector configuration
     *
     * @param string $customData28
     * @return $this
     */
    public function customData28(string $customData28)
    {
        $this->customData28 = $customData28;

        return $this;
    }

    /**
     * Free form data set via the customData29 field in the analytics collector configuration
     *
     * @param string $customData29
     * @return $this
     */
    public function customData29(string $customData29)
    {
        $this->customData29 = $customData29;

        return $this;
    }

    /**
     * Free form data set via the customData30 field in the analytics collector configuration
     *
     * @param string $customData30
     * @return $this
     */
    public function customData30(string $customData30)
    {
        $this->customData30 = $customData30;

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
     * Time in milliseconds it took the DRM server to respond
     *
     * @param int $drmLoadTime
     * @return $this
     */
    public function drmLoadTime(int $drmLoadTime)
    {
        $this->drmLoadTime = $drmLoadTime;

        return $this;
    }

    /**
     * DRM system used for this impression
     *
     * @param string $drmType
     * @return $this
     */
    public function drmType(string $drmType)
    {
        $this->drmType = $drmType;

        return $this;
    }

    /**
     * Dropped frames during playback
     *
     * @param int $droppedFrames
     * @return $this
     */
    public function droppedFrames(int $droppedFrames)
    {
        $this->droppedFrames = $droppedFrames;

        return $this;
    }

    /**
     * Duration of the sample in milliseconds
     *
     * @param int $duration
     * @return $this
     */
    public function duration(int $duration)
    {
        $this->duration = $duration;

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
     * Random UUID that is used to identify a session (required)
     *
     * @param string $impressionId
     * @return $this
     */
    public function impressionId(string $impressionId)
    {
        $this->impressionId = $impressionId;

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
     * Is chromecast active
     *
     * @param bool $isCasting
     * @return $this
     */
    public function isCasting(bool $isCasting)
    {
        $this->isCasting = $isCasting;

        return $this;
    }

    /**
     * Is the stream live or VoD
     *
     * @param bool $isLive
     * @return $this
     */
    public function isLive(bool $isLive)
    {
        $this->isLive = $isLive;

        return $this;
    }

    /**
     * Is the player muted
     *
     * @param bool $isMuted
     * @return $this
     */
    public function isMuted(bool $isMuted)
    {
        $this->isMuted = $isMuted;

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
     * URL of the HLS source
     *
     * @param string $m3u8Url
     * @return $this
     */
    public function m3u8Url(string $m3u8Url)
    {
        $this->m3u8Url = $m3u8Url;

        return $this;
    }

    /**
     * URL of the DASH source
     *
     * @param string $mpdUrl
     * @return $this
     */
    public function mpdUrl(string $mpdUrl)
    {
        $this->mpdUrl = $mpdUrl;

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
     * Milliseconds the player was paused
     *
     * @param int $paused
     * @return $this
     */
    public function paused(int $paused)
    {
        $this->paused = $paused;

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
     * Milliseconds the player played
     *
     * @param int $played
     * @return $this
     */
    public function played(int $played)
    {
        $this->played = $played;

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
     * URL of the progressive MP4 source
     *
     * @param string $progUrl
     * @return $this
     */
    public function progUrl(string $progUrl)
    {
        $this->progUrl = $progUrl;

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
     * Screen orientation (PORTRAIT, LANDSCAPE OR UNKNOWN)
     *
     * @param string $screenOrientation
     * @return $this
     */
    public function screenOrientation(string $screenOrientation)
    {
        $this->screenOrientation = $screenOrientation;

        return $this;
    }

    /**
     * Milliseconds it took the player to seek
     *
     * @param int $seeked
     * @return $this
     */
    public function seeked(int $seeked)
    {
        $this->seeked = $seeked;

        return $this;
    }

    /**
     * Number of video segments downloaded
     *
     * @param int $segmentDownloadCount
     * @return $this
     */
    public function segmentDownloadCount(int $segmentDownloadCount)
    {
        $this->segmentDownloadCount = $segmentDownloadCount;

        return $this;
    }

    /**
     * Size of downloaded video segments (byte)
     *
     * @param int $segmentDownloadSize
     * @return $this
     */
    public function segmentDownloadSize(int $segmentDownloadSize)
    {
        $this->segmentDownloadSize = $segmentDownloadSize;

        return $this;
    }

    /**
     * Cumulative time needed to download video segments
     *
     * @param int $segmentDownloadTime
     * @return $this
     */
    public function segmentDownloadTime(int $segmentDownloadTime)
    {
        $this->segmentDownloadTime = $segmentDownloadTime;

        return $this;
    }

    /**
     * Sequence number of the sample in which it occurred in the session
     *
     * @param int $sequenceNumber
     * @return $this
     */
    public function sequenceNumber(int $sequenceNumber)
    {
        $this->sequenceNumber = $sequenceNumber;

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
     * Combination of player- and videoStartuptime
     *
     * @param int $startuptime
     * @return $this
     */
    public function startuptime(int $startuptime)
    {
        $this->startuptime = $startuptime;

        return $this;
    }

    /**
     * Internal state of the analytics state machine
     *
     * @param string $state
     * @return $this
     */
    public function state(string $state)
    {
        $this->state = $state;

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
     * Subtitle enabled
     *
     * @param bool $subtitleEnabled
     * @return $this
     */
    public function subtitleEnabled(bool $subtitleEnabled)
    {
        $this->subtitleEnabled = $subtitleEnabled;

        return $this;
    }

    /**
     * Selected subtitle language
     *
     * @param string $subtitleLanguage
     * @return $this
     */
    public function subtitleLanguage(string $subtitleLanguage)
    {
        $this->subtitleLanguage = $subtitleLanguage;

        return $this;
    }

    /**
     * Video codecs supported by platform/browser
     *
     * @param string[] $supportedVideoCodes
     * @return $this
     */
    public function supportedVideoCodes(array $supportedVideoCodes)
    {
        $this->supportedVideoCodes = $supportedVideoCodes;

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
     * Video codec of current stream
     *
     * @param string $videoCodec
     * @return $this
     */
    public function videoCodec(string $videoCodec)
    {
        $this->videoCodec = $videoCodec;

        return $this;
    }

    /**
     * Length of the video in milliseconds
     *
     * @param int $videoDuration
     * @return $this
     */
    public function videoDuration(int $videoDuration)
    {
        $this->videoDuration = $videoDuration;

        return $this;
    }

    /**
     * ID of the video as configured via the analytics config
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
     * Free form human readable video title as configured in the analytics config
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
     * Resolution of the played back Video Rendition
     *
     * @param int $videoPlaybackHeight
     * @return $this
     */
    public function videoPlaybackHeight(int $videoPlaybackHeight)
    {
        $this->videoPlaybackHeight = $videoPlaybackHeight;

        return $this;
    }

    /**
     * Resolution of the played back Video Rendition
     *
     * @param int $videoPlaybackWidth
     * @return $this
     */
    public function videoPlaybackWidth(int $videoPlaybackWidth)
    {
        $this->videoPlaybackWidth = $videoPlaybackWidth;

        return $this;
    }

    /**
     * Time in milliseconds it took to start video playback
     *
     * @param int $videoStartuptime
     * @return $this
     */
    public function videoStartuptime(int $videoStartuptime)
    {
        $this->videoStartuptime = $videoStartuptime;

        return $this;
    }

    /**
     * End time of the sample in the video (milliseconds)
     *
     * @param int $videotimeEnd
     * @return $this
     */
    public function videotimeEnd(int $videotimeEnd)
    {
        $this->videotimeEnd = $videotimeEnd;

        return $this;
    }

    /**
     * Start time of the sample in the video (milliseconds)
     *
     * @param int $videotimeStart
     * @return $this
     */
    public function videotimeStart(int $videotimeStart)
    {
        $this->videotimeStart = $videotimeStart;

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

    /**
     * True if starting the video failed
     *
     * @param bool $videostartFailed
     * @return $this
     */
    public function videostartFailed(bool $videostartFailed)
    {
        $this->videostartFailed = $videostartFailed;

        return $this;
    }

    /**
     * Reason why starting the video failed
     *
     * @param AnalyticsVideoStartFailedReason $videostartFailedReason
     * @return $this
     */
    public function videostartFailedReason(AnalyticsVideoStartFailedReason $videostartFailedReason)
    {
        $this->videostartFailedReason = $videostartFailedReason;

        return $this;
    }
}

