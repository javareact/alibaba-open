<?php


namespace JavaReact\AlibabaOpen\provider;


use JavaReact\AlibabaOpen\core\Container;
use JavaReact\AlibabaOpen\functions\Dining;
use JavaReact\AlibabaOpen\interfaces\Provider;

class DiningProvider implements Provider
{

    public function serviceProvider(Container $container)
    {
        $container['dining'] = function ($container) {
            return new Dining($container);
        };
    }
}
