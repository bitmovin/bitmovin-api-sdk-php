<?php

namespace BitmovinApiSdk\Common;

class ObjectMapper
{
    /**
     * @param $value
     * @param string $type
     * @return mixed
     */
    public static function map($value, string $type)
    {
        if (is_array($value)) {
            foreach ($value as &$item) {
                $item = self::mapInternal($item, $type);
            }
            return $value;
        }
        return self::mapInternal($value, $type);
    }

    private static function mapInternal($value, string $type)
    {
        $type = self::calculateType($value, $type);

        return $value ? new $type($value) : $value;
    }

    private static function calculateType($value, string $type): string
    {
        if (isset($type::$discriminatorMapping) && isset($type::$discriminatorName)) {
            $discriminatorMapping = $type::$discriminatorMapping;
            $discriminatorName = $type::$discriminatorName;
            if (isset($value->$discriminatorName) && isset($discriminatorMapping[$value->$discriminatorName])) {
                $type = $discriminatorMapping[$value->$discriminatorName];
            }
        }

        return $type;
    }
}
