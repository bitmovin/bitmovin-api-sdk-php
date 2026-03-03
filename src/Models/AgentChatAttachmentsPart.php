<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AgentChatAttachmentsPart extends AgentChatMessagePart
{
    /** @var AgentChatAttachmentsData */
    public $data;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->data = ObjectMapper::map($this->data, AgentChatAttachmentsData::class);
    }

    /**
     * Attachment payload (required)
     *
     * @param AgentChatAttachmentsData $data
     * @return $this
     */
    public function data(AgentChatAttachmentsData $data)
    {
        $this->data = $data;

        return $this;
    }
}

