<?php

namespace DDTrace\Configuration;

/**
 * Registry interface for configuration stores.
 */
interface Registry
{
    /**
     * Extract a boolean configuration value, providing a default if the value has not been configured.
     *
     * @param string $key
     * @param bool $default
     * @return bool
     */
    public function boolValue($key, $default);

    /**
     * Extract a float configuration value, providing a default if the value has not been configured.
     *
     * @param string $key
     * @param float $default
     * @param float|null $min
     * @param float|null $max
     * @return float
     */
    public function floatValue($key, $default, $min = null, $max = null);

    /**
     * Returns whether or not a given case-insensitive name is contained in a configuration property.
     *
     * @param string $key
     * @param string $name
     * @return bool
     */
    public function inArray($key, $name);
}
