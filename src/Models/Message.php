<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Message extends BitmovinResponse
{
    /** @var MessageType */
    public $type;

    /** @var string */
    public $text;

    /** @var string */
    public $field;

    /** @var \BitmovinApiSdk\Models\Link[] */
    public $links;

    /** @var object */
    public $more;

    /** @var Carbon */
    public $date;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->type = ObjectMapper::map($this->type, MessageType::class);
        $this->links = ObjectMapper::map($this->links, Link::class);
        $this->date = ObjectMapper::map($this->date, Carbon::class);
    }

    /**
     * Message type giving a hint on the importance of the message (log level) (required)
     *
     * @param MessageType $type
     * @return $this
     */
    public function type(MessageType $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Message text (required)
     *
     * @param string $text
     * @return $this
     */
    public function text(string $text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Name of the field to which the message is referring to
     *
     * @param string $field
     * @return $this
     */
    public function field(string $field)
    {
        $this->field = $field;

        return $this;
    }

    /**
     * collection of links to webpages containing further information on the topic
     *
     * @param \BitmovinApiSdk\Models\Link[] $links
     * @return $this
     */
    public function links(array $links)
    {
        $this->links = $links;

        return $this;
    }

    /**
     * Service-specific information
     *
     * @param object $more
     * @return $this
     */
    public function more(object $more)
    {
        $this->more = $more;

        return $this;
    }

    /**
     * Timestamp when the message occured
     *
     * @param Carbon $date
     * @return $this
     */
    public function date(Carbon $date)
    {
        $this->date = $date;

        return $this;
    }
}

