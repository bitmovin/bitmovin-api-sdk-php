<?php

namespace BitmovinApiSdk\Models;

class AnalyticsAttribute extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const IMPRESSION_ID = 'IMPRESSION_ID';

    /** @var string */
    private const ACTIVE_PLAYER_STARTUPTIME = 'ACTIVE_PLAYER_STARTUPTIME';

    /** @var string */
    private const AD = 'AD';

    /** @var string */
    private const ANALYTICS_VERSION = 'ANALYTICS_VERSION';

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
    private const BROWSER_IS_BOT = 'BROWSER_IS_BOT';

    /** @var string */
    private const BUFFERED = 'BUFFERED';

    /** @var string */
    private const CDN_PROVIDER = 'CDN_PROVIDER';

    /** @var string */
    private const CAST_TECH = 'CAST_TECH';

    /** @var string */
    private const CITY = 'CITY';

    /** @var string */
    private const CLIENT_TIME = 'CLIENT_TIME';

    /** @var string */
    private const COUNTRY = 'COUNTRY';

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
    private const CUSTOM_USER_ID = 'CUSTOM_USER_ID';

    /** @var string */
    private const DAY = 'DAY';

    /** @var string */
    private const DEVICE_CLASS = 'DEVICE_CLASS';

    /** @var string */
    private const DEVICE_TYPE = 'DEVICE_TYPE';

    /** @var string */
    private const DOMAIN = 'DOMAIN';

    /** @var string */
    private const DRM_LOAD_TIME = 'DRM_LOAD_TIME';

    /** @var string */
    private const DRM_TYPE = 'DRM_TYPE';

    /** @var string */
    private const DROPPED_FRAMES = 'DROPPED_FRAMES';

    /** @var string */
    private const DURATION = 'DURATION';

    /** @var string */
    private const ERROR_CODE = 'ERROR_CODE';

    /** @var string */
    private const ERROR_MESSAGE = 'ERROR_MESSAGE';

    /** @var string */
    private const ERROR_RATE = 'ERROR_RATE';

    /** @var string */
    private const EXPERIMENT_NAME = 'EXPERIMENT_NAME';

    /** @var string */
    private const _FUNCTION = 'FUNCTION';

    /** @var string */
    private const HOUR = 'HOUR';

    /** @var string */
    private const INITIAL_TIME_TO_TARGET_LATENCY = 'INITIAL_TIME_TO_TARGET_LATENCY';

    /** @var string */
    private const IP_ADDRESS = 'IP_ADDRESS';

    /** @var string */
    private const IS_CASTING = 'IS_CASTING';

    /** @var string */
    private const IS_LIVE = 'IS_LIVE';

    /** @var string */
    private const IS_LOW_LATENCY = 'IS_LOW_LATENCY';

    /** @var string */
    private const IS_MUTED = 'IS_MUTED';

    /** @var string */
    private const ISP = 'ISP';

    /** @var string */
    private const LANGUAGE = 'LANGUAGE';

    /** @var string */
    private const LATENCY = 'LATENCY';

    /** @var string */
    private const LICENSE_KEY = 'LICENSE_KEY';

    /** @var string */
    private const M3U8_URL = 'M3U8_URL';

    /** @var string */
    private const MINUTE = 'MINUTE';

    /** @var string */
    private const MONTH = 'MONTH';

    /** @var string */
    private const MPD_URL = 'MPD_URL';

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
    private const PAUSED = 'PAUSED';

    /** @var string */
    private const PLATFORM = 'PLATFORM';

    /** @var string */
    private const PLAYED = 'PLAYED';

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
    private const PROG_URL = 'PROG_URL';

    /** @var string */
    private const REBUFFER_PERCENTAGE = 'REBUFFER_PERCENTAGE';

    /** @var string */
    private const REGION = 'REGION';

    /** @var string */
    private const SCALE_FACTOR = 'SCALE_FACTOR';

    /** @var string */
    private const SCREEN_HEIGHT = 'SCREEN_HEIGHT';

    /** @var string */
    private const SCREEN_WIDTH = 'SCREEN_WIDTH';

    /** @var string */
    private const SEEKED = 'SEEKED';

    /** @var string */
    private const SEQUENCE_NUMBER = 'SEQUENCE_NUMBER';

    /** @var string */
    private const SIZE = 'SIZE';

    /** @var string */
    private const STARTUPTIME = 'STARTUPTIME';

    /** @var string */
    private const STREAM_FORMAT = 'STREAM_FORMAT';

    /** @var string */
    private const SUPPORTED_VIDEO_CODECS = 'SUPPORTED_VIDEO_CODECS';

    /** @var string */
    private const TARGET_LATENCY = 'TARGET_LATENCY';

    /** @var string */
    private const TARGET_LATENCY_DELTA = 'TARGET_LATENCY_DELTA';

    /** @var string */
    private const TIME = 'TIME';

    /** @var string */
    private const TIME_TO_TARGET_LATENCY = 'TIME_TO_TARGET_LATENCY';

    /** @var string */
    private const USER_ID = 'USER_ID';

    /** @var string */
    private const VIDEO_BITRATE = 'VIDEO_BITRATE';

    /** @var string */
    private const VIDEO_CODEC = 'VIDEO_CODEC';

    /** @var string */
    private const VIDEO_DURATION = 'VIDEO_DURATION';

    /** @var string */
    private const VIDEO_ID = 'VIDEO_ID';

    /** @var string */
    private const VIDEO_PLAYBACK_HEIGHT = 'VIDEO_PLAYBACK_HEIGHT';

    /** @var string */
    private const VIDEO_PLAYBACK_WIDTH = 'VIDEO_PLAYBACK_WIDTH';

    /** @var string */
    private const VIDEO_STARTUPTIME = 'VIDEO_STARTUPTIME';

    /** @var string */
    private const VIDEO_TITLE = 'VIDEO_TITLE';

    /** @var string */
    private const VIDEO_WINDOW_HEIGHT = 'VIDEO_WINDOW_HEIGHT';

    /** @var string */
    private const VIDEO_WINDOW_WIDTH = 'VIDEO_WINDOW_WIDTH';

    /** @var string */
    private const VIDEOTIME_END = 'VIDEOTIME_END';

    /** @var string */
    private const VIDEOTIME_START = 'VIDEOTIME_START';

    /** @var string */
    private const VIDEOSTART_FAILED = 'VIDEOSTART_FAILED';

    /** @var string */
    private const VIDEOSTART_FAILED_REASON = 'VIDEOSTART_FAILED_REASON';

    /**
     * @param string $value
     * @return AnalyticsAttribute
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * IMPRESSION_ID
     *
     * @return AnalyticsAttribute
     */
    public static function IMPRESSION_ID()
    {
        return new AnalyticsAttribute(self::IMPRESSION_ID);
    }

    /**
     * ACTIVE_PLAYER_STARTUPTIME
     *
     * @return AnalyticsAttribute
     */
    public static function ACTIVE_PLAYER_STARTUPTIME()
    {
        return new AnalyticsAttribute(self::ACTIVE_PLAYER_STARTUPTIME);
    }

    /**
     * AD
     *
     * @return AnalyticsAttribute
     */
    public static function AD()
    {
        return new AnalyticsAttribute(self::AD);
    }

    /**
     * ANALYTICS_VERSION
     *
     * @return AnalyticsAttribute
     */
    public static function ANALYTICS_VERSION()
    {
        return new AnalyticsAttribute(self::ANALYTICS_VERSION);
    }

    /**
     * AUDIO_BITRATE
     *
     * @return AnalyticsAttribute
     */
    public static function AUDIO_BITRATE()
    {
        return new AnalyticsAttribute(self::AUDIO_BITRATE);
    }

    /**
     * AUDIO_CODEC
     *
     * @return AnalyticsAttribute
     */
    public static function AUDIO_CODEC()
    {
        return new AnalyticsAttribute(self::AUDIO_CODEC);
    }

    /**
     * AUTOPLAY
     *
     * @return AnalyticsAttribute
     */
    public static function AUTOPLAY()
    {
        return new AnalyticsAttribute(self::AUTOPLAY);
    }

    /**
     * BROWSER
     *
     * @return AnalyticsAttribute
     */
    public static function BROWSER()
    {
        return new AnalyticsAttribute(self::BROWSER);
    }

    /**
     * BROWSER_VERSION_MAJOR
     *
     * @return AnalyticsAttribute
     */
    public static function BROWSER_VERSION_MAJOR()
    {
        return new AnalyticsAttribute(self::BROWSER_VERSION_MAJOR);
    }

    /**
     * BROWSER_IS_BOT
     *
     * @return AnalyticsAttribute
     */
    public static function BROWSER_IS_BOT()
    {
        return new AnalyticsAttribute(self::BROWSER_IS_BOT);
    }

    /**
     * BUFFERED
     *
     * @return AnalyticsAttribute
     */
    public static function BUFFERED()
    {
        return new AnalyticsAttribute(self::BUFFERED);
    }

    /**
     * CDN_PROVIDER
     *
     * @return AnalyticsAttribute
     */
    public static function CDN_PROVIDER()
    {
        return new AnalyticsAttribute(self::CDN_PROVIDER);
    }

    /**
     * CAST_TECH
     *
     * @return AnalyticsAttribute
     */
    public static function CAST_TECH()
    {
        return new AnalyticsAttribute(self::CAST_TECH);
    }

    /**
     * CITY
     *
     * @return AnalyticsAttribute
     */
    public static function CITY()
    {
        return new AnalyticsAttribute(self::CITY);
    }

    /**
     * CLIENT_TIME
     *
     * @return AnalyticsAttribute
     */
    public static function CLIENT_TIME()
    {
        return new AnalyticsAttribute(self::CLIENT_TIME);
    }

    /**
     * COUNTRY
     *
     * @return AnalyticsAttribute
     */
    public static function COUNTRY()
    {
        return new AnalyticsAttribute(self::COUNTRY);
    }

    /**
     * CUSTOM_DATA_1
     *
     * @return AnalyticsAttribute
     */
    public static function CUSTOM_DATA_1()
    {
        return new AnalyticsAttribute(self::CUSTOM_DATA_1);
    }

    /**
     * CUSTOM_DATA_2
     *
     * @return AnalyticsAttribute
     */
    public static function CUSTOM_DATA_2()
    {
        return new AnalyticsAttribute(self::CUSTOM_DATA_2);
    }

    /**
     * CUSTOM_DATA_3
     *
     * @return AnalyticsAttribute
     */
    public static function CUSTOM_DATA_3()
    {
        return new AnalyticsAttribute(self::CUSTOM_DATA_3);
    }

    /**
     * CUSTOM_DATA_4
     *
     * @return AnalyticsAttribute
     */
    public static function CUSTOM_DATA_4()
    {
        return new AnalyticsAttribute(self::CUSTOM_DATA_4);
    }

    /**
     * CUSTOM_DATA_5
     *
     * @return AnalyticsAttribute
     */
    public static function CUSTOM_DATA_5()
    {
        return new AnalyticsAttribute(self::CUSTOM_DATA_5);
    }

    /**
     * CUSTOM_USER_ID
     *
     * @return AnalyticsAttribute
     */
    public static function CUSTOM_USER_ID()
    {
        return new AnalyticsAttribute(self::CUSTOM_USER_ID);
    }

    /**
     * DAY
     *
     * @return AnalyticsAttribute
     */
    public static function DAY()
    {
        return new AnalyticsAttribute(self::DAY);
    }

    /**
     * DEVICE_CLASS
     *
     * @return AnalyticsAttribute
     */
    public static function DEVICE_CLASS()
    {
        return new AnalyticsAttribute(self::DEVICE_CLASS);
    }

    /**
     * DEVICE_TYPE
     *
     * @return AnalyticsAttribute
     */
    public static function DEVICE_TYPE()
    {
        return new AnalyticsAttribute(self::DEVICE_TYPE);
    }

    /**
     * DOMAIN
     *
     * @return AnalyticsAttribute
     */
    public static function DOMAIN()
    {
        return new AnalyticsAttribute(self::DOMAIN);
    }

    /**
     * DRM_LOAD_TIME
     *
     * @return AnalyticsAttribute
     */
    public static function DRM_LOAD_TIME()
    {
        return new AnalyticsAttribute(self::DRM_LOAD_TIME);
    }

    /**
     * DRM_TYPE
     *
     * @return AnalyticsAttribute
     */
    public static function DRM_TYPE()
    {
        return new AnalyticsAttribute(self::DRM_TYPE);
    }

    /**
     * DROPPED_FRAMES
     *
     * @return AnalyticsAttribute
     */
    public static function DROPPED_FRAMES()
    {
        return new AnalyticsAttribute(self::DROPPED_FRAMES);
    }

    /**
     * DURATION
     *
     * @return AnalyticsAttribute
     */
    public static function DURATION()
    {
        return new AnalyticsAttribute(self::DURATION);
    }

    /**
     * ERROR_CODE
     *
     * @return AnalyticsAttribute
     */
    public static function ERROR_CODE()
    {
        return new AnalyticsAttribute(self::ERROR_CODE);
    }

    /**
     * ERROR_MESSAGE
     *
     * @return AnalyticsAttribute
     */
    public static function ERROR_MESSAGE()
    {
        return new AnalyticsAttribute(self::ERROR_MESSAGE);
    }

    /**
     * ERROR_RATE
     *
     * @return AnalyticsAttribute
     */
    public static function ERROR_RATE()
    {
        return new AnalyticsAttribute(self::ERROR_RATE);
    }

    /**
     * EXPERIMENT_NAME
     *
     * @return AnalyticsAttribute
     */
    public static function EXPERIMENT_NAME()
    {
        return new AnalyticsAttribute(self::EXPERIMENT_NAME);
    }

    /**
     * _FUNCTION
     *
     * @return AnalyticsAttribute
     */
    public static function _FUNCTION()
    {
        return new AnalyticsAttribute(self::_FUNCTION);
    }

    /**
     * HOUR
     *
     * @return AnalyticsAttribute
     */
    public static function HOUR()
    {
        return new AnalyticsAttribute(self::HOUR);
    }

    /**
     * INITIAL_TIME_TO_TARGET_LATENCY
     *
     * @return AnalyticsAttribute
     */
    public static function INITIAL_TIME_TO_TARGET_LATENCY()
    {
        return new AnalyticsAttribute(self::INITIAL_TIME_TO_TARGET_LATENCY);
    }

    /**
     * IP_ADDRESS
     *
     * @return AnalyticsAttribute
     */
    public static function IP_ADDRESS()
    {
        return new AnalyticsAttribute(self::IP_ADDRESS);
    }

    /**
     * IS_CASTING
     *
     * @return AnalyticsAttribute
     */
    public static function IS_CASTING()
    {
        return new AnalyticsAttribute(self::IS_CASTING);
    }

    /**
     * IS_LIVE
     *
     * @return AnalyticsAttribute
     */
    public static function IS_LIVE()
    {
        return new AnalyticsAttribute(self::IS_LIVE);
    }

    /**
     * IS_LOW_LATENCY
     *
     * @return AnalyticsAttribute
     */
    public static function IS_LOW_LATENCY()
    {
        return new AnalyticsAttribute(self::IS_LOW_LATENCY);
    }

    /**
     * IS_MUTED
     *
     * @return AnalyticsAttribute
     */
    public static function IS_MUTED()
    {
        return new AnalyticsAttribute(self::IS_MUTED);
    }

    /**
     * ISP
     *
     * @return AnalyticsAttribute
     */
    public static function ISP()
    {
        return new AnalyticsAttribute(self::ISP);
    }

    /**
     * LANGUAGE
     *
     * @return AnalyticsAttribute
     */
    public static function LANGUAGE()
    {
        return new AnalyticsAttribute(self::LANGUAGE);
    }

    /**
     * LATENCY
     *
     * @return AnalyticsAttribute
     */
    public static function LATENCY()
    {
        return new AnalyticsAttribute(self::LATENCY);
    }

    /**
     * LICENSE_KEY
     *
     * @return AnalyticsAttribute
     */
    public static function LICENSE_KEY()
    {
        return new AnalyticsAttribute(self::LICENSE_KEY);
    }

    /**
     * M3U8_URL
     *
     * @return AnalyticsAttribute
     */
    public static function M3U8_URL()
    {
        return new AnalyticsAttribute(self::M3U8_URL);
    }

    /**
     * MINUTE
     *
     * @return AnalyticsAttribute
     */
    public static function MINUTE()
    {
        return new AnalyticsAttribute(self::MINUTE);
    }

    /**
     * MONTH
     *
     * @return AnalyticsAttribute
     */
    public static function MONTH()
    {
        return new AnalyticsAttribute(self::MONTH);
    }

    /**
     * MPD_URL
     *
     * @return AnalyticsAttribute
     */
    public static function MPD_URL()
    {
        return new AnalyticsAttribute(self::MPD_URL);
    }

    /**
     * OPERATINGSYSTEM
     *
     * @return AnalyticsAttribute
     */
    public static function OPERATINGSYSTEM()
    {
        return new AnalyticsAttribute(self::OPERATINGSYSTEM);
    }

    /**
     * OPERATINGSYSTEM_VERSION_MAJOR
     *
     * @return AnalyticsAttribute
     */
    public static function OPERATINGSYSTEM_VERSION_MAJOR()
    {
        return new AnalyticsAttribute(self::OPERATINGSYSTEM_VERSION_MAJOR);
    }

    /**
     * PAGE_LOAD_TIME
     *
     * @return AnalyticsAttribute
     */
    public static function PAGE_LOAD_TIME()
    {
        return new AnalyticsAttribute(self::PAGE_LOAD_TIME);
    }

    /**
     * PAGE_LOAD_TYPE
     *
     * @return AnalyticsAttribute
     */
    public static function PAGE_LOAD_TYPE()
    {
        return new AnalyticsAttribute(self::PAGE_LOAD_TYPE);
    }

    /**
     * PATH
     *
     * @return AnalyticsAttribute
     */
    public static function PATH()
    {
        return new AnalyticsAttribute(self::PATH);
    }

    /**
     * PAUSED
     *
     * @return AnalyticsAttribute
     */
    public static function PAUSED()
    {
        return new AnalyticsAttribute(self::PAUSED);
    }

    /**
     * PLATFORM
     *
     * @return AnalyticsAttribute
     */
    public static function PLATFORM()
    {
        return new AnalyticsAttribute(self::PLATFORM);
    }

    /**
     * PLAYED
     *
     * @return AnalyticsAttribute
     */
    public static function PLAYED()
    {
        return new AnalyticsAttribute(self::PLAYED);
    }

    /**
     * PLAYER
     *
     * @return AnalyticsAttribute
     */
    public static function PLAYER()
    {
        return new AnalyticsAttribute(self::PLAYER);
    }

    /**
     * PLAYER_KEY
     *
     * @return AnalyticsAttribute
     */
    public static function PLAYER_KEY()
    {
        return new AnalyticsAttribute(self::PLAYER_KEY);
    }

    /**
     * PLAYER_STARTUPTIME
     *
     * @return AnalyticsAttribute
     */
    public static function PLAYER_STARTUPTIME()
    {
        return new AnalyticsAttribute(self::PLAYER_STARTUPTIME);
    }

    /**
     * PLAYER_TECH
     *
     * @return AnalyticsAttribute
     */
    public static function PLAYER_TECH()
    {
        return new AnalyticsAttribute(self::PLAYER_TECH);
    }

    /**
     * PLAYER_VERSION
     *
     * @return AnalyticsAttribute
     */
    public static function PLAYER_VERSION()
    {
        return new AnalyticsAttribute(self::PLAYER_VERSION);
    }

    /**
     * PROG_URL
     *
     * @return AnalyticsAttribute
     */
    public static function PROG_URL()
    {
        return new AnalyticsAttribute(self::PROG_URL);
    }

    /**
     * REBUFFER_PERCENTAGE
     *
     * @return AnalyticsAttribute
     */
    public static function REBUFFER_PERCENTAGE()
    {
        return new AnalyticsAttribute(self::REBUFFER_PERCENTAGE);
    }

    /**
     * REGION
     *
     * @return AnalyticsAttribute
     */
    public static function REGION()
    {
        return new AnalyticsAttribute(self::REGION);
    }

    /**
     * SCALE_FACTOR
     *
     * @return AnalyticsAttribute
     */
    public static function SCALE_FACTOR()
    {
        return new AnalyticsAttribute(self::SCALE_FACTOR);
    }

    /**
     * SCREEN_HEIGHT
     *
     * @return AnalyticsAttribute
     */
    public static function SCREEN_HEIGHT()
    {
        return new AnalyticsAttribute(self::SCREEN_HEIGHT);
    }

    /**
     * SCREEN_WIDTH
     *
     * @return AnalyticsAttribute
     */
    public static function SCREEN_WIDTH()
    {
        return new AnalyticsAttribute(self::SCREEN_WIDTH);
    }

    /**
     * SEEKED
     *
     * @return AnalyticsAttribute
     */
    public static function SEEKED()
    {
        return new AnalyticsAttribute(self::SEEKED);
    }

    /**
     * SEQUENCE_NUMBER
     *
     * @return AnalyticsAttribute
     */
    public static function SEQUENCE_NUMBER()
    {
        return new AnalyticsAttribute(self::SEQUENCE_NUMBER);
    }

    /**
     * SIZE
     *
     * @return AnalyticsAttribute
     */
    public static function SIZE()
    {
        return new AnalyticsAttribute(self::SIZE);
    }

    /**
     * STARTUPTIME
     *
     * @return AnalyticsAttribute
     */
    public static function STARTUPTIME()
    {
        return new AnalyticsAttribute(self::STARTUPTIME);
    }

    /**
     * STREAM_FORMAT
     *
     * @return AnalyticsAttribute
     */
    public static function STREAM_FORMAT()
    {
        return new AnalyticsAttribute(self::STREAM_FORMAT);
    }

    /**
     * SUPPORTED_VIDEO_CODECS
     *
     * @return AnalyticsAttribute
     */
    public static function SUPPORTED_VIDEO_CODECS()
    {
        return new AnalyticsAttribute(self::SUPPORTED_VIDEO_CODECS);
    }

    /**
     * TARGET_LATENCY
     *
     * @return AnalyticsAttribute
     */
    public static function TARGET_LATENCY()
    {
        return new AnalyticsAttribute(self::TARGET_LATENCY);
    }

    /**
     * TARGET_LATENCY_DELTA
     *
     * @return AnalyticsAttribute
     */
    public static function TARGET_LATENCY_DELTA()
    {
        return new AnalyticsAttribute(self::TARGET_LATENCY_DELTA);
    }

    /**
     * TIME
     *
     * @return AnalyticsAttribute
     */
    public static function TIME()
    {
        return new AnalyticsAttribute(self::TIME);
    }

    /**
     * TIME_TO_TARGET_LATENCY
     *
     * @return AnalyticsAttribute
     */
    public static function TIME_TO_TARGET_LATENCY()
    {
        return new AnalyticsAttribute(self::TIME_TO_TARGET_LATENCY);
    }

    /**
     * USER_ID
     *
     * @return AnalyticsAttribute
     */
    public static function USER_ID()
    {
        return new AnalyticsAttribute(self::USER_ID);
    }

    /**
     * VIDEO_BITRATE
     *
     * @return AnalyticsAttribute
     */
    public static function VIDEO_BITRATE()
    {
        return new AnalyticsAttribute(self::VIDEO_BITRATE);
    }

    /**
     * VIDEO_CODEC
     *
     * @return AnalyticsAttribute
     */
    public static function VIDEO_CODEC()
    {
        return new AnalyticsAttribute(self::VIDEO_CODEC);
    }

    /**
     * VIDEO_DURATION
     *
     * @return AnalyticsAttribute
     */
    public static function VIDEO_DURATION()
    {
        return new AnalyticsAttribute(self::VIDEO_DURATION);
    }

    /**
     * VIDEO_ID
     *
     * @return AnalyticsAttribute
     */
    public static function VIDEO_ID()
    {
        return new AnalyticsAttribute(self::VIDEO_ID);
    }

    /**
     * VIDEO_PLAYBACK_HEIGHT
     *
     * @return AnalyticsAttribute
     */
    public static function VIDEO_PLAYBACK_HEIGHT()
    {
        return new AnalyticsAttribute(self::VIDEO_PLAYBACK_HEIGHT);
    }

    /**
     * VIDEO_PLAYBACK_WIDTH
     *
     * @return AnalyticsAttribute
     */
    public static function VIDEO_PLAYBACK_WIDTH()
    {
        return new AnalyticsAttribute(self::VIDEO_PLAYBACK_WIDTH);
    }

    /**
     * VIDEO_STARTUPTIME
     *
     * @return AnalyticsAttribute
     */
    public static function VIDEO_STARTUPTIME()
    {
        return new AnalyticsAttribute(self::VIDEO_STARTUPTIME);
    }

    /**
     * VIDEO_TITLE
     *
     * @return AnalyticsAttribute
     */
    public static function VIDEO_TITLE()
    {
        return new AnalyticsAttribute(self::VIDEO_TITLE);
    }

    /**
     * VIDEO_WINDOW_HEIGHT
     *
     * @return AnalyticsAttribute
     */
    public static function VIDEO_WINDOW_HEIGHT()
    {
        return new AnalyticsAttribute(self::VIDEO_WINDOW_HEIGHT);
    }

    /**
     * VIDEO_WINDOW_WIDTH
     *
     * @return AnalyticsAttribute
     */
    public static function VIDEO_WINDOW_WIDTH()
    {
        return new AnalyticsAttribute(self::VIDEO_WINDOW_WIDTH);
    }

    /**
     * VIDEOTIME_END
     *
     * @return AnalyticsAttribute
     */
    public static function VIDEOTIME_END()
    {
        return new AnalyticsAttribute(self::VIDEOTIME_END);
    }

    /**
     * VIDEOTIME_START
     *
     * @return AnalyticsAttribute
     */
    public static function VIDEOTIME_START()
    {
        return new AnalyticsAttribute(self::VIDEOTIME_START);
    }

    /**
     * VIDEOSTART_FAILED
     *
     * @return AnalyticsAttribute
     */
    public static function VIDEOSTART_FAILED()
    {
        return new AnalyticsAttribute(self::VIDEOSTART_FAILED);
    }

    /**
     * VIDEOSTART_FAILED_REASON
     *
     * @return AnalyticsAttribute
     */
    public static function VIDEOSTART_FAILED_REASON()
    {
        return new AnalyticsAttribute(self::VIDEOSTART_FAILED_REASON);
    }
}

