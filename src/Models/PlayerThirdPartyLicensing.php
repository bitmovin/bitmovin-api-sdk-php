<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class PlayerThirdPartyLicensing extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $licenseCheckServer;

    /** @var int */
    public $licenseCheckTimeout;

    /** @var PlayerThirdPartyLicensingErrorAction */
    public $errorAction;

    /** @var PlayerThirdPartyLicensingErrorAction */
    public $timeoutAction;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->errorAction = ObjectMapper::map($this->errorAction, PlayerThirdPartyLicensingErrorAction::class);
        $this->timeoutAction = ObjectMapper::map($this->timeoutAction, PlayerThirdPartyLicensingErrorAction::class);
    }

    /**
     * URL to your license check server (required)
     *
     * @param string $licenseCheckServer
     * @return $this
     */
    public function licenseCheckServer(string $licenseCheckServer)
    {
        $this->licenseCheckServer = $licenseCheckServer;

        return $this;
    }

    /**
     * Timeout in ms (required)
     *
     * @param int $licenseCheckTimeout
     * @return $this
     */
    public function licenseCheckTimeout(int $licenseCheckTimeout)
    {
        $this->licenseCheckTimeout = $licenseCheckTimeout;

        return $this;
    }

    /**
     * Specify if the Licensing Request should fail or not on Third Party Licensing Error (required)
     *
     * @param PlayerThirdPartyLicensingErrorAction $errorAction
     * @return $this
     */
    public function errorAction(PlayerThirdPartyLicensingErrorAction $errorAction)
    {
        $this->errorAction = $errorAction;

        return $this;
    }

    /**
     * Specify if the Licensing Request should fail or not on Third Party Licensing timeout (required)
     *
     * @param PlayerThirdPartyLicensingErrorAction $timeoutAction
     * @return $this
     */
    public function timeoutAction(PlayerThirdPartyLicensingErrorAction $timeoutAction)
    {
        $this->timeoutAction = $timeoutAction;

        return $this;
    }
}

