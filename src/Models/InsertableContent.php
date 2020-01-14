<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class InsertableContent extends BitmovinResource
{
    /** @var \BitmovinApiSdk\Models\InsertableContentInput[] */
    public $inputs;

    /** @var InsertableContentStatus */
    public $status;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->inputs = ObjectMapper::map($this->inputs, InsertableContentInput::class);
        $this->status = ObjectMapper::map($this->status, InsertableContentStatus::class);
    }

    /**
     * Either a list of movie files to be inserted in the live stream or a single image file. The movie files must have a video stream at stream position 0, which matches the codec, resolution and framerate of the livestream. The number of audio streams must also be the same and they have to match the sample format, number of channels and sample rate of the audio streams of the livestream. Supported image formats are: &#x60;.Y.U.V&#x60;, &#x60;Alias PIX&#x60;, &#x60;animated GIF&#x60;, &#x60;APNG&#x60;, &#x60;BMP&#x60;, &#x60;DPX&#x60;, &#x60;FITS&#x60;, &#x60;JPEG&#x60;, &#x60;JPEG 2000&#x60;, &#x60;JPEG-LS&#x60;, &#x60;PAM&#x60;, &#x60;PBM&#x60;, &#x60;PCX&#x60;, &#x60;PGM&#x60;, &#x60;PGMYUV&#x60;, &#x60;PNG&#x60;, &#x60;PPM&#x60;, &#x60;SGI&#x60;, &#x60;Sun Rasterfile&#x60;, &#x60;TIFF&#x60;, &#x60;Truevision Targa&#x60;, &#x60;WebP&#x60;, &#x60;XBM&#x60;, &#x60;XFace&#x60;, &#x60;XPM&#x60;, &#x60;XWD&#x60;
     *
     * @param \BitmovinApiSdk\Models\InsertableContentInput[] $inputs
     * @return $this
     */
    public function inputs(array $inputs)
    {
        $this->inputs = $inputs;

        return $this;
    }
}

