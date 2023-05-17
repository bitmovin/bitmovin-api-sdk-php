<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class H264VideoConfiguration extends VideoConfiguration
{
    /** @var PresetConfiguration */
    public $presetConfiguration;

    /** @var H264DynamicRangeFormat */
    public $dynamicRangeFormat;

    /** @var float */
    public $crf;

    /** @var ProfileH264 */
    public $profile;

    /** @var int */
    public $bframes;

    /** @var int */
    public $refFrames;

    /** @var int */
    public $qpMin;

    /** @var int */
    public $qpMax;

    /** @var MvPredictionMode */
    public $mvPredictionMode;

    /** @var int */
    public $mvSearchRangeMax;

    /** @var bool */
    public $cabac;

    /** @var int */
    public $maxBitrate;

    /** @var int */
    public $minBitrate;

    /** @var int */
    public $bufsize;

    /** @var int */
    public $minGop;

    /** @var int */
    public $maxGop;

    /** @var bool */
    public $openGop;

    /** @var float */
    public $minKeyframeInterval;

    /** @var float */
    public $maxKeyframeInterval;

    /** @var LevelH264 */
    public $level;

    /** @var BAdapt */
    public $bAdaptiveStrategy;

    /** @var H264MotionEstimationMethod */
    public $motionEstimationMethod;

    /** @var int */
    public $rcLookahead;

    /** @var H264SubMe */
    public $subMe;

    /** @var H264Trellis */
    public $trellis;

    /** @var \BitmovinApiSdk\Models\H264Partition[] */
    public $partitions;

    /** @var int */
    public $slices;

    /** @var H264InterlaceMode */
    public $interlaceMode;

    /** @var int */
    public $sceneCutThreshold;

    /** @var H264NalHrd */
    public $nalHrd;

    /** @var H264BPyramid */
    public $bPyramid;

    /** @var Cea608708SubtitleConfiguration */
    public $cea608708SubtitleConfig;

    /** @var int */
    public $deblockAlpha;

    /** @var int */
    public $deblockBeta;

    /** @var AdaptiveQuantMode */
    public $adaptiveQuantizationMode;

    /** @var float */
    public $adaptiveQuantizationStrength;

    /** @var bool */
    public $mixedReferences;

    /** @var bool */
    public $adaptiveSpatialTransform;

    /** @var bool */
    public $fastSkipDetectionPFrames;

    /** @var bool */
    public $weightedPredictionBFrames;

    /** @var WeightedPredictionPFrames */
    public $weightedPredictionPFrames;

    /** @var bool */
    public $macroblockTreeRatecontrol;

    /** @var float */
    public $quantizerCurveCompression;

    /** @var float */
    public $psyRateDistortionOptimization;

    /** @var float */
    public $psyTrellis;

    /** @var AutoLevelSetup */
    public $autoLevelSetup;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->presetConfiguration = ObjectMapper::map($this->presetConfiguration, PresetConfiguration::class);
        $this->dynamicRangeFormat = ObjectMapper::map($this->dynamicRangeFormat, H264DynamicRangeFormat::class);
        $this->profile = ObjectMapper::map($this->profile, ProfileH264::class);
        $this->mvPredictionMode = ObjectMapper::map($this->mvPredictionMode, MvPredictionMode::class);
        $this->level = ObjectMapper::map($this->level, LevelH264::class);
        $this->bAdaptiveStrategy = ObjectMapper::map($this->bAdaptiveStrategy, BAdapt::class);
        $this->motionEstimationMethod = ObjectMapper::map($this->motionEstimationMethod, H264MotionEstimationMethod::class);
        $this->subMe = ObjectMapper::map($this->subMe, H264SubMe::class);
        $this->trellis = ObjectMapper::map($this->trellis, H264Trellis::class);
        $this->partitions = ObjectMapper::map($this->partitions, H264Partition::class);
        $this->interlaceMode = ObjectMapper::map($this->interlaceMode, H264InterlaceMode::class);
        $this->nalHrd = ObjectMapper::map($this->nalHrd, H264NalHrd::class);
        $this->bPyramid = ObjectMapper::map($this->bPyramid, H264BPyramid::class);
        $this->cea608708SubtitleConfig = ObjectMapper::map($this->cea608708SubtitleConfig, Cea608708SubtitleConfiguration::class);
        $this->adaptiveQuantizationMode = ObjectMapper::map($this->adaptiveQuantizationMode, AdaptiveQuantMode::class);
        $this->weightedPredictionPFrames = ObjectMapper::map($this->weightedPredictionPFrames, WeightedPredictionPFrames::class);
        $this->autoLevelSetup = ObjectMapper::map($this->autoLevelSetup, AutoLevelSetup::class);
    }

    /**
     * Choose from a set of preset configurations tailored for common use cases. Check out [H264 Presets](https://bitmovin.com/docs/encoding/tutorials/h264-presets) to see which values get applied by each preset. Explicitly setting a property to a different value will override the preset&#39;s value for that property.
     *
     * @param PresetConfiguration $presetConfiguration
     * @return $this
     */
    public function presetConfiguration(PresetConfiguration $presetConfiguration)
    {
        $this->presetConfiguration = $presetConfiguration;

        return $this;
    }

    /**
     * Automatically configures the H264 Video Codec to be compatible with the given SDR format. Bitmovin recommends to use the dynamic range format together with a preset configuration to achieve good results. Explicitly configured properties will take precedence over dynamic range format settings, which in turn will take precedence over preset configurations.
     *
     * @param H264DynamicRangeFormat $dynamicRangeFormat
     * @return $this
     */
    public function dynamicRangeFormat(H264DynamicRangeFormat $dynamicRangeFormat)
    {
        $this->dynamicRangeFormat = $dynamicRangeFormat;

        return $this;
    }

    /**
     * Constant rate factor for quality-based variable bitrate. Either bitrate or crf is required.
     *
     * @param float $crf
     * @return $this
     */
    public function crf(float $crf)
    {
        $this->crf = $crf;

        return $this;
    }

    /**
     * When setting a profile, all other settings must not exceed the limits which are defined in the profile. Otherwise, a higher profile may be automatically chosen. (required)
     *
     * @param ProfileH264 $profile
     * @return $this
     */
    public function profile(ProfileH264 $profile)
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * Amount of b frames
     *
     * @param int $bframes
     * @return $this
     */
    public function bframes(int $bframes)
    {
        $this->bframes = $bframes;

        return $this;
    }

    /**
     * Amount of reference frames.
     *
     * @param int $refFrames
     * @return $this
     */
    public function refFrames(int $refFrames)
    {
        $this->refFrames = $refFrames;

        return $this;
    }

    /**
     * Minimum quantization factor
     *
     * @param int $qpMin
     * @return $this
     */
    public function qpMin(int $qpMin)
    {
        $this->qpMin = $qpMin;

        return $this;
    }

    /**
     * Maximum quantization factor
     *
     * @param int $qpMax
     * @return $this
     */
    public function qpMax(int $qpMax)
    {
        $this->qpMax = $qpMax;

        return $this;
    }

    /**
     * mvPredictionMode
     *
     * @param MvPredictionMode $mvPredictionMode
     * @return $this
     */
    public function mvPredictionMode(MvPredictionMode $mvPredictionMode)
    {
        $this->mvPredictionMode = $mvPredictionMode;

        return $this;
    }

    /**
     * Maximum motion vector search range
     *
     * @param int $mvSearchRangeMax
     * @return $this
     */
    public function mvSearchRangeMax(int $mvSearchRangeMax)
    {
        $this->mvSearchRangeMax = $mvSearchRangeMax;

        return $this;
    }

    /**
     * Enable or disable CABAC
     *
     * @param bool $cabac
     * @return $this
     */
    public function cabac(bool $cabac)
    {
        $this->cabac = $cabac;

        return $this;
    }

    /**
     * Maximum Bitrate
     *
     * @param int $maxBitrate
     * @return $this
     */
    public function maxBitrate(int $maxBitrate)
    {
        $this->maxBitrate = $maxBitrate;

        return $this;
    }

    /**
     * Minimum Bitrate
     *
     * @param int $minBitrate
     * @return $this
     */
    public function minBitrate(int $minBitrate)
    {
        $this->minBitrate = $minBitrate;

        return $this;
    }

    /**
     * Playback device buffer size
     *
     * @param int $bufsize
     * @return $this
     */
    public function bufsize(int $bufsize)
    {
        $this->bufsize = $bufsize;

        return $this;
    }

    /**
     * Minimum GOP length, the minimum distance between I-frames
     *
     * @param int $minGop
     * @return $this
     */
    public function minGop(int $minGop)
    {
        $this->minGop = $minGop;

        return $this;
    }

    /**
     * Maximum GOP length, the maximum distance between I-frames
     *
     * @param int $maxGop
     * @return $this
     */
    public function maxGop(int $maxGop)
    {
        $this->maxGop = $maxGop;

        return $this;
    }

    /**
     * Enable open-gop, allows referencing frames from a previous gop
     *
     * @param bool $openGop
     * @return $this
     */
    public function openGop(bool $openGop)
    {
        $this->openGop = $openGop;

        return $this;
    }

    /**
     * Minimum interval in seconds between key frames
     *
     * @param float $minKeyframeInterval
     * @return $this
     */
    public function minKeyframeInterval(float $minKeyframeInterval)
    {
        $this->minKeyframeInterval = $minKeyframeInterval;

        return $this;
    }

    /**
     * Maximum interval in seconds between key frames
     *
     * @param float $maxKeyframeInterval
     * @return $this
     */
    public function maxKeyframeInterval(float $maxKeyframeInterval)
    {
        $this->maxKeyframeInterval = $maxKeyframeInterval;

        return $this;
    }

    /**
     * If three-pass encoding is used and a level is set for the encoder, the bitrate for some segments may exceed the bitrate limit which is defined by the level.
     *
     * @param LevelH264 $level
     * @return $this
     */
    public function level(LevelH264 $level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * bAdaptiveStrategy
     *
     * @param BAdapt $bAdaptiveStrategy
     * @return $this
     */
    public function bAdaptiveStrategy(BAdapt $bAdaptiveStrategy)
    {
        $this->bAdaptiveStrategy = $bAdaptiveStrategy;

        return $this;
    }

    /**
     * motionEstimationMethod
     *
     * @param H264MotionEstimationMethod $motionEstimationMethod
     * @return $this
     */
    public function motionEstimationMethod(H264MotionEstimationMethod $motionEstimationMethod)
    {
        $this->motionEstimationMethod = $motionEstimationMethod;

        return $this;
    }

    /**
     * Number of frames for frame-type decision lookahead
     *
     * @param int $rcLookahead
     * @return $this
     */
    public function rcLookahead(int $rcLookahead)
    {
        $this->rcLookahead = $rcLookahead;

        return $this;
    }

    /**
     * Subpixel motion estimation and mode decision
     *
     * @param H264SubMe $subMe
     * @return $this
     */
    public function subMe(H264SubMe $subMe)
    {
        $this->subMe = $subMe;

        return $this;
    }

    /**
     * Enables or disables Trellis quantization. NOTE: This requires cabac
     *
     * @param H264Trellis $trellis
     * @return $this
     */
    public function trellis(H264Trellis $trellis)
    {
        $this->trellis = $trellis;

        return $this;
    }

    /**
     * Partitions to consider. Analyzing more partition options improves quality at the cost of speed.
     *
     * @param \BitmovinApiSdk\Models\H264Partition[] $partitions
     * @return $this
     */
    public function partitions(array $partitions)
    {
        $this->partitions = $partitions;

        return $this;
    }

    /**
     * Number of slices per frame.
     *
     * @param int $slices
     * @return $this
     */
    public function slices(int $slices)
    {
        $this->slices = $slices;

        return $this;
    }

    /**
     * Using TOP_FIELD_FIRST or BOTTOM_FIELD_FIRST will output interlaced video
     *
     * @param H264InterlaceMode $interlaceMode
     * @return $this
     */
    public function interlaceMode(H264InterlaceMode $interlaceMode)
    {
        $this->interlaceMode = $interlaceMode;

        return $this;
    }

    /**
     * Scene change sensitivity. The higher the value, the more likely an I-frame will be inserted. Set to 0 to disable it which is advised for scenarios where fixed GOP is required, e.g., adaptive streaming outputs like DASH, HLS and Smooth. Having this setting enabled can improve quality for progressive output with an increased internal chunk length (see &#x60;internalChunkLength&#x60; of muxings).
     *
     * @param int $sceneCutThreshold
     * @return $this
     */
    public function sceneCutThreshold(int $sceneCutThreshold)
    {
        $this->sceneCutThreshold = $sceneCutThreshold;

        return $this;
    }

    /**
     * Signal hypothetical reference decoder (HRD) information (requires bufsize to be set)
     *
     * @param H264NalHrd $nalHrd
     * @return $this
     */
    public function nalHrd(H264NalHrd $nalHrd)
    {
        $this->nalHrd = $nalHrd;

        return $this;
    }

    /**
     * Keep some B-frames as references
     *
     * @param H264BPyramid $bPyramid
     * @return $this
     */
    public function bPyramid(H264BPyramid $bPyramid)
    {
        $this->bPyramid = $bPyramid;

        return $this;
    }

    /**
     * Defines whether CEA 608/708 subtitles are copied from the input video stream
     *
     * @param Cea608708SubtitleConfiguration $cea608708SubtitleConfig
     * @return $this
     */
    public function cea608708SubtitleConfig(Cea608708SubtitleConfiguration $cea608708SubtitleConfig)
    {
        $this->cea608708SubtitleConfig = $cea608708SubtitleConfig;

        return $this;
    }

    /**
     * Strength of the in-loop deblocking filter. Higher values deblock more effectively but also soften the image
     *
     * @param int $deblockAlpha
     * @return $this
     */
    public function deblockAlpha(int $deblockAlpha)
    {
        $this->deblockAlpha = $deblockAlpha;

        return $this;
    }

    /**
     * Threshold of the in-loop deblocking filter. Higher values apply deblocking stronger on non flat blocks, lower values on flat blocks
     *
     * @param int $deblockBeta
     * @return $this
     */
    public function deblockBeta(int $deblockBeta)
    {
        $this->deblockBeta = $deblockBeta;

        return $this;
    }

    /**
     * Controls the adaptive quantization algorithm
     *
     * @param AdaptiveQuantMode $adaptiveQuantizationMode
     * @return $this
     */
    public function adaptiveQuantizationMode(AdaptiveQuantMode $adaptiveQuantizationMode)
    {
        $this->adaptiveQuantizationMode = $adaptiveQuantizationMode;

        return $this;
    }

    /**
     * Values greater than 1 reduce blocking and blurring in flat and textured areas. Values less than 1 reduces ringing artifacts at the cost of more banding artifacts. Negative values are not allowed
     *
     * @param float $adaptiveQuantizationStrength
     * @return $this
     */
    public function adaptiveQuantizationStrength(float $adaptiveQuantizationStrength)
    {
        $this->adaptiveQuantizationStrength = $adaptiveQuantizationStrength;

        return $this;
    }

    /**
     * Allow references on a per partition basis, rather than per-macroblock basis
     *
     * @param bool $mixedReferences
     * @return $this
     */
    public function mixedReferences(bool $mixedReferences)
    {
        $this->mixedReferences = $mixedReferences;

        return $this;
    }

    /**
     * Enables adaptive spatial transform (high profile 8x8 transform)
     *
     * @param bool $adaptiveSpatialTransform
     * @return $this
     */
    public function adaptiveSpatialTransform(bool $adaptiveSpatialTransform)
    {
        $this->adaptiveSpatialTransform = $adaptiveSpatialTransform;

        return $this;
    }

    /**
     * Enables fast skip detection on P-frames. Disabling this very slightly increases quality but at a large speed loss
     *
     * @param bool $fastSkipDetectionPFrames
     * @return $this
     */
    public function fastSkipDetectionPFrames(bool $fastSkipDetectionPFrames)
    {
        $this->fastSkipDetectionPFrames = $fastSkipDetectionPFrames;

        return $this;
    }

    /**
     * Enable open-gop, allows referencing frames from a previous gop
     *
     * @param bool $weightedPredictionBFrames
     * @return $this
     */
    public function weightedPredictionBFrames(bool $weightedPredictionBFrames)
    {
        $this->weightedPredictionBFrames = $weightedPredictionBFrames;

        return $this;
    }

    /**
     * Defines the mode for weighted prediction for P-frames
     *
     * @param WeightedPredictionPFrames $weightedPredictionPFrames
     * @return $this
     */
    public function weightedPredictionPFrames(WeightedPredictionPFrames $weightedPredictionPFrames)
    {
        $this->weightedPredictionPFrames = $weightedPredictionPFrames;

        return $this;
    }

    /**
     * Enable macroblock tree ratecontrol. Macroblock tree rate control tracks how often blocks of the frame are used for prediciting future frames
     *
     * @param bool $macroblockTreeRatecontrol
     * @return $this
     */
    public function macroblockTreeRatecontrol(bool $macroblockTreeRatecontrol)
    {
        $this->macroblockTreeRatecontrol = $macroblockTreeRatecontrol;

        return $this;
    }

    /**
     * Ratio between constant bitrate (0.0) and constant quantizer (1.0). Valid range 0.0 - 1.0
     *
     * @param float $quantizerCurveCompression
     * @return $this
     */
    public function quantizerCurveCompression(float $quantizerCurveCompression)
    {
        $this->quantizerCurveCompression = $quantizerCurveCompression;

        return $this;
    }

    /**
     * Psychovisual Rate Distortion retains fine details like film grain at the expense of more blocking artifacts. Higher values make the video appear sharper and more detailed but with a higher risk of blocking artifacts. Needs to have subMe with RD_IP, RD_ALL, RD_REF_IP or RD_REF_ALL
     *
     * @param float $psyRateDistortionOptimization
     * @return $this
     */
    public function psyRateDistortionOptimization(float $psyRateDistortionOptimization)
    {
        $this->psyRateDistortionOptimization = $psyRateDistortionOptimization;

        return $this;
    }

    /**
     * Higher values will improve sharpness and detail retention but might come at costs of artifacts. Needs to have trellis enabled
     *
     * @param float $psyTrellis
     * @return $this
     */
    public function psyTrellis(float $psyTrellis)
    {
        $this->psyTrellis = $psyTrellis;

        return $this;
    }

    /**
     * Enable/disable automatic calculation of level, maxBitrate, and bufsize based on the least level that satisfies maximum property values for picture resolution, frame rate, and bit rate. In the case the target level is set explicitly, the maximum bitrate and buffer size are calculated based on the defined level. Explicitly setting maxBitrate, or bufsize properties will disable the automatic calculation.
     *
     * @param AutoLevelSetup $autoLevelSetup
     * @return $this
     */
    public function autoLevelSetup(AutoLevelSetup $autoLevelSetup)
    {
        $this->autoLevelSetup = $autoLevelSetup;

        return $this;
    }
}

