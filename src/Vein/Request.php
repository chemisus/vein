<?php

namespace Vein;

interface Request {
    /**
     * Gets the method used by the request.
     *
     * @return string
     */
    public function method();

    /**
     * Gets the path that was requested.
     *
     * @return string
     */
    public function path();
}
