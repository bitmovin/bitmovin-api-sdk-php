<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AgentChatDynamicToolPart extends AgentChatMessagePart
{
    /** @var string */
    public $toolName;

    /** @var string */
    public $toolCallId;

    /** @var AgentChatDynamicToolState */
    public $state;

    /** @var mixed */
    public $input;

    /** @var mixed */
    public $output;

    /** @var string */
    public $errorText;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->state = ObjectMapper::map($this->state, AgentChatDynamicToolState::class);
    }

    /**
     * Tool name (required)
     *
     * @param string $toolName
     * @return $this
     */
    public function toolName(string $toolName)
    {
        $this->toolName = $toolName;

        return $this;
    }

    /**
     * Tool call identifier (required)
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
     * Tool invocation lifecycle state (required)
     *
     * @param AgentChatDynamicToolState $state
     * @return $this
     */
    public function state(AgentChatDynamicToolState $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Tool input payload.
     *
     * @param mixed $input
     * @return $this
     */
    public function input(array $input)
    {
        $this->input = $input;

        return $this;
    }

    /**
     * Tool output payload.
     *
     * @param mixed $output
     * @return $this
     */
    public function output(array $output)
    {
        $this->output = $output;

        return $this;
    }

    /**
     * Error text for failed tool completion.
     *
     * @param string $errorText
     * @return $this
     */
    public function errorText(string $errorText)
    {
        $this->errorText = $errorText;

        return $this;
    }
}

