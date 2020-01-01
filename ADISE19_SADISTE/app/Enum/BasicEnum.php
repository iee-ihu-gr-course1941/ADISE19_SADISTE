<?php

namespace App\Enum;

use ReflectionClass;

/**
 * Abstract class from which Enum classes derive. Provides helper functions for handling enums.
 */
abstract class BasicEnum {

    /**
     * An array mapping BasicEnum derived classes to an array of their constants.
     */
    private static $constCacheArray;

    /**
     * Gets an array of the constants defined in the class this is called from.
     *
     * @return A key-value array of the class' constants.
     */
    private static function getConstants(): array
    {
        if (self::$constCacheArray === null) {
            self::$constCacheArray = [];
        }

        $calledClass = get_called_class();

        if (!array_key_exists($calledClass, self::$constCacheArray)) {
            $reflect = new ReflectionClass($calledClass);
            self::$constCacheArray[$calledClass] = $reflect->getConstants();
        }

        return self::$constCacheArray[$calledClass];
    }

    /**
     * Checks if a given key exists in the constants of the class this is called from.
     *
     * @param string $name The key to check for.
     * @param boolean $strict Whether to perform a case-sensitive check.
     * @return boolean Whether the key exists.
     */
    public static function isValidName(string $name, bool $strict = false): bool {
        $constants = self::getConstants();

        if ($strict) {
            return array_key_exists($name, $constants);
        }

        $keys = array_map('strtolower', array_keys($constants));
        return in_array(strtolower($name), $keys);
    }

    /**
     * Checks if a given value exists in the constants of the class this is called from.
     *
     * @param $value The value to check for.
     * @param boolean $strict Whether to perform a type-strict check.
     * @return boolean Whether the value exists.
     */
    public static function isValidValue($value, bool $strict = true): bool {
        $values = array_values(self::getConstants());
        return in_array($value, $values, $strict);
    }

    public static function getIterator(): EnumIterator {
        return new EnumIterator(self::getConstants());
    }
}
