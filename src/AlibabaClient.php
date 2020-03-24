<?php

namespace JavaReact\AlibabaOpen;

use JavaReact\AlibabaOpen\core\ContainerBase;
use JavaReact\AlibabaOpen\provider\DiningProvider;
use JavaReact\AlibabaOpen\provider\StoreProvider;

/**
 * Class Application
 * @property \JavaReact\AlibabaOpen\functions\Dining dining
 * @property \JavaReact\AlibabaOpen\functions\order\Order order
 */
class AlibabaClient extends ContainerBase
{
    /**
     * 服务提供者
     * @var array
     */
    public function __construct($params = array())
    {
//        $this->pushMiddlewares(array(\JavaReact\AlibabaOpen\functions\Log::class,'addLog'),'log'); //更新获取access_token
        parent::__construct($params);
    }

    protected $provider = [
        DiningProvider::class,
        StoreProvider::class,
        //...其他服务提供者
    ];
}
