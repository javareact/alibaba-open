<?php


namespace JavaReact\AlibabaOpen\provider;


use JavaReact\AlibabaOpen\core\Container;
use JavaReact\AlibabaOpen\functions\order\Order;
use JavaReact\AlibabaOpen\interfaces\Provider;

class StoreProvider implements Provider

{

    public function serviceProvider(Container $container)
    {
        $container['order'] = function ($container){
            return new Order($container);
        };
    }
}
