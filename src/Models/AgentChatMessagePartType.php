<?php

namespace BitmovinApiSdk\Models;

class AgentChatMessagePartType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const TEXT = 'text';

    /** @var string */
    private const DATA_ATTACHMENTS = 'data-attachments';

    /**
     * @param string $value
     * @return AgentChatMessagePartType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * TEXT
     *
     * @return AgentChatMessagePartType
     */
    public static function TEXT()
    {
        return new AgentChatMessagePartType(self::TEXT);
    }

    /**
     * DATA_ATTACHMENTS
     *
     * @return AgentChatMessagePartType
     */
    public static function DATA_ATTACHMENTS()
    {
        return new AgentChatMessagePartType(self::DATA_ATTACHMENTS);
    }
}

