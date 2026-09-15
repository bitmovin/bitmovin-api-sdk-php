<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class PccVerdictLegendEntry extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $symbol;

    /** @var string */
    public $label;

    /** @var string */
    public $sentence;

    /** @var bool */
    public $aboutTheDevice;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * The mark the grid draws for every verdict reading as this entry&#39;s label. (required)
     *
     * @param string $symbol
     * @return $this
     */
    public function symbol(string $symbol)
    {
        $this->symbol = $symbol;

        return $this;
    }

    /**
     * The reader&#39;s word for those verdicts — &#x60;Supported&#x60;, &#x60;Not measured&#x60;, and so on. (required)
     *
     * @param string $label
     * @return $this
     */
    public function label(string $label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * What that word means here. (required)
     *
     * @param string $sentence
     * @return $this
     */
    public function sentence(string $sentence)
    {
        $this->sentence = $sentence;

        return $this;
    }

    /**
     * False where these verdicts say something about the measurement rather than about the device. Folding those into \&quot;not supported\&quot; is how this dataset gets misread. (required)
     *
     * @param bool $aboutTheDevice
     * @return $this
     */
    public function aboutTheDevice(bool $aboutTheDevice)
    {
        $this->aboutTheDevice = $aboutTheDevice;

        return $this;
    }
}

