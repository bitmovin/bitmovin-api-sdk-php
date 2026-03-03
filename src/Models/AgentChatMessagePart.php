<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AgentChatMessagePart extends \BitmovinApiSdk\Common\ApiResource
{
    public static $discriminatorName = "type";
    public static $discriminatorMapping = [
        "text" => AgentChatTextPart::class,
        "data-attachments" => AgentChatAttachmentsPart::class,
    ];

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }
}

