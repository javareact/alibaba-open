<?php


namespace JavaReact\AlibabaOpen\provider;


use JavaReact\AlibabaOpen\core\Container;
use JavaReact\AlibabaOpen\functions\Dining;
use JavaReact\AlibabaOpen\interfaces\Provider;

/**
 * Class DiningProvider
 * @package JavaReact\AlibabaOpen\provider
 */
class DiningProvider implements Provider
{

    /**
     * @param Container $container
     * @return mixed|void
     */
    public function serviceProvider(Container $container)
    {
        $container['dining'] = function ($container) {
            return new Dining($container);
        };
    }
}
