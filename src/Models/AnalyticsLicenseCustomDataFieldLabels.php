<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AnalyticsLicenseCustomDataFieldLabels extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $customData1;

    /** @var string */
    public $customData2;

    /** @var string */
    public $customData3;

    /** @var string */
    public $customData4;

    /** @var string */
    public $customData5;

    /** @var string */
    public $customData6;

    /** @var string */
    public $customData7;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Custom Data 1
     *
     * @param string $customData1
     * @return $this
     */
    public function customData1(string $customData1)
    {
        $this->customData1 = $customData1;

        return $this;
    }

    /**
     * Custom Data 2
     *
     * @param string $customData2
     * @return $this
     */
    public function customData2(string $customData2)
    {
        $this->customData2 = $customData2;

        return $this;
    }

    /**
     * Custom Data 3
     *
     * @param string $customData3
     * @return $this
     */
    public function customData3(string $customData3)
    {
        $this->customData3 = $customData3;

        return $this;
    }

    /**
     * Custom Data 4
     *
     * @param string $customData4
     * @return $this
     */
    public function customData4(string $customData4)
    {
        $this->customData4 = $customData4;

        return $this;
    }

    /**
     * Custom Data 5
     *
     * @param string $customData5
     * @return $this
     */
    public function customData5(string $customData5)
    {
        $this->customData5 = $customData5;

        return $this;
    }

    /**
     * Custom Data 6
     *
     * @param string $customData6
     * @return $this
     */
    public function customData6(string $customData6)
    {
        $this->customData6 = $customData6;

        return $this;
    }

    /**
     * Custom Data 7
     *
     * @param string $customData7
     * @return $this
     */
    public function customData7(string $customData7)
    {
        $this->customData7 = $customData7;

        return $this;
    }
}

