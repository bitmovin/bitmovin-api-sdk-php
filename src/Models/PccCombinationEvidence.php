<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class PccCombinationEvidence extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $codec;

    /** @var string */
    public $protection;

    /** @var float */
    public $playedBy;

    /** @var float */
    public $claimedNotPlayedBy;

    /** @var float */
    public $measuredBy;

    /** @var bool */
    public $notApplicable;

    /** @var string[] */
    public $assetHosts;

    /** @var string[] */
    public $licenseServers;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * The codec, as the shared contract spells it. (required)
     *
     * @param string $codec
     * @return $this
     */
    public function codec(string $codec)
    {
        $this->codec = $codec;

        return $this;
    }

    /**
     * The content protection, as the shared contract spells it. (required)
     *
     * @param string $protection
     * @return $this
     */
    public function protection(string $protection)
    {
        $this->protection = $protection;

        return $this;
    }

    /**
     * Device pools that played it, which is what proves the stream behind it works at all. (required)
     *
     * @param float $playedBy
     * @return $this
     */
    public function playedBy(float $playedBy)
    {
        $this->playedBy = $playedBy;

        return $this;
    }

    /**
     * Device pools that reported support for it and then failed to play it. (required)
     *
     * @param float $claimedNotPlayedBy
     * @return $this
     */
    public function claimedNotPlayedBy(float $claimedNotPlayedBy)
    {
        $this->claimedNotPlayedBy = $claimedNotPlayedBy;

        return $this;
    }

    /**
     * Device pools that produced an answer either way. (required)
     *
     * @param float $measuredBy
     * @return $this
     */
    public function measuredBy(float $measuredBy)
    {
        $this->measuredBy = $measuredBy;

        return $this;
    }

    /**
     * No conformant stream can exist for this pairing, so it is neither gap nor result. (required)
     *
     * @param bool $notApplicable
     * @return $this
     */
    public function notApplicable(bool $notApplicable)
    {
        $this->notApplicable = $notApplicable;

        return $this;
    }

    /**
     * Hosts that served its stream. A host only — never a path and never a URL. (required)
     *
     * @param string[] $assetHosts
     * @return $this
     */
    public function assetHosts(array $assetHosts)
    {
        $this->assetHosts = $assetHosts;

        return $this;
    }

    /**
     * Hosts that licensed it. A separate axis from the one above: without both, a device refusing a codec cannot be told from a stream that stopped being served. (required)
     *
     * @param string[] $licenseServers
     * @return $this
     */
    public function licenseServers(array $licenseServers)
    {
        $this->licenseServers = $licenseServers;

        return $this;
    }
}

