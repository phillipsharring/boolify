<?php

namespace Philsown\Boolify;

class Boolify
{
    public static function cast($value)
    {
        if (is_string($value)) {
            $lower = strtolower($value);
            switch ($lower) {
                case 'true':
                case 't':
                case '1':
                case 'yes':
                case 'y':
                    return true;
                    break;
                case 'false':
                case 'f':
                case '0':
                case 'no':
                case 'n':
                    return false;
                    break;
            }
        }

        if (is_int($value)) {
            return (bool) ($value > 0);
        }

        if (is_array($value)) {
            return (bool) !empty($value);
        }

        if (is_object($value)) {
            return (bool) !empty($value);
        }

        if (is_bool($value)) {
            return $value;
        }

        return null;
    }
}
