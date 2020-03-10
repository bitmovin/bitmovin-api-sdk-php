<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class DenoiseHqdn3dFilter extends Filter
{
    /** @var float */
    public $lumaSpatial;

    /** @var float */
    public $chromaSpatial;

    /** @var float */
    public $lumaTmp;

    /** @var float */
    public $chromaTmp;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * A non-negative floating point number which specifies spatial luma strength. It defaults to 4.0.
     *
     * @param float $lumaSpatial
     * @return $this
     */
    public function lumaSpatial(float $lumaSpatial)
    {
        $this->lumaSpatial = $lumaSpatial;

        return $this;
    }

    /**
     * A non-negative floating point number which specifies spatial chroma strength. It defaults to 3.0*luma_spatial/4.0.
     *
     * @param float $chromaSpatial
     * @return $this
     */
    public function chromaSpatial(float $chromaSpatial)
    {
        $this->chromaSpatial = $chromaSpatial;

        return $this;
    }

    /**
     * A floating point number which specifies luma temporal strength. It defaults to 6.0*luma_spatial/4.0.
     *
     * @param float $lumaTmp
     * @return $this
     */
    public function lumaTmp(float $lumaTmp)
    {
        $this->lumaTmp = $lumaTmp;

        return $this;
    }

    /**
     * A floating point number which specifies chroma temporal strength. It defaults to luma_tmp*chroma_spatial/luma_spatial.
     *
     * @param float $chromaTmp
     * @return $this
     */
    public function chromaTmp(float $chromaTmp)
    {
        $this->chromaTmp = $chromaTmp;

        return $this;
    }
}

