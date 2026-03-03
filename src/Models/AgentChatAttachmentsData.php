<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AgentChatAttachmentsData extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var \BitmovinApiSdk\Models\AgentChatAttachment[] */
    public $attachments;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->attachments = ObjectMapper::map($this->attachments, AgentChatAttachment::class);
    }

    /**
     * Attachment list (required)
     *
     * @param \BitmovinApiSdk\Models\AgentChatAttachment[] $attachments
     * @return $this
     */
    public function attachments(array $attachments)
    {
        $this->attachments = $attachments;

        return $this;
    }
}

