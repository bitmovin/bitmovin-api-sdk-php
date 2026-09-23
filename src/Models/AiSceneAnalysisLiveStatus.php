<?php

namespace BitmovinApiSdk\Models;

class AiSceneAnalysisLiveStatus extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const CREATED = 'CREATED';

    /** @var string */
    private const QUEUED = 'QUEUED';

    /** @var string */
    private const RUNNING = 'RUNNING';

    /** @var string */
    private const FINISHED = 'FINISHED';

    /** @var string */
    private const CANCELED = 'CANCELED';

    /** @var string */
    private const ERROR = 'ERROR';

    /** @var string */
    private const TRANSFER_ERROR = 'TRANSFER_ERROR';

    /**
     * @param string $value
     * @return AiSceneAnalysisLiveStatus
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * The Analysis has been created and has not been started
     *
     * @return AiSceneAnalysisLiveStatus
     */
    public static function CREATED()
    {
        return new AiSceneAnalysisLiveStatus(self::CREATED);
    }

    /**
     * The start request was accepted and AI analysis is preparing to receive input
     *
     * @return AiSceneAnalysisLiveStatus
     */
    public static function QUEUED()
    {
        return new AiSceneAnalysisLiveStatus(self::QUEUED);
    }

    /**
     * AI analysis is ready to receive RTMP input
     *
     * @return AiSceneAnalysisLiveStatus
     */
    public static function RUNNING()
    {
        return new AiSceneAnalysisLiveStatus(self::RUNNING);
    }

    /**
     * The running analysis stopped gracefully and final required delivery completed
     *
     * @return AiSceneAnalysisLiveStatus
     */
    public static function FINISHED()
    {
        return new AiSceneAnalysisLiveStatus(self::FINISHED);
    }

    /**
     * Queued work was stopped before analysis began
     *
     * @return AiSceneAnalysisLiveStatus
     */
    public static function CANCELED()
    {
        return new AiSceneAnalysisLiveStatus(self::CANCELED);
    }

    /**
     * Provisioning, validation, processing, or final generation failed
     *
     * @return AiSceneAnalysisLiveStatus
     */
    public static function ERROR()
    {
        return new AiSceneAnalysisLiveStatus(self::ERROR);
    }

    /**
     * Required result delivery exhausted its retry budget
     *
     * @return AiSceneAnalysisLiveStatus
     */
    public static function TRANSFER_ERROR()
    {
        return new AiSceneAnalysisLiveStatus(self::TRANSFER_ERROR);
    }
}

