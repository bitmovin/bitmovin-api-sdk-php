<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class SrtStatistics extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $id;

    /** @var Carbon */
    public $createdAt;

    /** @var string */
    public $encodingId;

    /** @var string */
    public $srtInputId;

    /** @var bool */
    public $srtInputSelected;

    /** @var string */
    public $orgId;

    /** @var string */
    public $userId;

    /** @var \BitmovinApiSdk\Models\SrtStatisticLink */
    public $link;

    /** @var \BitmovinApiSdk\Models\SrtStatisticWindow */
    public $window;

    /** @var \BitmovinApiSdk\Models\SrtStatisticRecv */
    public $recv;

    /** @var \BitmovinApiSdk\Models\SrtStatisticSend */
    public $send;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->createdAt = ObjectMapper::map($this->createdAt, Carbon::class);
        $this->link = ObjectMapper::map($this->link, SrtStatisticLink::class);
        $this->window = ObjectMapper::map($this->window, SrtStatisticWindow::class);
        $this->recv = ObjectMapper::map($this->recv, SrtStatisticRecv::class);
        $this->send = ObjectMapper::map($this->send, SrtStatisticSend::class);
    }

    /**
     * UUID of the statistic event
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
     * Timestamp when the srt statistics event was created, formatted in UTC: YYYY-MM-DDThh:mm:ssZ
     *
     * @param Carbon $createdAt
     * @return $this
     */
    public function createdAt(Carbon $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * UUID of an encoding
     *
     * @param string $encodingId
     * @return $this
     */
    public function encodingId(string $encodingId)
    {
        $this->encodingId = $encodingId;

        return $this;
    }

    /**
     * UUID of the SRT input used to capture this statistics
     *
     * @param string $srtInputId
     * @return $this
     */
    public function srtInputId(string $srtInputId)
    {
        $this->srtInputId = $srtInputId;

        return $this;
    }

    /**
     * Whether the SRT input that generated this statistics was selected (i.e. actively used) at the time or not
     *
     * @param bool $srtInputSelected
     * @return $this
     */
    public function srtInputSelected(bool $srtInputSelected)
    {
        $this->srtInputSelected = $srtInputSelected;

        return $this;
    }

    /**
     * UUID of the associated organization
     *
     * @param string $orgId
     * @return $this
     */
    public function orgId(string $orgId)
    {
        $this->orgId = $orgId;

        return $this;
    }

    /**
     * UUID of the associated api-user
     *
     * @param string $userId
     * @return $this
     */
    public function userId(string $userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * link
     *
     * @param \BitmovinApiSdk\Models\SrtStatisticLink $link
     * @return $this
     */
    public function link(\BitmovinApiSdk\Models\SrtStatisticLink $link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * window
     *
     * @param \BitmovinApiSdk\Models\SrtStatisticWindow $window
     * @return $this
     */
    public function window(\BitmovinApiSdk\Models\SrtStatisticWindow $window)
    {
        $this->window = $window;

        return $this;
    }

    /**
     * recv
     *
     * @param \BitmovinApiSdk\Models\SrtStatisticRecv $recv
     * @return $this
     */
    public function recv(\BitmovinApiSdk\Models\SrtStatisticRecv $recv)
    {
        $this->recv = $recv;

        return $this;
    }

    /**
     * send
     *
     * @param \BitmovinApiSdk\Models\SrtStatisticSend $send
     * @return $this
     */
    public function send(\BitmovinApiSdk\Models\SrtStatisticSend $send)
    {
        $this->send = $send;

        return $this;
    }
}

