<?php


namespace JavaReact\AlibabaOpen\provider;


use JavaReact\AlibabaOpen\core\Container;
use JavaReact\AlibabaOpen\functions\order\Order;
use JavaReact\AlibabaOpen\interfaces\Provider;

/**
 * Class StoreProvider
 * @package JavaReact\AlibabaOpen\provider
 */
class StoreProvider implements Provider
{

    /**
     * @param Container $container
     * @return mixed|void
     */
    public function serviceProvider(Container $container)
    {
        $container['order'] = function ($container) {
            return new Order($container);
        };
    }
}
