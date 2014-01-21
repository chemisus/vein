<?php

namespace Vein;

abstract class Application {
    private $container;

    public function main() {
        $config = $this->getConfig();

        $container = $this->getContainer($config);

        $router = $this->getRouter($config);

        $request = $this->getRequest($config);
    }

    /**
     * @return Config
     */
    public abstract function getConfig();

    /**
     * @param Config $config
     * @return Container
     */
    public abstract function getContainer(Config $config);

    public abstract function getRouter(Config $config);

    public abstract function getRequest(Config $config);
}
