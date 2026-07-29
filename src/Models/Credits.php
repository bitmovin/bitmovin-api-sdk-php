<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Credits extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var \BitmovinApiSdk\Models\Person[] */
    public $persons;

    /** @var \BitmovinApiSdk\Models\Song[] */
    public $songs;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->persons = ObjectMapper::map($this->persons, Person::class);
        $this->songs = ObjectMapper::map($this->songs, Song::class);
    }

    /**
     * persons
     *
     * @param \BitmovinApiSdk\Models\Person[] $persons
     * @return $this
     */
    public function persons(array $persons)
    {
        $this->persons = $persons;

        return $this;
    }

    /**
     * songs
     *
     * @param \BitmovinApiSdk\Models\Song[] $songs
     * @return $this
     */
    public function songs(array $songs)
    {
        $this->songs = $songs;

        return $this;
    }
}

