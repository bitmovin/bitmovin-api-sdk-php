<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Person extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $name;

    /** @var string */
    public $role;

    /** @var Department */
    public $department;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->department = ObjectMapper::map($this->department, Department::class);
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
     * role
     *
     * @param string $role
     * @return $this
     */
    public function role(string $role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * The detected department of a person
     *
     * @param Department $department
     * @return $this
     */
    public function department(Department $department)
    {
        $this->department = $department;

        return $this;
    }
}

