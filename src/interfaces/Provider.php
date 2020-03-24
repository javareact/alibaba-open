<?php

namespace JavaReact\AlibabaOpen\interfaces;

use JavaReact\AlibabaOpen\core\Container;

/**
 * Interface Provider
 * @package JavaReact\AlibabaOpen\interfaces
 */
interface Provider
{
    /**
     * @param Container $container
     * @return mixed
     */
    public function serviceProvider(Container $container);
}
