<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AgentChatTextPart extends AgentChatMessagePart
{
    /** @var string */
    public $text;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Text message content (required)
     *
     * @param string $text
     * @return $this
     */
    public function text(string $text)
    {
        $this->text = $text;

        return $this;
    }
}

