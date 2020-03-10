<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class BasicMediaInfo extends BitmovinResponse
{
    /** @var string */
    public $groupId;

    /** @var string */
    public $language;

    /** @var string */
    public $assocLanguage;

    /** @var string */
    public $name;

    /** @var bool */
    public $isDefault;

    /** @var bool */
    public $autoselect;

    /** @var string[] */
    public $characteristics;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * The value is a quoted-string which specifies the group to which the Rendition belongs. (required)
     *
     * @param string $groupId
     * @return $this
     */
    public function groupId(string $groupId)
    {
        $this->groupId = $groupId;

        return $this;
    }

    /**
     * Primary language in the rendition.
     *
     * @param string $language
     * @return $this
     */
    public function language(string $language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Identifies a language that is associated with the Rendition.
     *
     * @param string $assocLanguage
     * @return $this
     */
    public function assocLanguage(string $assocLanguage)
    {
        $this->assocLanguage = $assocLanguage;

        return $this;
    }

    /**
     * Human readable description of the rendition. (required)
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
     * If set to true, the client SHOULD play this Rendition of the content in the absence of information from the user.
     *
     * @param bool $isDefault
     * @return $this
     */
    public function isDefault(bool $isDefault)
    {
        $this->isDefault = $isDefault;

        return $this;
    }

    /**
     * If set to true, the client MAY choose to play this Rendition in the absence of explicit user preference.
     *
     * @param bool $autoselect
     * @return $this
     */
    public function autoselect(bool $autoselect)
    {
        $this->autoselect = $autoselect;

        return $this;
    }

    /**
     * Contains Uniform Type Identifiers
     *
     * @param string[] $characteristics
     * @return $this
     */
    public function characteristics(array $characteristics)
    {
        $this->characteristics = $characteristics;

        return $this;
    }
}

