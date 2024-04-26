<?php
declare(strict_types=1);

namespace Phdc\Boolify;

class Boolify
{
    /**
     * @param $value
     * @return bool|null
     */
    public static function cast($value): null|bool
    {
        if (is_bool($value)) {
            return $value;
        }

        $boolified = null;

        if (is_string($value)) {
            $lower = strtolower($value);
            $boolified = match($lower) {
                'true', 't', '1', 'yes', 'y' => true,
                'false', 'f', '0', 'no', 'n', 'n/a', => false,
                default => null,
            };
        }

        if (is_int($value)) {
            $boolified = $value > 0;
        }

        if (is_array($value)) {
            $boolified = !empty($value);
        }

        if (is_object($value)) {
            $boolified = !empty(get_object_vars($value));
        }

        if (null === $value) {
            $boolified = false;
        }

        return $boolified;
    }
}
