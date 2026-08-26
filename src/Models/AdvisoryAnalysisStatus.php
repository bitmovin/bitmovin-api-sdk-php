<?php

namespace BitmovinApiSdk\Models;

class AdvisoryAnalysisStatus extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const ANALYZED = 'ANALYZED';

    /** @var string */
    private const BLOCKED = 'BLOCKED';

    /**
     * @param string $value
     * @return AdvisoryAnalysisStatus
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * The shot was analysed for content advisories. An empty list of advisories means none were found
     *
     * @return AdvisoryAnalysisStatus
     */
    public static function ANALYZED()
    {
        return new AdvisoryAnalysisStatus(self::ANALYZED);
    }

    /**
     * The shot could not be analysed because the request was blocked by the model safety filter, so no verdict exists for it. Such a shot is reported conservatively rather than as clean: it carries a TOBACCO advisory with UNKNOWN confidence, which is an assumption made on the absence of a verdict and not an observation. Review these shots manually
     *
     * @return AdvisoryAnalysisStatus
     */
    public static function BLOCKED()
    {
        return new AdvisoryAnalysisStatus(self::BLOCKED);
    }
}

