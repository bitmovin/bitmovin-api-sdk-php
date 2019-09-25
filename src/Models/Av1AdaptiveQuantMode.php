<?php

namespace BitmovinApiSdk\Models;

class Av1AdaptiveQuantMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const OFF = 'OFF';

    /** @var string */
    private const VARIANCE = 'VARIANCE';

    /** @var string */
    private const COMPLEXITY = 'COMPLEXITY';

    /** @var string */
    private const CYCLIC_REFRESH = 'CYCLIC_REFRESH';

    /** @var string */
    private const DELTA_QUANT = 'DELTA_QUANT';

    /**
     * @param string $value
     * @return Av1AdaptiveQuantMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * AV1 has a segment based feature that allows the encoder to adaptively change quantization parameter for each segment within a frame
     *
     * @return Av1AdaptiveQuantMode
     */
    public static function OFF()
    {
        return new Av1AdaptiveQuantMode(self::OFF);
    }

    /**
     * AV1 has a segment based feature that allows the encoder to adaptively change quantization parameter for each segment within a frame
     *
     * @return Av1AdaptiveQuantMode
     */
    public static function VARIANCE()
    {
        return new Av1AdaptiveQuantMode(self::VARIANCE);
    }

    /**
     * AV1 has a segment based feature that allows the encoder to adaptively change quantization parameter for each segment within a frame
     *
     * @return Av1AdaptiveQuantMode
     */
    public static function COMPLEXITY()
    {
        return new Av1AdaptiveQuantMode(self::COMPLEXITY);
    }

    /**
     * AV1 has a segment based feature that allows the encoder to adaptively change quantization parameter for each segment within a frame
     *
     * @return Av1AdaptiveQuantMode
     */
    public static function CYCLIC_REFRESH()
    {
        return new Av1AdaptiveQuantMode(self::CYCLIC_REFRESH);
    }

    /**
     * AV1 has a segment based feature that allows the encoder to adaptively change quantization parameter for each segment within a frame
     *
     * @return Av1AdaptiveQuantMode
     */
    public static function DELTA_QUANT()
    {
        return new Av1AdaptiveQuantMode(self::DELTA_QUANT);
    }
}

