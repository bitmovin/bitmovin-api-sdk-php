<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class EmailNotificationWithStreamConditionsRequest extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var bool */
    public $resolve;

    /** @var string[] */
    public $emails;

    /** @var bool */
    public $muted;

    /** @var AbstractCondition */
    public $conditions;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->conditions = ObjectMapper::map($this->conditions, AbstractCondition::class);
    }

    /**
     * Notify when condition resolves after it was met
     *
     * @param bool $resolve
     * @return $this
     */
    public function resolve(bool $resolve)
    {
        $this->resolve = $resolve;

        return $this;
    }

    /**
     * emails
     *
     * @param string[] $emails
     * @return $this
     */
    public function emails(array $emails)
    {
        $this->emails = $emails;

        return $this;
    }

    /**
     * muted
     *
     * @param bool $muted
     * @return $this
     */
    public function muted(bool $muted)
    {
        $this->muted = $muted;

        return $this;
    }

    /**
     * conditions
     *
     * @param AbstractCondition $conditions
     * @return $this
     */
    public function conditions(AbstractCondition $conditions)
    {
        $this->conditions = $conditions;

        return $this;
    }
}

