<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Character extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var \BitmovinApiSdk\Models\CharacterAppearance */
    public $characterAppearance;

    /** @var string */
    public $name;

    /** @var string */
    public $playedBy;

    /** @var string */
    public $description;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->characterAppearance = ObjectMapper::map($this->characterAppearance, CharacterAppearance::class);
    }

    /**
     * characterAppearance
     *
     * @param \BitmovinApiSdk\Models\CharacterAppearance $characterAppearance
     * @return $this
     */
    public function characterAppearance(\BitmovinApiSdk\Models\CharacterAppearance $characterAppearance)
    {
        $this->characterAppearance = $characterAppearance;

        return $this;
    }

    /**
     * name
     *
     * @param string $name
     * @return $this
     */
    public function name(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * playedBy
     *
     * @param string $playedBy
     * @return $this
     */
    public function playedBy(string $playedBy)
    {
        $this->playedBy = $playedBy;

        return $this;
    }

    /**
     * description
     *
     * @param string $description
     * @return $this
     */
    public function description(string $description)
    {
        $this->description = $description;

        return $this;
    }
}

