<?php

namespace BitmovinApiSdk\Common;

use stdClass;

abstract class ApiResource
{

    /**
     * Resource constructor.
     *
     * @param $attributes
     */
    public function __construct($attributes)
    {
        if (is_null($attributes)) {
            return null;
        } elseif (is_array($attributes)) {
            $attributes = (object) $attributes;
        }

        $this->fill($attributes);
    }

    /**
     * @return $this
     */
    public static function create()
    {
        return new static([]);
    }

    /**
     * Fill class attributes
     *
     * @param stdClass $attributes
     */
    private function fill(stdClass $attributes)
    {
        foreach ($attributes as $key => $value) {
            $this->{$key} = $value;
        }
    }

    /**
     * Create array with values, skip null
     *
     * @return array
     */
    public function toArray(): array
    {
        $resourceData = array_filter(get_object_vars($this), function ($value) {
            return ! is_null($value);
        });

        $resourceData = array_map(function ($value) {
            return $this->mapValue($value);
        }, $resourceData);

        if(isset($this::$discriminatorMapping))
        {
            $type = array_search (get_class($this), $this::$discriminatorMapping);
            if(isset($type))
            {
                $resourceData["type"] = $type;
                unset($resourceData["discriminatorMapping"]);
            }
        }

        return $resourceData;
    }

    private function mapValue($value)
    {
        if($value instanceof \DateTime)
        {
            return $value->format(DATE_ATOM);
        }
        else if($value instanceof ApiResource)
        {
            return $value->toArray();
        }
        else if(is_array($value))
        {
            return array_map(function ($innerValue)
            {
                return $this->mapValue($innerValue);
            }, $value);
        }

        return $value;
    }
}
