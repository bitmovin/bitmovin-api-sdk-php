<?php

namespace BitmovinApiSdk\Models;

class PccVerdict extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const PLAYED = 'played';

    /** @var string */
    private const CLAIMED_BUT_NOT_VERIFIED = 'claimed-but-not-verified';

    /** @var string */
    private const DECLARES_NO_SUPPORT = 'declares-no-support';

    /** @var string */
    private const INCONSISTENT_CLAIM = 'inconsistent-claim';

    /** @var string */
    private const INCONCLUSIVE = 'inconclusive';

    /** @var string */
    private const UNMEASURED = 'unmeasured';

    /** @var string */
    private const NOT_APPLICABLE = 'not-applicable';

    /** @var string */
    private const INFRASTRUCTURE_FAULT = 'infrastructure-fault';

    /** @var string */
    private const NEVER_REACHED = 'never-reached';

    /**
     * @param string $value
     * @return PccVerdict
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * What a combination says once every session that measured it has been read. Five of the nine answer for the measurement rather than for the device; &#x60;aboutTheDevice&#x60; says which, and folding those into \&quot;not supported\&quot; is how this data gets misread.
     *
     * @return PccVerdict
     */
    public static function PLAYED()
    {
        return new PccVerdict(self::PLAYED);
    }

    /**
     * What a combination says once every session that measured it has been read. Five of the nine answer for the measurement rather than for the device; &#x60;aboutTheDevice&#x60; says which, and folding those into \&quot;not supported\&quot; is how this data gets misread.
     *
     * @return PccVerdict
     */
    public static function CLAIMED_BUT_NOT_VERIFIED()
    {
        return new PccVerdict(self::CLAIMED_BUT_NOT_VERIFIED);
    }

    /**
     * What a combination says once every session that measured it has been read. Five of the nine answer for the measurement rather than for the device; &#x60;aboutTheDevice&#x60; says which, and folding those into \&quot;not supported\&quot; is how this data gets misread.
     *
     * @return PccVerdict
     */
    public static function DECLARES_NO_SUPPORT()
    {
        return new PccVerdict(self::DECLARES_NO_SUPPORT);
    }

    /**
     * What a combination says once every session that measured it has been read. Five of the nine answer for the measurement rather than for the device; &#x60;aboutTheDevice&#x60; says which, and folding those into \&quot;not supported\&quot; is how this data gets misread.
     *
     * @return PccVerdict
     */
    public static function INCONSISTENT_CLAIM()
    {
        return new PccVerdict(self::INCONSISTENT_CLAIM);
    }

    /**
     * What a combination says once every session that measured it has been read. Five of the nine answer for the measurement rather than for the device; &#x60;aboutTheDevice&#x60; says which, and folding those into \&quot;not supported\&quot; is how this data gets misread.
     *
     * @return PccVerdict
     */
    public static function INCONCLUSIVE()
    {
        return new PccVerdict(self::INCONCLUSIVE);
    }

    /**
     * What a combination says once every session that measured it has been read. Five of the nine answer for the measurement rather than for the device; &#x60;aboutTheDevice&#x60; says which, and folding those into \&quot;not supported\&quot; is how this data gets misread.
     *
     * @return PccVerdict
     */
    public static function UNMEASURED()
    {
        return new PccVerdict(self::UNMEASURED);
    }

    /**
     * What a combination says once every session that measured it has been read. Five of the nine answer for the measurement rather than for the device; &#x60;aboutTheDevice&#x60; says which, and folding those into \&quot;not supported\&quot; is how this data gets misread.
     *
     * @return PccVerdict
     */
    public static function NOT_APPLICABLE()
    {
        return new PccVerdict(self::NOT_APPLICABLE);
    }

    /**
     * What a combination says once every session that measured it has been read. Five of the nine answer for the measurement rather than for the device; &#x60;aboutTheDevice&#x60; says which, and folding those into \&quot;not supported\&quot; is how this data gets misread.
     *
     * @return PccVerdict
     */
    public static function INFRASTRUCTURE_FAULT()
    {
        return new PccVerdict(self::INFRASTRUCTURE_FAULT);
    }

    /**
     * What a combination says once every session that measured it has been read. Five of the nine answer for the measurement rather than for the device; &#x60;aboutTheDevice&#x60; says which, and folding those into \&quot;not supported\&quot; is how this data gets misread.
     *
     * @return PccVerdict
     */
    public static function NEVER_REACHED()
    {
        return new PccVerdict(self::NEVER_REACHED);
    }
}

