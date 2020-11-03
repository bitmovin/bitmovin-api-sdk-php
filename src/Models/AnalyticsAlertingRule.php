<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AnalyticsAlertingRule extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $id;

    /** @var string */
    public $licenseKey;

    /** @var string */
    public $type;

    /** @var string */
    public $name;

    /** @var \BitmovinApiSdk\Models\AnalyticsRuleMetric */
    public $metric;

    /** @var \BitmovinApiSdk\Models\AnalyticsAbstractFilter[] */
    public $filters;

    /** @var \BitmovinApiSdk\Models\AnalyticsThresholdRuleOptions */
    public $options;

    /** @var \BitmovinApiSdk\Models\AnalyticsAlertingNotification */
    public $notification;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->metric = ObjectMapper::map($this->metric, AnalyticsRuleMetric::class);
        $this->filters = ObjectMapper::map($this->filters, AnalyticsAbstractFilter::class);
        $this->options = ObjectMapper::map($this->options, AnalyticsThresholdRuleOptions::class);
        $this->notification = ObjectMapper::map($this->notification, AnalyticsAlertingNotification::class);
    }

    /**
     * Alerting rule name (required)
     *
     * @param string $name
     * @return $this
     */
    public function name(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * metric
     *
     * @param \BitmovinApiSdk\Models\AnalyticsRuleMetric $metric
     * @return $this
     */
    public function metric(\BitmovinApiSdk\Models\AnalyticsRuleMetric $metric)
    {
        $this->metric = $metric;

        return $this;
    }

    /**
     * filters
     *
     * @param \BitmovinApiSdk\Models\AnalyticsAbstractFilter[] $filters
     * @return $this
     */
    public function filters(array $filters)
    {
        $this->filters = $filters;

        return $this;
    }

    /**
     * options
     *
     * @param \BitmovinApiSdk\Models\AnalyticsThresholdRuleOptions $options
     * @return $this
     */
    public function options(\BitmovinApiSdk\Models\AnalyticsThresholdRuleOptions $options)
    {
        $this->options = $options;

        return $this;
    }

    /**
     * notification
     *
     * @param \BitmovinApiSdk\Models\AnalyticsAlertingNotification $notification
     * @return $this
     */
    public function notification(\BitmovinApiSdk\Models\AnalyticsAlertingNotification $notification)
    {
        $this->notification = $notification;

        return $this;
    }
}

