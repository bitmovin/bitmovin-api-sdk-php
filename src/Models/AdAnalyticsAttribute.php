<?php

namespace BitmovinApiSdk\Models;

class AdAnalyticsAttribute extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const AD_IMPRESSION_ID = 'AD_IMPRESSION_ID';

    /** @var string */
    private const AD_CLICKTHROUGH_URL = 'AD_CLICKTHROUGH_URL';

    /** @var string */
    private const AD_DESCRIPTION = 'AD_DESCRIPTION';

    /** @var string */
    private const AD_DURATION = 'AD_DURATION';

    /** @var string */
    private const AD_FALLBACK_INDEX = 'AD_FALLBACK_INDEX';

    /** @var string */
    private const AD_ID = 'AD_ID';

    /** @var string */
    private const AD_ID_PLAYER = 'AD_ID_PLAYER';

    /** @var string */
    private const AD_IS_PERSISTENT = 'AD_IS_PERSISTENT';

    /** @var string */
    private const AD_MODULE = 'AD_MODULE';

    /** @var string */
    private const AD_OFFSET = 'AD_OFFSET';

    /** @var string */
    private const AD_PLAYBACK_HEIGHT = 'AD_PLAYBACK_HEIGHT';

    /** @var string */
    private const AD_PLAYBACK_WIDTH = 'AD_PLAYBACK_WIDTH';

    /** @var string */
    private const AD_POD_POSITION = 'AD_POD_POSITION';

    /** @var string */
    private const AD_POSITION = 'AD_POSITION';

    /** @var string */
    private const AD_PRELOAD_OFFSET = 'AD_PRELOAD_OFFSET';

    /** @var string */
    private const AD_REPLACE_CONTENT_DURATION = 'AD_REPLACE_CONTENT_DURATION';

    /** @var string */
    private const AD_SCHEDULE_TIME = 'AD_SCHEDULE_TIME';

    /** @var string */
    private const AD_SKIP_AFTER = 'AD_SKIP_AFTER';

    /** @var string */
    private const AD_SKIPPABLE = 'AD_SKIPPABLE';

    /** @var string */
    private const AD_STARTUP_TIME = 'AD_STARTUP_TIME';

    /** @var string */
    private const AD_SYSTEM = 'AD_SYSTEM';

    /** @var string */
    private const AD_TAG_PATH = 'AD_TAG_PATH';

    /** @var string */
    private const AD_TAG_SERVER = 'AD_TAG_SERVER';

    /** @var string */
    private const AD_TAG_TYPE = 'AD_TAG_TYPE';

    /** @var string */
    private const AD_TAG_URL = 'AD_TAG_URL';

    /** @var string */
    private const AD_TITLE = 'AD_TITLE';

    /** @var string */
    private const AD_WRAPPER_ADS_COUNT = 'AD_WRAPPER_ADS_COUNT';

    /** @var string */
    private const ADVERTISER_NAME = 'ADVERTISER_NAME';

    /** @var string */
    private const ANALYTICS_VERSION = 'ANALYTICS_VERSION';

    /** @var string */
    private const API_FRAMEWORK = 'API_FRAMEWORK';

    /** @var string */
    private const AUDIO_BITRATE = 'AUDIO_BITRATE';

    /** @var string */
    private const AUDIO_CODEC = 'AUDIO_CODEC';

    /** @var string */
    private const AUTOPLAY = 'AUTOPLAY';

    /** @var string */
    private const BROWSER = 'BROWSER';

    /** @var string */
    private const BROWSER_VERSION_MAJOR = 'BROWSER_VERSION_MAJOR';

    /** @var string */
    private const CDN_PROVIDER = 'CDN_PROVIDER';

    /** @var string */
    private const CITY = 'CITY';

    /** @var string */
    private const CLICK_PERCENTAGE = 'CLICK_PERCENTAGE';

    /** @var string */
    private const CLICK_POSITION = 'CLICK_POSITION';

    /** @var string */
    private const CLICKED = 'CLICKED';

    /** @var string */
    private const CLIENT_TIME = 'CLIENT_TIME';

    /** @var string */
    private const CLOSE_PERCENTAGE = 'CLOSE_PERCENTAGE';

    /** @var string */
    private const CLOSE_POSITION = 'CLOSE_POSITION';

    /** @var string */
    private const CLOSED = 'CLOSED';

    /** @var string */
    private const COMPLETED = 'COMPLETED';

    /** @var string */
    private const COUNTRY = 'COUNTRY';

    /** @var string */
    private const CREATIVE_AD_ID = 'CREATIVE_AD_ID';

    /** @var string */
    private const CREATIVE_ID = 'CREATIVE_ID';

    /** @var string */
    private const CUSTOM_DATA_1 = 'CUSTOM_DATA_1';

    /** @var string */
    private const CUSTOM_DATA_2 = 'CUSTOM_DATA_2';

    /** @var string */
    private const CUSTOM_DATA_3 = 'CUSTOM_DATA_3';

    /** @var string */
    private const CUSTOM_DATA_4 = 'CUSTOM_DATA_4';

    /** @var string */
    private const CUSTOM_DATA_5 = 'CUSTOM_DATA_5';

    /** @var string */
    private const CUSTOM_DATA_6 = 'CUSTOM_DATA_6';

    /** @var string */
    private const CUSTOM_DATA_7 = 'CUSTOM_DATA_7';

    /** @var string */
    private const CUSTOM_DATA_8 = 'CUSTOM_DATA_8';

    /** @var string */
    private const CUSTOM_DATA_9 = 'CUSTOM_DATA_9';

    /** @var string */
    private const CUSTOM_DATA_10 = 'CUSTOM_DATA_10';

    /** @var string */
    private const CUSTOM_DATA_11 = 'CUSTOM_DATA_11';

    /** @var string */
    private const CUSTOM_DATA_12 = 'CUSTOM_DATA_12';

    /** @var string */
    private const CUSTOM_DATA_13 = 'CUSTOM_DATA_13';

    /** @var string */
    private const CUSTOM_DATA_14 = 'CUSTOM_DATA_14';

    /** @var string */
    private const CUSTOM_DATA_15 = 'CUSTOM_DATA_15';

    /** @var string */
    private const CUSTOM_DATA_16 = 'CUSTOM_DATA_16';

    /** @var string */
    private const CUSTOM_DATA_17 = 'CUSTOM_DATA_17';

    /** @var string */
    private const CUSTOM_DATA_18 = 'CUSTOM_DATA_18';

    /** @var string */
    private const CUSTOM_DATA_19 = 'CUSTOM_DATA_19';

    /** @var string */
    private const CUSTOM_DATA_20 = 'CUSTOM_DATA_20';

    /** @var string */
    private const CUSTOM_DATA_21 = 'CUSTOM_DATA_21';

    /** @var string */
    private const CUSTOM_DATA_22 = 'CUSTOM_DATA_22';

    /** @var string */
    private const CUSTOM_DATA_23 = 'CUSTOM_DATA_23';

    /** @var string */
    private const CUSTOM_DATA_24 = 'CUSTOM_DATA_24';

    /** @var string */
    private const CUSTOM_DATA_25 = 'CUSTOM_DATA_25';

    /** @var string */
    private const CUSTOM_USER_ID = 'CUSTOM_USER_ID';

    /** @var string */
    private const DAY = 'DAY';

    /** @var string */
    private const DEAL_ID = 'DEAL_ID';

    /** @var string */
    private const DEVICE_CLASS = 'DEVICE_CLASS';

    /** @var string */
    private const DEVICE_TYPE = 'DEVICE_TYPE';

    /** @var string */
    private const DOMAIN = 'DOMAIN';

    /** @var string */
    private const ERROR_CODE = 'ERROR_CODE';

    /** @var string */
    private const ERROR_PERCENTAGE = 'ERROR_PERCENTAGE';

    /** @var string */
    private const ERROR_POSITION = 'ERROR_POSITION';

    /** @var string */
    private const EXIT_POSITION = 'EXIT_POSITION';

    /** @var string */
    private const EXPERIMENT_NAME = 'EXPERIMENT_NAME';

    /** @var string */
    private const HOUR = 'HOUR';

    /** @var string */
    private const IP_ADDRESS = 'IP_ADDRESS';

    /** @var string */
    private const IS_LINEAR = 'IS_LINEAR';

    /** @var string */
    private const ISP = 'ISP';

    /** @var string */
    private const LANGUAGE = 'LANGUAGE';

    /** @var string */
    private const LICENSE_KEY = 'LICENSE_KEY';

    /** @var string */
    private const MANIFEST_DOWNLOAD_TIME = 'MANIFEST_DOWNLOAD_TIME';

    /** @var string */
    private const MEDIA_PATH = 'MEDIA_PATH';

    /** @var string */
    private const MEDIA_SERVER = 'MEDIA_SERVER';

    /** @var string */
    private const MEDIA_URL = 'MEDIA_URL';

    /** @var string */
    private const MIDPOINT = 'MIDPOINT';

    /** @var string */
    private const MIN_SUGGESTED_DURATION = 'MIN_SUGGESTED_DURATION';

    /** @var string */
    private const MINUTE = 'MINUTE';

    /** @var string */
    private const MONTH = 'MONTH';

    /** @var string */
    private const OPERATINGSYSTEM = 'OPERATINGSYSTEM';

    /** @var string */
    private const OPERATINGSYSTEM_VERSION_MAJOR = 'OPERATINGSYSTEM_VERSION_MAJOR';

    /** @var string */
    private const PAGE_LOAD_TIME = 'PAGE_LOAD_TIME';

    /** @var string */
    private const PAGE_LOAD_TYPE = 'PAGE_LOAD_TYPE';

    /** @var string */
    private const PATH = 'PATH';

    /** @var string */
    private const PERCENTAGE_IN_VIEWPORT = 'PERCENTAGE_IN_VIEWPORT';

    /** @var string */
    private const PLATFORM = 'PLATFORM';

    /** @var string */
    private const PLAY_PERCENTAGE = 'PLAY_PERCENTAGE';

    /** @var string */
    private const PLAYER = 'PLAYER';

    /** @var string */
    private const PLAYER_KEY = 'PLAYER_KEY';

    /** @var string */
    private const PLAYER_STARTUPTIME = 'PLAYER_STARTUPTIME';

    /** @var string */
    private const PLAYER_TECH = 'PLAYER_TECH';

    /** @var string */
    private const PLAYER_VERSION = 'PLAYER_VERSION';

    /** @var string */
    private const QUARTILE_1 = 'QUARTILE_1';

    /** @var string */
    private const QUARTILE_3 = 'QUARTILE_3';

    /** @var string */
    private const REGION = 'REGION';

    /** @var string */
    private const SCALE_FACTOR = 'SCALE_FACTOR';

    /** @var string */
    private const SCREEN_HEIGHT = 'SCREEN_HEIGHT';

    /** @var string */
    private const SCREEN_WIDTH = 'SCREEN_WIDTH';

    /** @var string */
    private const SIZE = 'SIZE';

    /** @var string */
    private const SKIP_PERCENTAGE = 'SKIP_PERCENTAGE';

    /** @var string */
    private const SKIP_POSITION = 'SKIP_POSITION';

    /** @var string */
    private const SKIPPED = 'SKIPPED';

    /** @var string */
    private const STARTED = 'STARTED';

    /** @var string */
    private const STREAM_FORMAT = 'STREAM_FORMAT';

    /** @var string */
    private const SURVEY_URL = 'SURVEY_URL';

    /** @var string */
    private const TIME = 'TIME';

    /** @var string */
    private const TIME_IN_VIEWPORT = 'TIME_IN_VIEWPORT';

    /** @var string */
    private const TIME_PLAYED = 'TIME_PLAYED';

    /** @var string */
    private const UNIVERSAL_AD_ID_REGISTRY = 'UNIVERSAL_AD_ID_REGISTRY';

    /** @var string */
    private const UNIVERSAL_AD_ID_VALUE = 'UNIVERSAL_AD_ID_VALUE';

    /** @var string */
    private const USER_ID = 'USER_ID';

    /** @var string */
    private const VIDEO_BITRATE = 'VIDEO_BITRATE';

    /** @var string */
    private const VIDEO_CODEC = 'VIDEO_CODEC';

    /** @var string */
    private const VIDEO_ID = 'VIDEO_ID';

    /** @var string */
    private const VIDEO_IMPRESSION_ID = 'VIDEO_IMPRESSION_ID';

    /** @var string */
    private const VIDEO_TITLE = 'VIDEO_TITLE';

    /** @var string */
    private const VIDEO_WINDOW_HEIGHT = 'VIDEO_WINDOW_HEIGHT';

    /** @var string */
    private const VIDEO_WINDOW_WIDTH = 'VIDEO_WINDOW_WIDTH';

    /**
     * @param string $value
     * @return AdAnalyticsAttribute
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * AD_IMPRESSION_ID
     *
     * @return AdAnalyticsAttribute
     */
    public static function AD_IMPRESSION_ID()
    {
        return new AdAnalyticsAttribute(self::AD_IMPRESSION_ID);
    }

    /**
     * AD_CLICKTHROUGH_URL
     *
     * @return AdAnalyticsAttribute
     */
    public static function AD_CLICKTHROUGH_URL()
    {
        return new AdAnalyticsAttribute(self::AD_CLICKTHROUGH_URL);
    }

    /**
     * AD_DESCRIPTION
     *
     * @return AdAnalyticsAttribute
     */
    public static function AD_DESCRIPTION()
    {
        return new AdAnalyticsAttribute(self::AD_DESCRIPTION);
    }

    /**
     * AD_DURATION
     *
     * @return AdAnalyticsAttribute
     */
    public static function AD_DURATION()
    {
        return new AdAnalyticsAttribute(self::AD_DURATION);
    }

    /**
     * AD_FALLBACK_INDEX
     *
     * @return AdAnalyticsAttribute
     */
    public static function AD_FALLBACK_INDEX()
    {
        return new AdAnalyticsAttribute(self::AD_FALLBACK_INDEX);
    }

    /**
     * AD_ID
     *
     * @return AdAnalyticsAttribute
     */
    public static function AD_ID()
    {
        return new AdAnalyticsAttribute(self::AD_ID);
    }

    /**
     * AD_ID_PLAYER
     *
     * @return AdAnalyticsAttribute
     */
    public static function AD_ID_PLAYER()
    {
        return new AdAnalyticsAttribute(self::AD_ID_PLAYER);
    }

    /**
     * AD_IS_PERSISTENT
     *
     * @return AdAnalyticsAttribute
     */
    public static function AD_IS_PERSISTENT()
    {
        return new AdAnalyticsAttribute(self::AD_IS_PERSISTENT);
    }

    /**
     * AD_MODULE
     *
     * @return AdAnalyticsAttribute
     */
    public static function AD_MODULE()
    {
        return new AdAnalyticsAttribute(self::AD_MODULE);
    }

    /**
     * AD_OFFSET
     *
     * @return AdAnalyticsAttribute
     */
    public static function AD_OFFSET()
    {
        return new AdAnalyticsAttribute(self::AD_OFFSET);
    }

    /**
     * AD_PLAYBACK_HEIGHT
     *
     * @return AdAnalyticsAttribute
     */
    public static function AD_PLAYBACK_HEIGHT()
    {
        return new AdAnalyticsAttribute(self::AD_PLAYBACK_HEIGHT);
    }

    /**
     * AD_PLAYBACK_WIDTH
     *
     * @return AdAnalyticsAttribute
     */
    public static function AD_PLAYBACK_WIDTH()
    {
        return new AdAnalyticsAttribute(self::AD_PLAYBACK_WIDTH);
    }

    /**
     * AD_POD_POSITION
     *
     * @return AdAnalyticsAttribute
     */
    public static function AD_POD_POSITION()
    {
        return new AdAnalyticsAttribute(self::AD_POD_POSITION);
    }

    /**
     * AD_POSITION
     *
     * @return AdAnalyticsAttribute
     */
    public static function AD_POSITION()
    {
        return new AdAnalyticsAttribute(self::AD_POSITION);
    }

    /**
     * AD_PRELOAD_OFFSET
     *
     * @return AdAnalyticsAttribute
     */
    public static function AD_PRELOAD_OFFSET()
    {
        return new AdAnalyticsAttribute(self::AD_PRELOAD_OFFSET);
    }

    /**
     * AD_REPLACE_CONTENT_DURATION
     *
     * @return AdAnalyticsAttribute
     */
    public static function AD_REPLACE_CONTENT_DURATION()
    {
        return new AdAnalyticsAttribute(self::AD_REPLACE_CONTENT_DURATION);
    }

    /**
     * AD_SCHEDULE_TIME
     *
     * @return AdAnalyticsAttribute
     */
    public static function AD_SCHEDULE_TIME()
    {
        return new AdAnalyticsAttribute(self::AD_SCHEDULE_TIME);
    }

    /**
     * AD_SKIP_AFTER
     *
     * @return AdAnalyticsAttribute
     */
    public static function AD_SKIP_AFTER()
    {
        return new AdAnalyticsAttribute(self::AD_SKIP_AFTER);
    }

    /**
     * AD_SKIPPABLE
     *
     * @return AdAnalyticsAttribute
     */
    public static function AD_SKIPPABLE()
    {
        return new AdAnalyticsAttribute(self::AD_SKIPPABLE);
    }

    /**
     * AD_STARTUP_TIME
     *
     * @return AdAnalyticsAttribute
     */
    public static function AD_STARTUP_TIME()
    {
        return new AdAnalyticsAttribute(self::AD_STARTUP_TIME);
    }

    /**
     * AD_SYSTEM
     *
     * @return AdAnalyticsAttribute
     */
    public static function AD_SYSTEM()
    {
        return new AdAnalyticsAttribute(self::AD_SYSTEM);
    }

    /**
     * AD_TAG_PATH
     *
     * @return AdAnalyticsAttribute
     */
    public static function AD_TAG_PATH()
    {
        return new AdAnalyticsAttribute(self::AD_TAG_PATH);
    }

    /**
     * AD_TAG_SERVER
     *
     * @return AdAnalyticsAttribute
     */
    public static function AD_TAG_SERVER()
    {
        return new AdAnalyticsAttribute(self::AD_TAG_SERVER);
    }

    /**
     * AD_TAG_TYPE
     *
     * @return AdAnalyticsAttribute
     */
    public static function AD_TAG_TYPE()
    {
        return new AdAnalyticsAttribute(self::AD_TAG_TYPE);
    }

    /**
     * AD_TAG_URL
     *
     * @return AdAnalyticsAttribute
     */
    public static function AD_TAG_URL()
    {
        return new AdAnalyticsAttribute(self::AD_TAG_URL);
    }

    /**
     * AD_TITLE
     *
     * @return AdAnalyticsAttribute
     */
    public static function AD_TITLE()
    {
        return new AdAnalyticsAttribute(self::AD_TITLE);
    }

    /**
     * AD_WRAPPER_ADS_COUNT
     *
     * @return AdAnalyticsAttribute
     */
    public static function AD_WRAPPER_ADS_COUNT()
    {
        return new AdAnalyticsAttribute(self::AD_WRAPPER_ADS_COUNT);
    }

    /**
     * ADVERTISER_NAME
     *
     * @return AdAnalyticsAttribute
     */
    public static function ADVERTISER_NAME()
    {
        return new AdAnalyticsAttribute(self::ADVERTISER_NAME);
    }

    /**
     * ANALYTICS_VERSION
     *
     * @return AdAnalyticsAttribute
     */
    public static function ANALYTICS_VERSION()
    {
        return new AdAnalyticsAttribute(self::ANALYTICS_VERSION);
    }

    /**
     * API_FRAMEWORK
     *
     * @return AdAnalyticsAttribute
     */
    public static function API_FRAMEWORK()
    {
        return new AdAnalyticsAttribute(self::API_FRAMEWORK);
    }

    /**
     * AUDIO_BITRATE
     *
     * @return AdAnalyticsAttribute
     */
    public static function AUDIO_BITRATE()
    {
        return new AdAnalyticsAttribute(self::AUDIO_BITRATE);
    }

    /**
     * AUDIO_CODEC
     *
     * @return AdAnalyticsAttribute
     */
    public static function AUDIO_CODEC()
    {
        return new AdAnalyticsAttribute(self::AUDIO_CODEC);
    }

    /**
     * AUTOPLAY
     *
     * @return AdAnalyticsAttribute
     */
    public static function AUTOPLAY()
    {
        return new AdAnalyticsAttribute(self::AUTOPLAY);
    }

    /**
     * BROWSER
     *
     * @return AdAnalyticsAttribute
     */
    public static function BROWSER()
    {
        return new AdAnalyticsAttribute(self::BROWSER);
    }

    /**
     * BROWSER_VERSION_MAJOR
     *
     * @return AdAnalyticsAttribute
     */
    public static function BROWSER_VERSION_MAJOR()
    {
        return new AdAnalyticsAttribute(self::BROWSER_VERSION_MAJOR);
    }

    /**
     * CDN_PROVIDER
     *
     * @return AdAnalyticsAttribute
     */
    public static function CDN_PROVIDER()
    {
        return new AdAnalyticsAttribute(self::CDN_PROVIDER);
    }

    /**
     * CITY
     *
     * @return AdAnalyticsAttribute
     */
    public static function CITY()
    {
        return new AdAnalyticsAttribute(self::CITY);
    }

    /**
     * CLICK_PERCENTAGE
     *
     * @return AdAnalyticsAttribute
     */
    public static function CLICK_PERCENTAGE()
    {
        return new AdAnalyticsAttribute(self::CLICK_PERCENTAGE);
    }

    /**
     * CLICK_POSITION
     *
     * @return AdAnalyticsAttribute
     */
    public static function CLICK_POSITION()
    {
        return new AdAnalyticsAttribute(self::CLICK_POSITION);
    }

    /**
     * CLICKED
     *
     * @return AdAnalyticsAttribute
     */
    public static function CLICKED()
    {
        return new AdAnalyticsAttribute(self::CLICKED);
    }

    /**
     * CLIENT_TIME
     *
     * @return AdAnalyticsAttribute
     */
    public static function CLIENT_TIME()
    {
        return new AdAnalyticsAttribute(self::CLIENT_TIME);
    }

    /**
     * CLOSE_PERCENTAGE
     *
     * @return AdAnalyticsAttribute
     */
    public static function CLOSE_PERCENTAGE()
    {
        return new AdAnalyticsAttribute(self::CLOSE_PERCENTAGE);
    }

    /**
     * CLOSE_POSITION
     *
     * @return AdAnalyticsAttribute
     */
    public static function CLOSE_POSITION()
    {
        return new AdAnalyticsAttribute(self::CLOSE_POSITION);
    }

    /**
     * CLOSED
     *
     * @return AdAnalyticsAttribute
     */
    public static function CLOSED()
    {
        return new AdAnalyticsAttribute(self::CLOSED);
    }

    /**
     * COMPLETED
     *
     * @return AdAnalyticsAttribute
     */
    public static function COMPLETED()
    {
        return new AdAnalyticsAttribute(self::COMPLETED);
    }

    /**
     * COUNTRY
     *
     * @return AdAnalyticsAttribute
     */
    public static function COUNTRY()
    {
        return new AdAnalyticsAttribute(self::COUNTRY);
    }

    /**
     * CREATIVE_AD_ID
     *
     * @return AdAnalyticsAttribute
     */
    public static function CREATIVE_AD_ID()
    {
        return new AdAnalyticsAttribute(self::CREATIVE_AD_ID);
    }

    /**
     * CREATIVE_ID
     *
     * @return AdAnalyticsAttribute
     */
    public static function CREATIVE_ID()
    {
        return new AdAnalyticsAttribute(self::CREATIVE_ID);
    }

    /**
     * CUSTOM_DATA_1
     *
     * @return AdAnalyticsAttribute
     */
    public static function CUSTOM_DATA_1()
    {
        return new AdAnalyticsAttribute(self::CUSTOM_DATA_1);
    }

    /**
     * CUSTOM_DATA_2
     *
     * @return AdAnalyticsAttribute
     */
    public static function CUSTOM_DATA_2()
    {
        return new AdAnalyticsAttribute(self::CUSTOM_DATA_2);
    }

    /**
     * CUSTOM_DATA_3
     *
     * @return AdAnalyticsAttribute
     */
    public static function CUSTOM_DATA_3()
    {
        return new AdAnalyticsAttribute(self::CUSTOM_DATA_3);
    }

    /**
     * CUSTOM_DATA_4
     *
     * @return AdAnalyticsAttribute
     */
    public static function CUSTOM_DATA_4()
    {
        return new AdAnalyticsAttribute(self::CUSTOM_DATA_4);
    }

    /**
     * CUSTOM_DATA_5
     *
     * @return AdAnalyticsAttribute
     */
    public static function CUSTOM_DATA_5()
    {
        return new AdAnalyticsAttribute(self::CUSTOM_DATA_5);
    }

    /**
     * CUSTOM_DATA_6
     *
     * @return AdAnalyticsAttribute
     */
    public static function CUSTOM_DATA_6()
    {
        return new AdAnalyticsAttribute(self::CUSTOM_DATA_6);
    }

    /**
     * CUSTOM_DATA_7
     *
     * @return AdAnalyticsAttribute
     */
    public static function CUSTOM_DATA_7()
    {
        return new AdAnalyticsAttribute(self::CUSTOM_DATA_7);
    }

    /**
     * CUSTOM_DATA_8
     *
     * @return AdAnalyticsAttribute
     */
    public static function CUSTOM_DATA_8()
    {
        return new AdAnalyticsAttribute(self::CUSTOM_DATA_8);
    }

    /**
     * CUSTOM_DATA_9
     *
     * @return AdAnalyticsAttribute
     */
    public static function CUSTOM_DATA_9()
    {
        return new AdAnalyticsAttribute(self::CUSTOM_DATA_9);
    }

    /**
     * CUSTOM_DATA_10
     *
     * @return AdAnalyticsAttribute
     */
    public static function CUSTOM_DATA_10()
    {
        return new AdAnalyticsAttribute(self::CUSTOM_DATA_10);
    }

    /**
     * CUSTOM_DATA_11
     *
     * @return AdAnalyticsAttribute
     */
    public static function CUSTOM_DATA_11()
    {
        return new AdAnalyticsAttribute(self::CUSTOM_DATA_11);
    }

    /**
     * CUSTOM_DATA_12
     *
     * @return AdAnalyticsAttribute
     */
    public static function CUSTOM_DATA_12()
    {
        return new AdAnalyticsAttribute(self::CUSTOM_DATA_12);
    }

    /**
     * CUSTOM_DATA_13
     *
     * @return AdAnalyticsAttribute
     */
    public static function CUSTOM_DATA_13()
    {
        return new AdAnalyticsAttribute(self::CUSTOM_DATA_13);
    }

    /**
     * CUSTOM_DATA_14
     *
     * @return AdAnalyticsAttribute
     */
    public static function CUSTOM_DATA_14()
    {
        return new AdAnalyticsAttribute(self::CUSTOM_DATA_14);
    }

    /**
     * CUSTOM_DATA_15
     *
     * @return AdAnalyticsAttribute
     */
    public static function CUSTOM_DATA_15()
    {
        return new AdAnalyticsAttribute(self::CUSTOM_DATA_15);
    }

    /**
     * CUSTOM_DATA_16
     *
     * @return AdAnalyticsAttribute
     */
    public static function CUSTOM_DATA_16()
    {
        return new AdAnalyticsAttribute(self::CUSTOM_DATA_16);
    }

    /**
     * CUSTOM_DATA_17
     *
     * @return AdAnalyticsAttribute
     */
    public static function CUSTOM_DATA_17()
    {
        return new AdAnalyticsAttribute(self::CUSTOM_DATA_17);
    }

    /**
     * CUSTOM_DATA_18
     *
     * @return AdAnalyticsAttribute
     */
    public static function CUSTOM_DATA_18()
    {
        return new AdAnalyticsAttribute(self::CUSTOM_DATA_18);
    }

    /**
     * CUSTOM_DATA_19
     *
     * @return AdAnalyticsAttribute
     */
    public static function CUSTOM_DATA_19()
    {
        return new AdAnalyticsAttribute(self::CUSTOM_DATA_19);
    }

    /**
     * CUSTOM_DATA_20
     *
     * @return AdAnalyticsAttribute
     */
    public static function CUSTOM_DATA_20()
    {
        return new AdAnalyticsAttribute(self::CUSTOM_DATA_20);
    }

    /**
     * CUSTOM_DATA_21
     *
     * @return AdAnalyticsAttribute
     */
    public static function CUSTOM_DATA_21()
    {
        return new AdAnalyticsAttribute(self::CUSTOM_DATA_21);
    }

    /**
     * CUSTOM_DATA_22
     *
     * @return AdAnalyticsAttribute
     */
    public static function CUSTOM_DATA_22()
    {
        return new AdAnalyticsAttribute(self::CUSTOM_DATA_22);
    }

    /**
     * CUSTOM_DATA_23
     *
     * @return AdAnalyticsAttribute
     */
    public static function CUSTOM_DATA_23()
    {
        return new AdAnalyticsAttribute(self::CUSTOM_DATA_23);
    }

    /**
     * CUSTOM_DATA_24
     *
     * @return AdAnalyticsAttribute
     */
    public static function CUSTOM_DATA_24()
    {
        return new AdAnalyticsAttribute(self::CUSTOM_DATA_24);
    }

    /**
     * CUSTOM_DATA_25
     *
     * @return AdAnalyticsAttribute
     */
    public static function CUSTOM_DATA_25()
    {
        return new AdAnalyticsAttribute(self::CUSTOM_DATA_25);
    }

    /**
     * CUSTOM_USER_ID
     *
     * @return AdAnalyticsAttribute
     */
    public static function CUSTOM_USER_ID()
    {
        return new AdAnalyticsAttribute(self::CUSTOM_USER_ID);
    }

    /**
     * DAY
     *
     * @return AdAnalyticsAttribute
     */
    public static function DAY()
    {
        return new AdAnalyticsAttribute(self::DAY);
    }

    /**
     * DEAL_ID
     *
     * @return AdAnalyticsAttribute
     */
    public static function DEAL_ID()
    {
        return new AdAnalyticsAttribute(self::DEAL_ID);
    }

    /**
     * DEVICE_CLASS
     *
     * @return AdAnalyticsAttribute
     */
    public static function DEVICE_CLASS()
    {
        return new AdAnalyticsAttribute(self::DEVICE_CLASS);
    }

    /**
     * DEVICE_TYPE
     *
     * @return AdAnalyticsAttribute
     */
    public static function DEVICE_TYPE()
    {
        return new AdAnalyticsAttribute(self::DEVICE_TYPE);
    }

    /**
     * DOMAIN
     *
     * @return AdAnalyticsAttribute
     */
    public static function DOMAIN()
    {
        return new AdAnalyticsAttribute(self::DOMAIN);
    }

    /**
     * ERROR_CODE
     *
     * @return AdAnalyticsAttribute
     */
    public static function ERROR_CODE()
    {
        return new AdAnalyticsAttribute(self::ERROR_CODE);
    }

    /**
     * ERROR_PERCENTAGE
     *
     * @return AdAnalyticsAttribute
     */
    public static function ERROR_PERCENTAGE()
    {
        return new AdAnalyticsAttribute(self::ERROR_PERCENTAGE);
    }

    /**
     * ERROR_POSITION
     *
     * @return AdAnalyticsAttribute
     */
    public static function ERROR_POSITION()
    {
        return new AdAnalyticsAttribute(self::ERROR_POSITION);
    }

    /**
     * EXIT_POSITION
     *
     * @return AdAnalyticsAttribute
     */
    public static function EXIT_POSITION()
    {
        return new AdAnalyticsAttribute(self::EXIT_POSITION);
    }

    /**
     * EXPERIMENT_NAME
     *
     * @return AdAnalyticsAttribute
     */
    public static function EXPERIMENT_NAME()
    {
        return new AdAnalyticsAttribute(self::EXPERIMENT_NAME);
    }

    /**
     * HOUR
     *
     * @return AdAnalyticsAttribute
     */
    public static function HOUR()
    {
        return new AdAnalyticsAttribute(self::HOUR);
    }

    /**
     * IP_ADDRESS
     *
     * @return AdAnalyticsAttribute
     */
    public static function IP_ADDRESS()
    {
        return new AdAnalyticsAttribute(self::IP_ADDRESS);
    }

    /**
     * IS_LINEAR
     *
     * @return AdAnalyticsAttribute
     */
    public static function IS_LINEAR()
    {
        return new AdAnalyticsAttribute(self::IS_LINEAR);
    }

    /**
     * ISP
     *
     * @return AdAnalyticsAttribute
     */
    public static function ISP()
    {
        return new AdAnalyticsAttribute(self::ISP);
    }

    /**
     * LANGUAGE
     *
     * @return AdAnalyticsAttribute
     */
    public static function LANGUAGE()
    {
        return new AdAnalyticsAttribute(self::LANGUAGE);
    }

    /**
     * LICENSE_KEY
     *
     * @return AdAnalyticsAttribute
     */
    public static function LICENSE_KEY()
    {
        return new AdAnalyticsAttribute(self::LICENSE_KEY);
    }

    /**
     * MANIFEST_DOWNLOAD_TIME
     *
     * @return AdAnalyticsAttribute
     */
    public static function MANIFEST_DOWNLOAD_TIME()
    {
        return new AdAnalyticsAttribute(self::MANIFEST_DOWNLOAD_TIME);
    }

    /**
     * MEDIA_PATH
     *
     * @return AdAnalyticsAttribute
     */
    public static function MEDIA_PATH()
    {
        return new AdAnalyticsAttribute(self::MEDIA_PATH);
    }

    /**
     * MEDIA_SERVER
     *
     * @return AdAnalyticsAttribute
     */
    public static function MEDIA_SERVER()
    {
        return new AdAnalyticsAttribute(self::MEDIA_SERVER);
    }

    /**
     * MEDIA_URL
     *
     * @return AdAnalyticsAttribute
     */
    public static function MEDIA_URL()
    {
        return new AdAnalyticsAttribute(self::MEDIA_URL);
    }

    /**
     * MIDPOINT
     *
     * @return AdAnalyticsAttribute
     */
    public static function MIDPOINT()
    {
        return new AdAnalyticsAttribute(self::MIDPOINT);
    }

    /**
     * MIN_SUGGESTED_DURATION
     *
     * @return AdAnalyticsAttribute
     */
    public static function MIN_SUGGESTED_DURATION()
    {
        return new AdAnalyticsAttribute(self::MIN_SUGGESTED_DURATION);
    }

    /**
     * MINUTE
     *
     * @return AdAnalyticsAttribute
     */
    public static function MINUTE()
    {
        return new AdAnalyticsAttribute(self::MINUTE);
    }

    /**
     * MONTH
     *
     * @return AdAnalyticsAttribute
     */
    public static function MONTH()
    {
        return new AdAnalyticsAttribute(self::MONTH);
    }

    /**
     * OPERATINGSYSTEM
     *
     * @return AdAnalyticsAttribute
     */
    public static function OPERATINGSYSTEM()
    {
        return new AdAnalyticsAttribute(self::OPERATINGSYSTEM);
    }

    /**
     * OPERATINGSYSTEM_VERSION_MAJOR
     *
     * @return AdAnalyticsAttribute
     */
    public static function OPERATINGSYSTEM_VERSION_MAJOR()
    {
        return new AdAnalyticsAttribute(self::OPERATINGSYSTEM_VERSION_MAJOR);
    }

    /**
     * PAGE_LOAD_TIME
     *
     * @return AdAnalyticsAttribute
     */
    public static function PAGE_LOAD_TIME()
    {
        return new AdAnalyticsAttribute(self::PAGE_LOAD_TIME);
    }

    /**
     * PAGE_LOAD_TYPE
     *
     * @return AdAnalyticsAttribute
     */
    public static function PAGE_LOAD_TYPE()
    {
        return new AdAnalyticsAttribute(self::PAGE_LOAD_TYPE);
    }

    /**
     * PATH
     *
     * @return AdAnalyticsAttribute
     */
    public static function PATH()
    {
        return new AdAnalyticsAttribute(self::PATH);
    }

    /**
     * PERCENTAGE_IN_VIEWPORT
     *
     * @return AdAnalyticsAttribute
     */
    public static function PERCENTAGE_IN_VIEWPORT()
    {
        return new AdAnalyticsAttribute(self::PERCENTAGE_IN_VIEWPORT);
    }

    /**
     * PLATFORM
     *
     * @return AdAnalyticsAttribute
     */
    public static function PLATFORM()
    {
        return new AdAnalyticsAttribute(self::PLATFORM);
    }

    /**
     * PLAY_PERCENTAGE
     *
     * @return AdAnalyticsAttribute
     */
    public static function PLAY_PERCENTAGE()
    {
        return new AdAnalyticsAttribute(self::PLAY_PERCENTAGE);
    }

    /**
     * PLAYER
     *
     * @return AdAnalyticsAttribute
     */
    public static function PLAYER()
    {
        return new AdAnalyticsAttribute(self::PLAYER);
    }

    /**
     * PLAYER_KEY
     *
     * @return AdAnalyticsAttribute
     */
    public static function PLAYER_KEY()
    {
        return new AdAnalyticsAttribute(self::PLAYER_KEY);
    }

    /**
     * PLAYER_STARTUPTIME
     *
     * @return AdAnalyticsAttribute
     */
    public static function PLAYER_STARTUPTIME()
    {
        return new AdAnalyticsAttribute(self::PLAYER_STARTUPTIME);
    }

    /**
     * PLAYER_TECH
     *
     * @return AdAnalyticsAttribute
     */
    public static function PLAYER_TECH()
    {
        return new AdAnalyticsAttribute(self::PLAYER_TECH);
    }

    /**
     * PLAYER_VERSION
     *
     * @return AdAnalyticsAttribute
     */
    public static function PLAYER_VERSION()
    {
        return new AdAnalyticsAttribute(self::PLAYER_VERSION);
    }

    /**
     * QUARTILE_1
     *
     * @return AdAnalyticsAttribute
     */
    public static function QUARTILE_1()
    {
        return new AdAnalyticsAttribute(self::QUARTILE_1);
    }

    /**
     * QUARTILE_3
     *
     * @return AdAnalyticsAttribute
     */
    public static function QUARTILE_3()
    {
        return new AdAnalyticsAttribute(self::QUARTILE_3);
    }

    /**
     * REGION
     *
     * @return AdAnalyticsAttribute
     */
    public static function REGION()
    {
        return new AdAnalyticsAttribute(self::REGION);
    }

    /**
     * SCALE_FACTOR
     *
     * @return AdAnalyticsAttribute
     */
    public static function SCALE_FACTOR()
    {
        return new AdAnalyticsAttribute(self::SCALE_FACTOR);
    }

    /**
     * SCREEN_HEIGHT
     *
     * @return AdAnalyticsAttribute
     */
    public static function SCREEN_HEIGHT()
    {
        return new AdAnalyticsAttribute(self::SCREEN_HEIGHT);
    }

    /**
     * SCREEN_WIDTH
     *
     * @return AdAnalyticsAttribute
     */
    public static function SCREEN_WIDTH()
    {
        return new AdAnalyticsAttribute(self::SCREEN_WIDTH);
    }

    /**
     * SIZE
     *
     * @return AdAnalyticsAttribute
     */
    public static function SIZE()
    {
        return new AdAnalyticsAttribute(self::SIZE);
    }

    /**
     * SKIP_PERCENTAGE
     *
     * @return AdAnalyticsAttribute
     */
    public static function SKIP_PERCENTAGE()
    {
        return new AdAnalyticsAttribute(self::SKIP_PERCENTAGE);
    }

    /**
     * SKIP_POSITION
     *
     * @return AdAnalyticsAttribute
     */
    public static function SKIP_POSITION()
    {
        return new AdAnalyticsAttribute(self::SKIP_POSITION);
    }

    /**
     * SKIPPED
     *
     * @return AdAnalyticsAttribute
     */
    public static function SKIPPED()
    {
        return new AdAnalyticsAttribute(self::SKIPPED);
    }

    /**
     * STARTED
     *
     * @return AdAnalyticsAttribute
     */
    public static function STARTED()
    {
        return new AdAnalyticsAttribute(self::STARTED);
    }

    /**
     * STREAM_FORMAT
     *
     * @return AdAnalyticsAttribute
     */
    public static function STREAM_FORMAT()
    {
        return new AdAnalyticsAttribute(self::STREAM_FORMAT);
    }

    /**
     * SURVEY_URL
     *
     * @return AdAnalyticsAttribute
     */
    public static function SURVEY_URL()
    {
        return new AdAnalyticsAttribute(self::SURVEY_URL);
    }

    /**
     * TIME
     *
     * @return AdAnalyticsAttribute
     */
    public static function TIME()
    {
        return new AdAnalyticsAttribute(self::TIME);
    }

    /**
     * TIME_IN_VIEWPORT
     *
     * @return AdAnalyticsAttribute
     */
    public static function TIME_IN_VIEWPORT()
    {
        return new AdAnalyticsAttribute(self::TIME_IN_VIEWPORT);
    }

    /**
     * TIME_PLAYED
     *
     * @return AdAnalyticsAttribute
     */
    public static function TIME_PLAYED()
    {
        return new AdAnalyticsAttribute(self::TIME_PLAYED);
    }

    /**
     * UNIVERSAL_AD_ID_REGISTRY
     *
     * @return AdAnalyticsAttribute
     */
    public static function UNIVERSAL_AD_ID_REGISTRY()
    {
        return new AdAnalyticsAttribute(self::UNIVERSAL_AD_ID_REGISTRY);
    }

    /**
     * UNIVERSAL_AD_ID_VALUE
     *
     * @return AdAnalyticsAttribute
     */
    public static function UNIVERSAL_AD_ID_VALUE()
    {
        return new AdAnalyticsAttribute(self::UNIVERSAL_AD_ID_VALUE);
    }

    /**
     * USER_ID
     *
     * @return AdAnalyticsAttribute
     */
    public static function USER_ID()
    {
        return new AdAnalyticsAttribute(self::USER_ID);
    }

    /**
     * VIDEO_BITRATE
     *
     * @return AdAnalyticsAttribute
     */
    public static function VIDEO_BITRATE()
    {
        return new AdAnalyticsAttribute(self::VIDEO_BITRATE);
    }

    /**
     * VIDEO_CODEC
     *
     * @return AdAnalyticsAttribute
     */
    public static function VIDEO_CODEC()
    {
        return new AdAnalyticsAttribute(self::VIDEO_CODEC);
    }

    /**
     * VIDEO_ID
     *
     * @return AdAnalyticsAttribute
     */
    public static function VIDEO_ID()
    {
        return new AdAnalyticsAttribute(self::VIDEO_ID);
    }

    /**
     * VIDEO_IMPRESSION_ID
     *
     * @return AdAnalyticsAttribute
     */
    public static function VIDEO_IMPRESSION_ID()
    {
        return new AdAnalyticsAttribute(self::VIDEO_IMPRESSION_ID);
    }

    /**
     * VIDEO_TITLE
     *
     * @return AdAnalyticsAttribute
     */
    public static function VIDEO_TITLE()
    {
        return new AdAnalyticsAttribute(self::VIDEO_TITLE);
    }

    /**
     * VIDEO_WINDOW_HEIGHT
     *
     * @return AdAnalyticsAttribute
     */
    public static function VIDEO_WINDOW_HEIGHT()
    {
        return new AdAnalyticsAttribute(self::VIDEO_WINDOW_HEIGHT);
    }

    /**
     * VIDEO_WINDOW_WIDTH
     *
     * @return AdAnalyticsAttribute
     */
    public static function VIDEO_WINDOW_WIDTH()
    {
        return new AdAnalyticsAttribute(self::VIDEO_WINDOW_WIDTH);
    }
}

