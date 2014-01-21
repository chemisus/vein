<?php

namespace Vein;

interface Config {
    /**
     * Checks to see if a key exists in the configuration.
     *
     * @param string $key
     * @return boolean
     */
    public function has($key);

    /**
     * Gets the value for a key in the configuration.
     *
     * @param string $key
     * @param mixed|null $otherwise
     * @return mixed
     */
    public function get($key, $otherwise = null);
}
