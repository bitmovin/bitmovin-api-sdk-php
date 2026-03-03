<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AgentChatMessage extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $id;

    /** @var string */
    public $role;

    /** @var \BitmovinApiSdk\Models\AgentChatMessagePart[] */
    public $parts;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->parts = ObjectMapper::map($this->parts, AgentChatMessagePart::class);
    }

    /**
     * Message ID (required)
     *
     * @param string $id
     * @return $this
     */
    public function id(string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Message role (required)
     *
     * @param string $role
     * @return $this
     */
    public function role(string $role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Message parts (required)
     *
     * @param \BitmovinApiSdk\Models\AgentChatMessagePart[] $parts
     * @return $this
     */
    public function parts(array $parts)
    {
        $this->parts = $parts;

        return $this;
    }
}

