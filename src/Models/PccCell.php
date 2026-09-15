<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class PccCell extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var PccVerdict */
    public $verdict;

    /** @var string */
    public $label;

    /** @var bool */
    public $aboutTheDevice;

    /** @var string */
    public $account;

    /** @var string */
    public $symbol;

    /** @var string */
    public $agreement;

    /** @var string */
    public $agreementAccount;

    /** @var \BitmovinApiSdk\Models\PccPicture */
    public $picture;

    /** @var string[] */
    public $agreeingSessionIds;

    /** @var float */
    public $resultSessions;

    /** @var string */
    public $recency;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->verdict = ObjectMapper::map($this->verdict, PccVerdict::class);
        $this->picture = ObjectMapper::map($this->picture, PccPicture::class);
    }

    /**
     * What a combination says once every session that measured it has been read. Five of the nine answer for the measurement rather than for the device; &#x60;aboutTheDevice&#x60; says which, and folding those into \&quot;not supported\&quot; is how this data gets misread. (required)
     *
     * @param PccVerdict $verdict
     * @return $this
     */
    public function verdict(PccVerdict $verdict)
    {
        $this->verdict = $verdict;

        return $this;
    }

    /**
     * The reader&#39;s word for that verdict — &#x60;Supported&#x60;, &#x60;Not supported&#x60;, &#x60;Not measured&#x60;, and so on. Fewer words than there are verdicts: three of them read as &#x60;Not measured&#x60;. &#x60;legend&#x60; lists every word. (required)
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
     * False where the verdict says something about the measurement rather than the device. (required)
     *
     * @param bool $aboutTheDevice
     * @return $this
     */
    public function aboutTheDevice(bool $aboutTheDevice)
    {
        $this->aboutTheDevice = $aboutTheDevice;

        return $this;
    }

    /**
     * The cell&#39;s whole account in one paragraph: the verdict, what agreed, the picture, the stream. (required)
     *
     * @param string $account
     * @return $this
     */
    public function account(string $account)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * The grid&#39;s own mark for that verdict, which &#x60;legend&#x60; explains. (required)
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
     * &#x60;3/4&#x60; where a session disagreed with the published verdict, and absent where none did.
     *
     * @param string $agreement
     * @return $this
     */
    public function agreement(string $agreement)
    {
        $this->agreement = $agreement;

        return $this;
    }

    /**
     * What the sessions that disagreed recorded, spelled out. Present only where &#x60;agreement&#x60; is.
     *
     * @param string $agreementAccount
     * @return $this
     */
    public function agreementAccount(string $agreementAccount)
    {
        $this->agreementAccount = $agreementAccount;

        return $this;
    }

    /**
     * picture
     *
     * @param \BitmovinApiSdk\Models\PccPicture $picture
     * @return $this
     */
    public function picture(\BitmovinApiSdk\Models\PccPicture $picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * The sessions this verdict was taken from. Quote one to Bitmovin support and the measurement behind this cell can be looked up, for as long as the fleet still holds it. (required)
     *
     * @param string[] $agreeingSessionIds
     * @return $this
     */
    public function agreeingSessionIds(array $agreeingSessionIds)
    {
        $this->agreeingSessionIds = $agreeingSessionIds;

        return $this;
    }

    /**
     * How many sessions recorded anything at all for this combination. (required)
     *
     * @param float $resultSessions
     * @return $this
     */
    public function resultSessions(float $resultSessions)
    {
        $this->resultSessions = $resultSessions;

        return $this;
    }

    /**
     * Evidence excluded by the start date or session limit, including pools with no included sessions.
     *
     * @param string $recency
     * @return $this
     */
    public function recency(string $recency)
    {
        $this->recency = $recency;

        return $this;
    }
}

