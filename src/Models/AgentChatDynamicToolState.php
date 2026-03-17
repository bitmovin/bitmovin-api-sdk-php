<?php

namespace BitmovinApiSdk\Models;

class AgentChatDynamicToolState extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const INPUT_STREAMING = 'input-streaming';

    /** @var string */
    private const INPUT_AVAILABLE = 'input-available';

    /** @var string */
    private const OUTPUT_AVAILABLE = 'output-available';

    /** @var string */
    private const OUTPUT_ERROR = 'output-error';

    /**
     * @param string $value
     * @return AgentChatDynamicToolState
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * INPUT_STREAMING
     *
     * @return AgentChatDynamicToolState
     */
    public static function INPUT_STREAMING()
    {
        return new AgentChatDynamicToolState(self::INPUT_STREAMING);
    }

    /**
     * INPUT_AVAILABLE
     *
     * @return AgentChatDynamicToolState
     */
    public static function INPUT_AVAILABLE()
    {
        return new AgentChatDynamicToolState(self::INPUT_AVAILABLE);
    }

    /**
     * OUTPUT_AVAILABLE
     *
     * @return AgentChatDynamicToolState
     */
    public static function OUTPUT_AVAILABLE()
    {
        return new AgentChatDynamicToolState(self::OUTPUT_AVAILABLE);
    }

    /**
     * OUTPUT_ERROR
     *
     * @return AgentChatDynamicToolState
     */
    public static function OUTPUT_ERROR()
    {
        return new AgentChatDynamicToolState(self::OUTPUT_ERROR);
    }
}

