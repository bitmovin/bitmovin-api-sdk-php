<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AwsAccountRegionSettings extends BitmovinResource
{
    /** @var int */
    public $limitParallelEncodings;

    /** @var int */
    public $maximumAmountOfCoordinatorsAndWorkersInRegion;

    /** @var float */
    public $maxMoneyToSpendPerMonth;

    /** @var string */
    public $securityGroupId;

    /** @var string */
    public $subnetId;

    /** @var string[] */
    public $machineTypes;

    /** @var int */
    public $sshPort;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * Limit for the amount of running encodings at a time. Leave empty for no limit.
     *
     * @param int $limitParallelEncodings
     * @return $this
     */
    public function limitParallelEncodings(int $limitParallelEncodings)
    {
        $this->limitParallelEncodings = $limitParallelEncodings;

        return $this;
    }

    /**
     * Maximum amount of encoding coordinators and workers allowed in this region at any time. Leave empty for no limit.
     *
     * @param int $maximumAmountOfCoordinatorsAndWorkersInRegion
     * @return $this
     */
    public function maximumAmountOfCoordinatorsAndWorkersInRegion(int $maximumAmountOfCoordinatorsAndWorkersInRegion)
    {
        $this->maximumAmountOfCoordinatorsAndWorkersInRegion = $maximumAmountOfCoordinatorsAndWorkersInRegion;

        return $this;
    }

    /**
     * Limit the amount of money to spend in this region on this account. Leave empty for no limit.
     *
     * @param float $maxMoneyToSpendPerMonth
     * @return $this
     */
    public function maxMoneyToSpendPerMonth(float $maxMoneyToSpendPerMonth)
    {
        $this->maxMoneyToSpendPerMonth = $maxMoneyToSpendPerMonth;

        return $this;
    }

    /**
     * Id of the security group for encoding instances (required)
     *
     * @param string $securityGroupId
     * @return $this
     */
    public function securityGroupId(string $securityGroupId)
    {
        $this->securityGroupId = $securityGroupId;

        return $this;
    }

    /**
     * Id of the subnet for encoding instances (required)
     *
     * @param string $subnetId
     * @return $this
     */
    public function subnetId(string $subnetId)
    {
        $this->subnetId = $subnetId;

        return $this;
    }

    /**
     * Which machine types are allowed to be deployed. Leave empty for no machine type restrictions.
     *
     * @param string[] $machineTypes
     * @return $this
     */
    public function machineTypes(array $machineTypes)
    {
        $this->machineTypes = $machineTypes;

        return $this;
    }

    /**
     * Custom SSH port. Valid values: 1 - 65535. Leave empty if the default SSH port 22 is OK.
     *
     * @param int $sshPort
     * @return $this
     */
    public function sshPort(int $sshPort)
    {
        $this->sshPort = $sshPort;

        return $this;
    }
}

