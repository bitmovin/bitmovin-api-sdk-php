<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AgentChatAttachment extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $kind;

    /** @var string */
    public $toolCallId;

    /** @var mixed */
    public $attributes;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Attachment kind (required)
     *
     * @param string $kind
     * @return $this
     */
    public function kind(string $kind)
    {
        $this->kind = $kind;

        return $this;
    }

    /**
     * Tool call identifier
     *
     * @param string $toolCallId
     * @return $this
     */
    public function toolCallId(string $toolCallId)
    {
        $this->toolCallId = $toolCallId;

        return $this;
    }

    /**
     * Attachment attributes map (required)
     *
     * @param mixed $attributes
     * @return $this
     */
    public function attributes(array $attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }
}

