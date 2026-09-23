<?php

namespace BitmovinApiSdk\Models;

class AiSceneAnalysisLiveSourceGapReason extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const SOURCE_DISCONNECTED = 'SOURCE_DISCONNECTED';

    /** @var string */
    private const PROCESSING_MEDIA_PRESSURE = 'PROCESSING_MEDIA_PRESSURE';

    /** @var string */
    private const ANALYSIS_LAG = 'ANALYSIS_LAG';

    /** @var string */
    private const WINDOW_BUILD_FAILED = 'WINDOW_BUILD_FAILED';

    /** @var string */
    private const FINALIZATION_BACKLOG = 'FINALIZATION_BACKLOG';

    /**
     * @param string $value
     * @return AiSceneAnalysisLiveSourceGapReason
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * The RTMP source disconnected and later reconnected
     *
     * @return AiSceneAnalysisLiveSourceGapReason
     */
    public static function SOURCE_DISCONNECTED()
    {
        return new AiSceneAnalysisLiveSourceGapReason(self::SOURCE_DISCONNECTED);
    }

    /**
     * The media interval was not analyzed because temporary storage capacity was reached
     *
     * @return AiSceneAnalysisLiveSourceGapReason
     */
    public static function PROCESSING_MEDIA_PRESSURE()
    {
        return new AiSceneAnalysisLiveSourceGapReason(self::PROCESSING_MEDIA_PRESSURE);
    }

    /**
     * The media interval was not analyzed because analysis lag exceeded the configured maximum latency and the analysis window was skipped to catch up
     *
     * @return AiSceneAnalysisLiveSourceGapReason
     */
    public static function ANALYSIS_LAG()
    {
        return new AiSceneAnalysisLiveSourceGapReason(self::ANALYSIS_LAG);
    }

    /**
     * The media interval was not analyzed because the analysis window could not be created from the recorded media
     *
     * @return AiSceneAnalysisLiveSourceGapReason
     */
    public static function WINDOW_BUILD_FAILED()
    {
        return new AiSceneAnalysisLiveSourceGapReason(self::WINDOW_BUILD_FAILED);
    }

    /**
     * The media interval was received but remained unanalyzed when AI analysis ended
     *
     * @return AiSceneAnalysisLiveSourceGapReason
     */
    public static function FINALIZATION_BACKLOG()
    {
        return new AiSceneAnalysisLiveSourceGapReason(self::FINALIZATION_BACKLOG);
    }
}

