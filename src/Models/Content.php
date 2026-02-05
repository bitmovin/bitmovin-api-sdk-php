<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Content extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var \BitmovinApiSdk\Models\Character[] */
    public $characters;

    /** @var \BitmovinApiSdk\Models\SceneObject[] */
    public $objects;

    /** @var \BitmovinApiSdk\Models\Setting[] */
    public $settings;

    /** @var \BitmovinApiSdk\Models\SceneDynamics */
    public $dynamics;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->characters = ObjectMapper::map($this->characters, Character::class);
        $this->objects = ObjectMapper::map($this->objects, SceneObject::class);
        $this->settings = ObjectMapper::map($this->settings, Setting::class);
        $this->dynamics = ObjectMapper::map($this->dynamics, SceneDynamics::class);
    }

    /**
     * characters
     *
     * @param \BitmovinApiSdk\Models\Character[] $characters
     * @return $this
     */
    public function characters(array $characters)
    {
        $this->characters = $characters;

        return $this;
    }

    /**
     * objects
     *
     * @param \BitmovinApiSdk\Models\SceneObject[] $objects
     * @return $this
     */
    public function objects(array $objects)
    {
        $this->objects = $objects;

        return $this;
    }

    /**
     * settings
     *
     * @param \BitmovinApiSdk\Models\Setting[] $settings
     * @return $this
     */
    public function settings(array $settings)
    {
        $this->settings = $settings;

        return $this;
    }

    /**
     * dynamics
     *
     * @param \BitmovinApiSdk\Models\SceneDynamics $dynamics
     * @return $this
     */
    public function dynamics(\BitmovinApiSdk\Models\SceneDynamics $dynamics)
    {
        $this->dynamics = $dynamics;

        return $this;
    }
}

