<?php


namespace JavaReact\AlibabaOpen\provider;


use JavaReact\AlibabaOpen\core\Container;
use JavaReact\AlibabaOpen\functions\order\Logistics;
use JavaReact\AlibabaOpen\functions\product\Product;
use JavaReact\AlibabaOpen\interfaces\Provider;

class ProductProvider implements Provider
{
    /**
     * @inheritDoc
     */
    public function serviceProvider(Container $container)
    {
        $container['product']   = function ($container) {
            return new Product($container);
        };
        $container['logistics'] = function ($container) {
            return new Logistics($container);
        };
    }
}