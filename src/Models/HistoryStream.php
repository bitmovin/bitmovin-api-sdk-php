<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class HistoryStream extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var Stream */
    public $stream;

    /** @var \BitmovinApiSdk\Models\StreamFilter[] */
    public $filters;

    /** @var \BitmovinApiSdk\Models\BurnInSubtitleDvbSub[] */
    public $burnInSubtitleDvbSubs;

    /** @var \BitmovinApiSdk\Models\BurnInSubtitleSrt[] */
    public $burnInSubtitleSrtSubs;

    /** @var NexGuardFileMarker */
    public $nexGuardFileMarker;

    /** @var \BitmovinApiSdk\Models\SccCaption[] */
    public $sccCaptions;

    /** @var \BitmovinApiSdk\Models\Bif[] */
    public $bifs;

    /** @var \BitmovinApiSdk\Models\DolbyVisionMetadata[] */
    public $dolbyVisionMetadata;

    /** @var \BitmovinApiSdk\Models\Thumbnail[] */
    public $thumbnails;

    /** @var \BitmovinApiSdk\Models\Sprite[] */
    public $sprites;

    /** @var \BitmovinApiSdk\Models\PsnrQualityMetric[] */
    public $psnrMetrics;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->stream = ObjectMapper::map($this->stream, Stream::class);
        $this->filters = ObjectMapper::map($this->filters, StreamFilter::class);
        $this->burnInSubtitleDvbSubs = ObjectMapper::map($this->burnInSubtitleDvbSubs, BurnInSubtitleDvbSub::class);
        $this->burnInSubtitleSrtSubs = ObjectMapper::map($this->burnInSubtitleSrtSubs, BurnInSubtitleSrt::class);
        $this->nexGuardFileMarker = ObjectMapper::map($this->nexGuardFileMarker, NexGuardFileMarker::class);
        $this->sccCaptions = ObjectMapper::map($this->sccCaptions, SccCaption::class);
        $this->bifs = ObjectMapper::map($this->bifs, Bif::class);
        $this->dolbyVisionMetadata = ObjectMapper::map($this->dolbyVisionMetadata, DolbyVisionMetadata::class);
        $this->thumbnails = ObjectMapper::map($this->thumbnails, Thumbnail::class);
        $this->sprites = ObjectMapper::map($this->sprites, Sprite::class);
        $this->psnrMetrics = ObjectMapper::map($this->psnrMetrics, PsnrQualityMetric::class);
    }

    /**
     * Stream
     *
     * @param Stream $stream
     * @return $this
     */
    public function stream(Stream $stream)
    {
        $this->stream = $stream;

        return $this;
    }

    /**
     * List of stream filter configurations
     *
     * @param \BitmovinApiSdk\Models\StreamFilter[] $filters
     * @return $this
     */
    public function filters(array $filters)
    {
        $this->filters = $filters;

        return $this;
    }

    /**
     * List of Burn-In DVB-SUB subtitles
     *
     * @param \BitmovinApiSdk\Models\BurnInSubtitleDvbSub[] $burnInSubtitleDvbSubs
     * @return $this
     */
    public function burnInSubtitleDvbSubs(array $burnInSubtitleDvbSubs)
    {
        $this->burnInSubtitleDvbSubs = $burnInSubtitleDvbSubs;

        return $this;
    }

    /**
     * List of burn-in SRT configurations
     *
     * @param \BitmovinApiSdk\Models\BurnInSubtitleSrt[] $burnInSubtitleSrtSubs
     * @return $this
     */
    public function burnInSubtitleSrtSubs(array $burnInSubtitleSrtSubs)
    {
        $this->burnInSubtitleSrtSubs = $burnInSubtitleSrtSubs;

        return $this;
    }

    /**
     * Nexguard file marker watermarking configuration
     *
     * @param NexGuardFileMarker $nexGuardFileMarker
     * @return $this
     */
    public function nexGuardFileMarker(NexGuardFileMarker $nexGuardFileMarker)
    {
        $this->nexGuardFileMarker = $nexGuardFileMarker;

        return $this;
    }

    /**
     * List of caption configurations
     *
     * @param \BitmovinApiSdk\Models\SccCaption[] $sccCaptions
     * @return $this
     */
    public function sccCaptions(array $sccCaptions)
    {
        $this->sccCaptions = $sccCaptions;

        return $this;
    }

    /**
     * List of bif configurations
     *
     * @param \BitmovinApiSdk\Models\Bif[] $bifs
     * @return $this
     */
    public function bifs(array $bifs)
    {
        $this->bifs = $bifs;

        return $this;
    }

    /**
     * List of Dolby Vision Metadata configurations
     *
     * @param \BitmovinApiSdk\Models\DolbyVisionMetadata[] $dolbyVisionMetadata
     * @return $this
     */
    public function dolbyVisionMetadata(array $dolbyVisionMetadata)
    {
        $this->dolbyVisionMetadata = $dolbyVisionMetadata;

        return $this;
    }

    /**
     * List of Thumbnail configurations
     *
     * @param \BitmovinApiSdk\Models\Thumbnail[] $thumbnails
     * @return $this
     */
    public function thumbnails(array $thumbnails)
    {
        $this->thumbnails = $thumbnails;

        return $this;
    }

    /**
     * List of Sprite configurations
     *
     * @param \BitmovinApiSdk\Models\Sprite[] $sprites
     * @return $this
     */
    public function sprites(array $sprites)
    {
        $this->sprites = $sprites;

        return $this;
    }

    /**
     * List of PSNR quality metrics
     *
     * @param \BitmovinApiSdk\Models\PsnrQualityMetric[] $psnrMetrics
     * @return $this
     */
    public function psnrMetrics(array $psnrMetrics)
    {
        $this->psnrMetrics = $psnrMetrics;

        return $this;
    }
}

