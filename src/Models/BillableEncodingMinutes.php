<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class BillableEncodingMinutes extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var \BitmovinApiSdk\Models\EncodingMode */
    public $encodingMode;

    /** @var \BitmovinApiSdk\Models\CodecConfigType */
    public $codec;

    /** @var \BitmovinApiSdk\Models\StatisticsPerTitleStream */
    public $perTitleResultStream;

    /** @var \BitmovinApiSdk\Models\PsnrPerStreamMode */
    public $psnrMode;

    /** @var string */
    public $preset;

    /** @var bool */
    public $live;

    /** @var bool */
    public $enhancedDeinterlace;

    /** @var \BitmovinApiSdk\Models\NexGuardABWatermarkingFeature */
    public $nexGuardABWatermarkingType;

    /** @var \BitmovinApiSdk\Models\PixelFormatBitDepth */
    public $pixelFormatBitDepth;

    /** @var \BitmovinApiSdk\Models\BillableEncodingMinutesDetails */
    public $billableMinutes;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->encodingMode = ObjectMapper::map($this->encodingMode, EncodingMode::class);
        $this->codec = ObjectMapper::map($this->codec, CodecConfigType::class);
        $this->perTitleResultStream = ObjectMapper::map($this->perTitleResultStream, StatisticsPerTitleStream::class);
        $this->psnrMode = ObjectMapper::map($this->psnrMode, PsnrPerStreamMode::class);
        $this->nexGuardABWatermarkingType = ObjectMapper::map($this->nexGuardABWatermarkingType, NexGuardABWatermarkingFeature::class);
        $this->pixelFormatBitDepth = ObjectMapper::map($this->pixelFormatBitDepth, PixelFormatBitDepth::class);
        $this->billableMinutes = ObjectMapper::map($this->billableMinutes, BillableEncodingMinutesDetails::class);
    }

    /**
     * encodingMode
     *
     * @param \BitmovinApiSdk\Models\EncodingMode $encodingMode
     * @return $this
     */
    public function encodingMode(\BitmovinApiSdk\Models\EncodingMode $encodingMode)
    {
        $this->encodingMode = $encodingMode;

        return $this;
    }

    /**
     * codec
     *
     * @param \BitmovinApiSdk\Models\CodecConfigType $codec
     * @return $this
     */
    public function codec(\BitmovinApiSdk\Models\CodecConfigType $codec)
    {
        $this->codec = $codec;

        return $this;
    }

    /**
     * perTitleResultStream
     *
     * @param \BitmovinApiSdk\Models\StatisticsPerTitleStream $perTitleResultStream
     * @return $this
     */
    public function perTitleResultStream(\BitmovinApiSdk\Models\StatisticsPerTitleStream $perTitleResultStream)
    {
        $this->perTitleResultStream = $perTitleResultStream;

        return $this;
    }

    /**
     * psnrMode
     *
     * @param \BitmovinApiSdk\Models\PsnrPerStreamMode $psnrMode
     * @return $this
     */
    public function psnrMode(\BitmovinApiSdk\Models\PsnrPerStreamMode $psnrMode)
    {
        $this->psnrMode = $psnrMode;

        return $this;
    }

    /**
     * nexGuardABWatermarkingType
     *
     * @param \BitmovinApiSdk\Models\NexGuardABWatermarkingFeature $nexGuardABWatermarkingType
     * @return $this
     */
    public function nexGuardABWatermarkingType(\BitmovinApiSdk\Models\NexGuardABWatermarkingFeature $nexGuardABWatermarkingType)
    {
        $this->nexGuardABWatermarkingType = $nexGuardABWatermarkingType;

        return $this;
    }

    /**
     * pixelFormatBitDepth
     *
     * @param \BitmovinApiSdk\Models\PixelFormatBitDepth $pixelFormatBitDepth
     * @return $this
     */
    public function pixelFormatBitDepth(\BitmovinApiSdk\Models\PixelFormatBitDepth $pixelFormatBitDepth)
    {
        $this->pixelFormatBitDepth = $pixelFormatBitDepth;

        return $this;
    }

    /**
     * billableMinutes
     *
     * @param \BitmovinApiSdk\Models\BillableEncodingMinutesDetails $billableMinutes
     * @return $this
     */
    public function billableMinutes(\BitmovinApiSdk\Models\BillableEncodingMinutesDetails $billableMinutes)
    {
        $this->billableMinutes = $billableMinutes;

        return $this;
    }
}

