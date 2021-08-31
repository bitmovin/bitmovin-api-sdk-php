<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class H265VideoConfiguration extends VideoConfiguration
{
    /** @var PresetConfiguration */
    public $presetConfiguration;

    /** @var float */
    public $crf;

    /** @var ProfileH265 */
    public $profile;

    /** @var int */
    public $bframes;

    /** @var int */
    public $refFrames;

    /** @var int */
    public $qp;

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

    /** @var LevelH265 */
    public $level;

    /** @var int */
    public $rcLookahead;

    /** @var BAdapt */
    public $bAdapt;

    /** @var MaxCtuSize */
    public $maxCTUSize;

    /** @var TuIntraDepth */
    public $tuIntraDepth;

    /** @var TuInterDepth */
    public $tuInterDepth;

    /** @var MotionSearch */
    public $motionSearch;

    /** @var int */
    public $subMe;

    /** @var int */
    public $motionSearchRange;

    /** @var bool */
    public $weightPredictionOnPSlice;

    /** @var bool */
    public $weightPredictionOnBSlice;

    /** @var bool */
    public $sao;

    /** @var string */
    public $masterDisplay;

    /** @var int */
    public $maxContentLightLevel;

    /** @var int */
    public $maxPictureAverageLightLevel;

    /** @var bool */
    public $hdr;

    /** @var int */
    public $sceneCutThreshold;

    /** @var AdaptiveQuantMode */
    public $adaptiveQuantizationMode;

    /** @var bool */
    public $enableHlgSignaling;

    /** @var VideoFormat */
    public $videoFormat;

    /** @var float */
    public $psyRateDistortionOptimization;

    /** @var float */
    public $psyRateDistortionOptimizedQuantization;

    /** @var bool */
    public $enableHrdSignaling;

    /** @var bool */
    public $cutree;

    /** @var MinCodingUnitSize */
    public $minCodingUnitSize;

    /** @var int */
    public $lookaheadSlices;

    /** @var LimitReferences */
    public $limitReferences;

    /** @var bool */
    public $rectangularMotionPartitionsAnalysis;

    /** @var bool */
    public $asymetricMotionPartitionsAnalysis;

    /** @var bool */
    public $limitModes;

    /** @var int */
    public $maxMerge;

    /** @var bool */
    public $earlySkip;

    /** @var bool */
    public $recursionSkip;

    /** @var bool */
    public $fastSearchForAngularIntraPredictions;

    /** @var bool */
    public $evaluationOfIntraModesInBSlices;

    /** @var bool */
    public $signHide;

    /** @var int */
    public $rateDistortionLevelForModeDecision;

    /** @var RateDistortionLevelForQuantization */
    public $rateDistortionLevelForQuantization;

    /** @var int */
    public $qpMin;

    /** @var int */
    public $qpMax;

    /** @var bool */
    public $wavefrontParallelProcessing;

    /** @var int */
    public $slices;

    /** @var bool */
    public $copyPicture;

    /** @var bool */
    public $levelHighTier;

    /** @var bool */
    public $skipSplitRateDistortionAnalysis;

    /** @var bool */
    public $codingUnitLossless;

    /** @var TransformSkipMode */
    public $transformSkip;

    /** @var bool */
    public $refineRateDistortionCost;

    /** @var LimitTransformUnitDepthRecursionMode */
    public $limitTransformUnitDepthRecursion;

    /** @var int */
    public $noiseReductionIntra;

    /** @var int */
    public $noiseReductionInter;

    /** @var RateDistortionPenaltyMode */
    public $rateDistortionPenalty;

    /** @var MaxTransformUnitSize */
    public $maximumTransformUnitSize;

    /** @var int */
    public $dynamicRateDistortionStrength;

    /** @var bool */
    public $ssimRateDistortionOptimization;

    /** @var bool */
    public $temporalMotionVectorPredictors;

    /** @var bool */
    public $analyzeSourceFramePixels;

    /** @var bool */
    public $strongIntraSmoothing;

    /** @var bool */
    public $constrainedIntraPrediction;

    /** @var float */
    public $scenecutBias;

    /** @var int */
    public $allowedRADLBeforeIDR;

    /** @var int */
    public $gopLookahead;

    /** @var int */
    public $bframeBias;

    /** @var ForceFlushMode */
    public $forceFlush;

    /** @var float */
    public $adaptiveQuantizationStrength;

    /** @var bool */
    public $adaptiveQuantizationMotion;

    /** @var QuantizationGroupSize */
    public $quantizationGroupSize;

    /** @var bool */
    public $strictCbr;

    /** @var int */
    public $qpOffsetChromaCb;

    /** @var int */
    public $qpOffsetChromaCr;

    /** @var float */
    public $ipRatio;

    /** @var float */
    public $pbRatio;

    /** @var float */
    public $quantizerCurveCompressionFactor;

    /** @var int */
    public $qpStep;

    /** @var bool */
    public $grainOptimizedRateControl;

    /** @var float */
    public $blurQuants;

    /** @var float */
    public $blurComplexity;

    /** @var bool */
    public $saoNonDeblock;

    /** @var bool */
    public $limitSao;

    /** @var bool */
    public $lowpassDct;

    /** @var Cea608708SubtitleConfiguration */
    public $cea608708SubtitleConfig;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->presetConfiguration = ObjectMapper::map($this->presetConfiguration, PresetConfiguration::class);
        $this->profile = ObjectMapper::map($this->profile, ProfileH265::class);
        $this->level = ObjectMapper::map($this->level, LevelH265::class);
        $this->bAdapt = ObjectMapper::map($this->bAdapt, BAdapt::class);
        $this->maxCTUSize = ObjectMapper::map($this->maxCTUSize, MaxCtuSize::class);
        $this->tuIntraDepth = ObjectMapper::map($this->tuIntraDepth, TuIntraDepth::class);
        $this->tuInterDepth = ObjectMapper::map($this->tuInterDepth, TuInterDepth::class);
        $this->motionSearch = ObjectMapper::map($this->motionSearch, MotionSearch::class);
        $this->adaptiveQuantizationMode = ObjectMapper::map($this->adaptiveQuantizationMode, AdaptiveQuantMode::class);
        $this->videoFormat = ObjectMapper::map($this->videoFormat, VideoFormat::class);
        $this->minCodingUnitSize = ObjectMapper::map($this->minCodingUnitSize, MinCodingUnitSize::class);
        $this->limitReferences = ObjectMapper::map($this->limitReferences, LimitReferences::class);
        $this->rateDistortionLevelForQuantization = ObjectMapper::map($this->rateDistortionLevelForQuantization, RateDistortionLevelForQuantization::class);
        $this->transformSkip = ObjectMapper::map($this->transformSkip, TransformSkipMode::class);
        $this->limitTransformUnitDepthRecursion = ObjectMapper::map($this->limitTransformUnitDepthRecursion, LimitTransformUnitDepthRecursionMode::class);
        $this->rateDistortionPenalty = ObjectMapper::map($this->rateDistortionPenalty, RateDistortionPenaltyMode::class);
        $this->maximumTransformUnitSize = ObjectMapper::map($this->maximumTransformUnitSize, MaxTransformUnitSize::class);
        $this->forceFlush = ObjectMapper::map($this->forceFlush, ForceFlushMode::class);
        $this->quantizationGroupSize = ObjectMapper::map($this->quantizationGroupSize, QuantizationGroupSize::class);
        $this->cea608708SubtitleConfig = ObjectMapper::map($this->cea608708SubtitleConfig, Cea608708SubtitleConfiguration::class);
    }

    /**
     * Choose from a set of preset configurations tailored for common use cases. Check out [H265 Presets](https://bitmovin.com/docs/encoding/tutorials/h265-presets) to see which values get applied by each preset. Explicitly setting a property to a different value will override the preset&#39;s value for that property.
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
     * Sets the constant rate factor for quality-based variable bitrate. Either bitrate or crf is required.
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
     * profile
     *
     * @param ProfileH265 $profile
     * @return $this
     */
    public function profile(ProfileH265 $profile)
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * Sets the amount of b frames
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
     * Sets the amount of reference frames
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
     * Sets the quantization factor
     *
     * @param int $qp
     * @return $this
     */
    public function qp(int $qp)
    {
        $this->qp = $qp;

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
     * Specify the size of the VBV buffer (kbits)
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
     * level
     *
     * @param LevelH265 $level
     * @return $this
     */
    public function level(LevelH265 $level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Number of frames for slice-type decision lookahead
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
     * Set the level of effort in determining B frame placement
     *
     * @param BAdapt $bAdapt
     * @return $this
     */
    public function bAdapt(BAdapt $bAdapt)
    {
        $this->bAdapt = $bAdapt;

        return $this;
    }

    /**
     * maxCTUSize
     *
     * @param MaxCtuSize $maxCTUSize
     * @return $this
     */
    public function maxCTUSize(MaxCtuSize $maxCTUSize)
    {
        $this->maxCTUSize = $maxCTUSize;

        return $this;
    }

    /**
     * tuIntraDepth
     *
     * @param TuIntraDepth $tuIntraDepth
     * @return $this
     */
    public function tuIntraDepth(TuIntraDepth $tuIntraDepth)
    {
        $this->tuIntraDepth = $tuIntraDepth;

        return $this;
    }

    /**
     * tuInterDepth
     *
     * @param TuInterDepth $tuInterDepth
     * @return $this
     */
    public function tuInterDepth(TuInterDepth $tuInterDepth)
    {
        $this->tuInterDepth = $tuInterDepth;

        return $this;
    }

    /**
     * motionSearch
     *
     * @param MotionSearch $motionSearch
     * @return $this
     */
    public function motionSearch(MotionSearch $motionSearch)
    {
        $this->motionSearch = $motionSearch;

        return $this;
    }

    /**
     * Set the amount of subpel refinement to perform.
     *
     * @param int $subMe
     * @return $this
     */
    public function subMe(int $subMe)
    {
        $this->subMe = $subMe;

        return $this;
    }

    /**
     * Set the Motion search range.
     *
     * @param int $motionSearchRange
     * @return $this
     */
    public function motionSearchRange(int $motionSearchRange)
    {
        $this->motionSearchRange = $motionSearchRange;

        return $this;
    }

    /**
     * Enable weighted prediction in P slices
     *
     * @param bool $weightPredictionOnPSlice
     * @return $this
     */
    public function weightPredictionOnPSlice(bool $weightPredictionOnPSlice)
    {
        $this->weightPredictionOnPSlice = $weightPredictionOnPSlice;

        return $this;
    }

    /**
     * Enable weighted prediction in B slices
     *
     * @param bool $weightPredictionOnBSlice
     * @return $this
     */
    public function weightPredictionOnBSlice(bool $weightPredictionOnBSlice)
    {
        $this->weightPredictionOnBSlice = $weightPredictionOnBSlice;

        return $this;
    }

    /**
     * Toggle sample adaptive offset loop filter
     *
     * @param bool $sao
     * @return $this
     */
    public function sao(bool $sao)
    {
        $this->sao = $sao;

        return $this;
    }

    /**
     * Set the mastering display color volume SEI info (SMPTE ST 2086). For example &#x60;G(13250,34500)B(7500,3000)R(34000,16000)WP(15635,16450)L(10000000,1)&#x60; describes a P3D65 1000-nits monitor, where G(x&#x3D;0.265, y&#x3D;0.690), B(x&#x3D;0.150, y&#x3D;0.060), R(x&#x3D;0.680, y&#x3D;0.320), WP(x&#x3D;0.3127, y&#x3D;0.3290), L(max&#x3D;1000, min&#x3D;0.0001). Part of HDR-10 metadata. If used on a Dolby Vision stream, this value must be set to &#x60;G(13250,34500)B(7500,3000)R(34000,16000)WP(15635,16450)L(10000000,1)&#x60;.
     *
     * @param string $masterDisplay
     * @return $this
     */
    public function masterDisplay(string $masterDisplay)
    {
        $this->masterDisplay = $masterDisplay;

        return $this;
    }

    /**
     * Set the max content light level (MaxCLL). Use together with maxPictureAverageLightLevel (which will be 0 if not set). Part of HDR-10 metadata.
     *
     * @param int $maxContentLightLevel
     * @return $this
     */
    public function maxContentLightLevel(int $maxContentLightLevel)
    {
        $this->maxContentLightLevel = $maxContentLightLevel;

        return $this;
    }

    /**
     * Set the maximum picture average light level (MaxFALL). Use together with maxContentLightLevel (which will be 0 if not set). Part of HDR-10 metadata.
     *
     * @param int $maxPictureAverageLightLevel
     * @return $this
     */
    public function maxPictureAverageLightLevel(int $maxPictureAverageLightLevel)
    {
        $this->maxPictureAverageLightLevel = $maxPictureAverageLightLevel;

        return $this;
    }

    /**
     * Force signaling of HDR parameters in SEI packets. Enabled automatically when masterDisplay or maxContentLightLevel/maxPictureAverageLightLevel are set. Useful when there is a desire to signal 0 values for maxContentLightLevel and maxPictureAverageLightLevel.
     *
     * @param bool $hdr
     * @return $this
     */
    public function hdr(bool $hdr)
    {
        $this->hdr = $hdr;

        return $this;
    }

    /**
     * Scene Change sensitivity. The higher the value, the more likely an I-Frame will be inserted. Set to 0 to disable it.
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
     * By enabling this video stream will be signaled as HLG
     *
     * @param bool $enableHlgSignaling
     * @return $this
     */
    public function enableHlgSignaling(bool $enableHlgSignaling)
    {
        $this->enableHlgSignaling = $enableHlgSignaling;

        return $this;
    }

    /**
     * Specifies the source format of the original analog video prior to digitizing and encoding
     *
     * @param VideoFormat $videoFormat
     * @return $this
     */
    public function videoFormat(VideoFormat $videoFormat)
    {
        $this->videoFormat = $videoFormat;

        return $this;
    }

    /**
     * Psycho-visual rate-distortion retains fine details like film grain at the expense of more blocking artifacts. Higher values make the video appear sharper and more detailed but with a higher risk of blocking artifacts. Needs to have subMe with RD_IP, RD_ALL, RD_REF_IP, RD_REF_ALL, QPRD or FULL_RD
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
     * Strength of psycho-visual optimizations in quantization. Only has an effect in presets which use RDOQ (rd-levels 4 and 5). The value must be between 0 and 50, 1.0 is typical
     *
     * @param float $psyRateDistortionOptimizedQuantization
     * @return $this
     */
    public function psyRateDistortionOptimizedQuantization(float $psyRateDistortionOptimizedQuantization)
    {
        $this->psyRateDistortionOptimizedQuantization = $psyRateDistortionOptimizedQuantization;

        return $this;
    }

    /**
     * Signal hypothetical reference decoder (HRD) information
     *
     * @param bool $enableHrdSignaling
     * @return $this
     */
    public function enableHrdSignaling(bool $enableHrdSignaling)
    {
        $this->enableHrdSignaling = $enableHrdSignaling;

        return $this;
    }

    /**
     * Enables the use of lookahead’s lowres motion vector fields to determine the amount of reuse of each block to tune adaptive quantization factors.
     *
     * @param bool $cutree
     * @return $this
     */
    public function cutree(bool $cutree)
    {
        $this->cutree = $cutree;

        return $this;
    }

    /**
     * Minimum CU size (width and height). By using 16 or 32 the encoder will not analyze the cost of CUs below that minimum threshold, saving considerable amounts of compute with a predictable increase in bitrate. This setting has a large effect on performance on the faster presets.
     *
     * @param MinCodingUnitSize $minCodingUnitSize
     * @return $this
     */
    public function minCodingUnitSize(MinCodingUnitSize $minCodingUnitSize)
    {
        $this->minCodingUnitSize = $minCodingUnitSize;

        return $this;
    }

    /**
     * Use multiple worker threads to measure the estimated cost of each frame within the lookahead. The higher this parameter, the less accurate the frame costs will be which will result in less accurate B-frame and scene-cut decisions. Valid range: 0 - 16
     *
     * @param int $lookaheadSlices
     * @return $this
     */
    public function lookaheadSlices(int $lookaheadSlices)
    {
        $this->lookaheadSlices = $lookaheadSlices;

        return $this;
    }

    /**
     * If enabled, limit references per depth, CU or both.
     *
     * @param LimitReferences $limitReferences
     * @return $this
     */
    public function limitReferences(LimitReferences $limitReferences)
    {
        $this->limitReferences = $limitReferences;

        return $this;
    }

    /**
     * Enable analysis of rectangular motion partitions Nx2N and 2NxN.
     *
     * @param bool $rectangularMotionPartitionsAnalysis
     * @return $this
     */
    public function rectangularMotionPartitionsAnalysis(bool $rectangularMotionPartitionsAnalysis)
    {
        $this->rectangularMotionPartitionsAnalysis = $rectangularMotionPartitionsAnalysis;

        return $this;
    }

    /**
     * Enable analysis of asymmetric motion partitions.
     *
     * @param bool $asymetricMotionPartitionsAnalysis
     * @return $this
     */
    public function asymetricMotionPartitionsAnalysis(bool $asymetricMotionPartitionsAnalysis)
    {
        $this->asymetricMotionPartitionsAnalysis = $asymetricMotionPartitionsAnalysis;

        return $this;
    }

    /**
     * When enabled, will limit modes analyzed for each CU using cost metrics from the 4 sub-CUs. This can significantly improve performance when &#x60;rectangularMotionPartitionsAnalysis&#x60; and/or &#x60;asymetricMotionPartitionsAnalysis&#x60; are enabled at minimal compression efficiency loss.
     *
     * @param bool $limitModes
     * @return $this
     */
    public function limitModes(bool $limitModes)
    {
        $this->limitModes = $limitModes;

        return $this;
    }

    /**
     * Maximum number of neighbor (spatial and temporal) candidate blocks that the encoder may consider for merging motion predictions. Valid range: 1 - 5
     *
     * @param int $maxMerge
     * @return $this
     */
    public function maxMerge(int $maxMerge)
    {
        $this->maxMerge = $maxMerge;

        return $this;
    }

    /**
     * Measure 2Nx2N merge candidates first; if no residual is found, additional modes at that depth are not analysed.
     *
     * @param bool $earlySkip
     * @return $this
     */
    public function earlySkip(bool $earlySkip)
    {
        $this->earlySkip = $earlySkip;

        return $this;
    }

    /**
     * If enabled exits early from CU depth recursion. When a skip CU is found, additional heuristics are used to decide whether to terminate recursion.
     *
     * @param bool $recursionSkip
     * @return $this
     */
    public function recursionSkip(bool $recursionSkip)
    {
        $this->recursionSkip = $recursionSkip;

        return $this;
    }

    /**
     * Enable faster search method for angular intra predictions.
     *
     * @param bool $fastSearchForAngularIntraPredictions
     * @return $this
     */
    public function fastSearchForAngularIntraPredictions(bool $fastSearchForAngularIntraPredictions)
    {
        $this->fastSearchForAngularIntraPredictions = $fastSearchForAngularIntraPredictions;

        return $this;
    }

    /**
     * Enables the evaluation of intra modes in B slices.
     *
     * @param bool $evaluationOfIntraModesInBSlices
     * @return $this
     */
    public function evaluationOfIntraModesInBSlices(bool $evaluationOfIntraModesInBSlices)
    {
        $this->evaluationOfIntraModesInBSlices = $evaluationOfIntraModesInBSlices;

        return $this;
    }

    /**
     * Hide sign bit of one coefficient per coding tree unit.
     *
     * @param bool $signHide
     * @return $this
     */
    public function signHide(bool $signHide)
    {
        $this->signHide = $signHide;

        return $this;
    }

    /**
     * Level of rate-distortion optimization in mode decision. The lower the value the faster the encode, the higher the value higher the compression efficiency. Valid range: 0 - 4
     *
     * @param int $rateDistortionLevelForModeDecision
     * @return $this
     */
    public function rateDistortionLevelForModeDecision(int $rateDistortionLevelForModeDecision)
    {
        $this->rateDistortionLevelForModeDecision = $rateDistortionLevelForModeDecision;

        return $this;
    }

    /**
     * Specify the amount of rate-distortion analysis to use within quantization.
     *
     * @param RateDistortionLevelForQuantization $rateDistortionLevelForQuantization
     * @return $this
     */
    public function rateDistortionLevelForQuantization(RateDistortionLevelForQuantization $rateDistortionLevelForQuantization)
    {
        $this->rateDistortionLevelForQuantization = $rateDistortionLevelForQuantization;

        return $this;
    }

    /**
     * Sets the minimum of quantization factor. Valid value range: 0 - 69
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
     * Sets the maximum of quantization factor. Valid value range: 0 - 69
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
     * The encoder may begin encoding a row as soon as the row above it is at least two CTUs ahead in the encode process. Default is enabled.
     *
     * @param bool $wavefrontParallelProcessing
     * @return $this
     */
    public function wavefrontParallelProcessing(bool $wavefrontParallelProcessing)
    {
        $this->wavefrontParallelProcessing = $wavefrontParallelProcessing;

        return $this;
    }

    /**
     * Encode each incoming frame as multiple parallel slices that may be decoded independently. Default is 1.
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
     * Copy buffers of input picture in frame. Default is enabled.
     *
     * @param bool $copyPicture
     * @return $this
     */
    public function copyPicture(bool $copyPicture)
    {
        $this->copyPicture = $copyPicture;

        return $this;
    }

    /**
     * If high tier is disabled the encoder will attempt to encode only at the main tier. Default is enabled.
     *
     * @param bool $levelHighTier
     * @return $this
     */
    public function levelHighTier(bool $levelHighTier)
    {
        $this->levelHighTier = $levelHighTier;

        return $this;
    }

    /**
     * Enable skipping split rate distortion analysis when sum of split CU RD cost larger than one split CU RD cost for intra CU. Default disabled.
     *
     * @param bool $skipSplitRateDistortionAnalysis
     * @return $this
     */
    public function skipSplitRateDistortionAnalysis(bool $skipSplitRateDistortionAnalysis)
    {
        $this->skipSplitRateDistortionAnalysis = $skipSplitRateDistortionAnalysis;

        return $this;
    }

    /**
     * If enabled, consider lossless mode in CU RDO decisions. Default is disabled.
     *
     * @param bool $codingUnitLossless
     * @return $this
     */
    public function codingUnitLossless(bool $codingUnitLossless)
    {
        $this->codingUnitLossless = $codingUnitLossless;

        return $this;
    }

    /**
     * Enable evaluation of transform skip (bypass DCT but still use quantization) coding for 4x4 TU coded blocks. Default is NONE.
     *
     * @param TransformSkipMode $transformSkip
     * @return $this
     */
    public function transformSkip(TransformSkipMode $transformSkip)
    {
        $this->transformSkip = $transformSkip;

        return $this;
    }

    /**
     * Enable QP based rate distortion refinement. Default is disabled.
     *
     * @param bool $refineRateDistortionCost
     * @return $this
     */
    public function refineRateDistortionCost(bool $refineRateDistortionCost)
    {
        $this->refineRateDistortionCost = $refineRateDistortionCost;

        return $this;
    }

    /**
     * Enables early exit from transform unit depth recursion, for inter coded blocks. Default is DISABLED.
     *
     * @param LimitTransformUnitDepthRecursionMode $limitTransformUnitDepthRecursion
     * @return $this
     */
    public function limitTransformUnitDepthRecursion(LimitTransformUnitDepthRecursionMode $limitTransformUnitDepthRecursion)
    {
        $this->limitTransformUnitDepthRecursion = $limitTransformUnitDepthRecursion;

        return $this;
    }

    /**
     * An integer value, which denotes strength of noise reduction in intra CUs. Default 0.
     *
     * @param int $noiseReductionIntra
     * @return $this
     */
    public function noiseReductionIntra(int $noiseReductionIntra)
    {
        $this->noiseReductionIntra = $noiseReductionIntra;

        return $this;
    }

    /**
     * An integer value, which denotes strength of noise reduction in inter CUs. Default 0.
     *
     * @param int $noiseReductionInter
     * @return $this
     */
    public function noiseReductionInter(int $noiseReductionInter)
    {
        $this->noiseReductionInter = $noiseReductionInter;

        return $this;
    }

    /**
     * Penalty for 32x32 intra transform units in non-I slices. Default DISABLED.
     *
     * @param RateDistortionPenaltyMode $rateDistortionPenalty
     * @return $this
     */
    public function rateDistortionPenalty(RateDistortionPenaltyMode $rateDistortionPenalty)
    {
        $this->rateDistortionPenalty = $rateDistortionPenalty;

        return $this;
    }

    /**
     * Penalty for 32x32 intra transform units in non-I slices. Default DISABLED.
     *
     * @param MaxTransformUnitSize $maximumTransformUnitSize
     * @return $this
     */
    public function maximumTransformUnitSize(MaxTransformUnitSize $maximumTransformUnitSize)
    {
        $this->maximumTransformUnitSize = $maximumTransformUnitSize;

        return $this;
    }

    /**
     * Increases the RD level at points where quality drops due to VBV rate control enforcement. Default 0.
     *
     * @param int $dynamicRateDistortionStrength
     * @return $this
     */
    public function dynamicRateDistortionStrength(int $dynamicRateDistortionStrength)
    {
        $this->dynamicRateDistortionStrength = $dynamicRateDistortionStrength;

        return $this;
    }

    /**
     * It is used for mode selection during analysis of CTUs and can achieve significant gain in terms of objective quality metrics SSIM and PSNR. Default false.
     *
     * @param bool $ssimRateDistortionOptimization
     * @return $this
     */
    public function ssimRateDistortionOptimization(bool $ssimRateDistortionOptimization)
    {
        $this->ssimRateDistortionOptimization = $ssimRateDistortionOptimization;

        return $this;
    }

    /**
     * Enable temporal motion vector predictors in P and B slices. Default true.
     *
     * @param bool $temporalMotionVectorPredictors
     * @return $this
     */
    public function temporalMotionVectorPredictors(bool $temporalMotionVectorPredictors)
    {
        $this->temporalMotionVectorPredictors = $temporalMotionVectorPredictors;

        return $this;
    }

    /**
     * Enable motion estimation with source frame pixels, in this mode, motion estimation can be computed independently. Default false.
     *
     * @param bool $analyzeSourceFramePixels
     * @return $this
     */
    public function analyzeSourceFramePixels(bool $analyzeSourceFramePixels)
    {
        $this->analyzeSourceFramePixels = $analyzeSourceFramePixels;

        return $this;
    }

    /**
     * Enable strong intra smoothing for 32x32 intra blocks. Default true.
     *
     * @param bool $strongIntraSmoothing
     * @return $this
     */
    public function strongIntraSmoothing(bool $strongIntraSmoothing)
    {
        $this->strongIntraSmoothing = $strongIntraSmoothing;

        return $this;
    }

    /**
     * When generating intra predictions for blocks in inter slices, only intra-coded reference pixels are used. Default false.
     *
     * @param bool $constrainedIntraPrediction
     * @return $this
     */
    public function constrainedIntraPrediction(bool $constrainedIntraPrediction)
    {
        $this->constrainedIntraPrediction = $constrainedIntraPrediction;

        return $this;
    }

    /**
     * This value represents the percentage difference between the inter cost and intra cost of a frame used in scenecut detection. Default 5.0.
     *
     * @param float $scenecutBias
     * @return $this
     */
    public function scenecutBias(float $scenecutBias)
    {
        $this->scenecutBias = $scenecutBias;

        return $this;
    }

    /**
     * Number of RADL pictures allowed infront of IDR. Requires fixed keyframe interval. Valid values 0 - &#x60;bframes&#x60;. Default 0.
     *
     * @param int $allowedRADLBeforeIDR
     * @return $this
     */
    public function allowedRADLBeforeIDR(int $allowedRADLBeforeIDR)
    {
        $this->allowedRADLBeforeIDR = $allowedRADLBeforeIDR;

        return $this;
    }

    /**
     * Number of frames for GOP boundary decision lookahead. Valid values 0 - &#x60;rcLookahead&#x60;. Default 0
     *
     * @param int $gopLookahead
     * @return $this
     */
    public function gopLookahead(int $gopLookahead)
    {
        $this->gopLookahead = $gopLookahead;

        return $this;
    }

    /**
     * Bias towards B frames in slicetype decision. The higher the bias the more likely the encoder is to use B frames. Default 0
     *
     * @param int $bframeBias
     * @return $this
     */
    public function bframeBias(int $bframeBias)
    {
        $this->bframeBias = $bframeBias;

        return $this;
    }

    /**
     * Force the encoder to flush frames. Default is DISABLED.
     *
     * @param ForceFlushMode $forceFlush
     * @return $this
     */
    public function forceFlush(ForceFlushMode $forceFlush)
    {
        $this->forceFlush = $forceFlush;

        return $this;
    }

    /**
     * Adjust the strength of the adaptive quantization offsets. Default 1.0.
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
     * Adjust the AQ offsets based on the relative motion of each block with respect to the motion of the frame. Default false.
     *
     * @param bool $adaptiveQuantizationMotion
     * @return $this
     */
    public function adaptiveQuantizationMotion(bool $adaptiveQuantizationMotion)
    {
        $this->adaptiveQuantizationMotion = $adaptiveQuantizationMotion;

        return $this;
    }

    /**
     * Enable adaptive quantization for sub-CTUs. This parameter specifies the minimum CU size at which QP can be adjusted. Default is same as &#x60;maxCTUSize&#x60;.
     *
     * @param QuantizationGroupSize $quantizationGroupSize
     * @return $this
     */
    public function quantizationGroupSize(QuantizationGroupSize $quantizationGroupSize)
    {
        $this->quantizationGroupSize = $quantizationGroupSize;

        return $this;
    }

    /**
     * Enables stricter conditions to control bitrate deviance from the target bitrate in ABR mode. Bit rate adherence is prioritised over quality. Default false.
     *
     * @param bool $strictCbr
     * @return $this
     */
    public function strictCbr(bool $strictCbr)
    {
        $this->strictCbr = $strictCbr;

        return $this;
    }

    /**
     * Offset of Cb chroma QP from the luma QP selected by rate control. This is a general way to spend more or less bits on the chroma channel. Default 0
     *
     * @param int $qpOffsetChromaCb
     * @return $this
     */
    public function qpOffsetChromaCb(int $qpOffsetChromaCb)
    {
        $this->qpOffsetChromaCb = $qpOffsetChromaCb;

        return $this;
    }

    /**
     * Offset of Cr chroma QP from the luma QP selected by rate control. This is a general way to spend more or less bits on the chroma channel. Default 0
     *
     * @param int $qpOffsetChromaCr
     * @return $this
     */
    public function qpOffsetChromaCr(int $qpOffsetChromaCr)
    {
        $this->qpOffsetChromaCr = $qpOffsetChromaCr;

        return $this;
    }

    /**
     * QP ratio factor between I and P slices. This ratio is used in all of the rate control modes. Default 1.4
     *
     * @param float $ipRatio
     * @return $this
     */
    public function ipRatio(float $ipRatio)
    {
        $this->ipRatio = $ipRatio;

        return $this;
    }

    /**
     * QP ratio factor between P and B slices. This ratio is used in all of the rate control modes. Default 1.3
     *
     * @param float $pbRatio
     * @return $this
     */
    public function pbRatio(float $pbRatio)
    {
        $this->pbRatio = $pbRatio;

        return $this;
    }

    /**
     * Sets the quantizer curve compression factor. It weights the frame quantizer based on the complexity of residual (measured by lookahead). Default 0.6
     *
     * @param float $quantizerCurveCompressionFactor
     * @return $this
     */
    public function quantizerCurveCompressionFactor(float $quantizerCurveCompressionFactor)
    {
        $this->quantizerCurveCompressionFactor = $quantizerCurveCompressionFactor;

        return $this;
    }

    /**
     * The maximum single adjustment in QP allowed to rate control. Default 4
     *
     * @param int $qpStep
     * @return $this
     */
    public function qpStep(int $qpStep)
    {
        $this->qpStep = $qpStep;

        return $this;
    }

    /**
     * Enables a specialised ratecontrol algorithm for film grain content. Default false.
     *
     * @param bool $grainOptimizedRateControl
     * @return $this
     */
    public function grainOptimizedRateControl(bool $grainOptimizedRateControl)
    {
        $this->grainOptimizedRateControl = $grainOptimizedRateControl;

        return $this;
    }

    /**
     * Temporally blur quants. Default 0.5
     *
     * @param float $blurQuants
     * @return $this
     */
    public function blurQuants(float $blurQuants)
    {
        $this->blurQuants = $blurQuants;

        return $this;
    }

    /**
     * Temporally blur complexity. Default 20.0
     *
     * @param float $blurComplexity
     * @return $this
     */
    public function blurComplexity(float $blurComplexity)
    {
        $this->blurComplexity = $blurComplexity;

        return $this;
    }

    /**
     * Specify how to handle depencency between SAO and deblocking filter. When enabled, non-deblocked pixels are used for SAO analysis. When disabled, SAO analysis skips the right/bottom boundary areas. Default false.
     *
     * @param bool $saoNonDeblock
     * @return $this
     */
    public function saoNonDeblock(bool $saoNonDeblock)
    {
        $this->saoNonDeblock = $saoNonDeblock;

        return $this;
    }

    /**
     * Limit SAO filter computation by early terminating SAO process based on inter prediction mode, CTU spatial-domain correlations, and relations between luma and chroma. Default false.
     *
     * @param bool $limitSao
     * @return $this
     */
    public function limitSao(bool $limitSao)
    {
        $this->limitSao = $limitSao;

        return $this;
    }

    /**
     * Will use low-pass subband dct approximation instead of the standard dct for 16x16 and 32x32 blocks. Default false.
     *
     * @param bool $lowpassDct
     * @return $this
     */
    public function lowpassDct(bool $lowpassDct)
    {
        $this->lowpassDct = $lowpassDct;

        return $this;
    }

    /**
     * Defines whether CEA 608/708 subtitles are extracted from the input video stream
     *
     * @param Cea608708SubtitleConfiguration $cea608708SubtitleConfig
     * @return $this
     */
    public function cea608708SubtitleConfig(Cea608708SubtitleConfiguration $cea608708SubtitleConfig)
    {
        $this->cea608708SubtitleConfig = $cea608708SubtitleConfig;

        return $this;
    }
}

