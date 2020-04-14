# 阿里巴巴开放平台SDK
## 更新时间: 2020-04-07 15:00:21
## Installing

```shell
$ composer require javareact/alibaba_open -vvv
```

## Usage
场景： 拉取阿里巴巴商家的采购数据，同步到erp上，采用的是多用户模式

```php
        $obj = new \JavaReact\AlibabaOpen\AlibabaClient(['page'=>1]);
        $obj->setAppkey('你的appkey');
        $obj->setAppsecret('你的秘钥');
        $obj->setAccessToken('自己想办法去获取token，如果设置的是多用户单用户的直接复制，应用管理中的token');//如果是单用户模式,无需添加此参数
        $res =$obj->order->setApi('com.alibaba.trade:alibaba.trade.getBuyerOrderList-1')->get(); //api 就是阿里巴巴文档中的
        var_dump($res);
```

项目中可以继承他：

````php
<?php


namespace App\Services\AliOpen;


class AliOpen extends \JavaReact\AlibabaOpen\AlibabaClient
{
    public function __construct($params = array())
    {
        $this->setAppkey('39376**');
        $this->setAppsecret('0RsvFZYV**');
        $this->access_token = '06410386-242c-41f6-8a20-5e7e0d2b6229';
        parent::__construct($params);
    }
}

````

获取订单列表的例子 
```php
        $get_data =( new  \JavaReact\AlibabaOpen\AlibabaClient([     //这边的AliOpen ,是你设置appkey的对象
            'page'=>1,
            'pageSize'=>100,
        ]))
            ->order
            ->setApi('com.alibaba.trade:alibaba.trade.getBuyerOrderList-1')
            ->get();
```
获取订单详情的例子 
```php
        $get_data = (new  \JavaReact\AlibabaOpen\AlibabaClient([
            'webSite'=>1688,
            'orderId'=>$this->app->order_id,
        ]))
            ->order
            ->setApi('com.alibaba.trade:alibaba.trade.get.buyerView-1')
            ->get();

```
关注商品的例子
```php
        $get_data = (new  \JavaReact\AlibabaOpen\AlibabaClient())
            ->product
            ->productFollow(new \JavaReact\AlibabaOpen\entity\ProductFollowParams('532137286888'))//建议使用此种方法传参
            ->get();
```

跨境场景下接口获取商品详情
```php
$get_data = (new \JavaReact\AlibabaOpen\AlibabaClient())
    ->setAppkey('you appkey')
    ->setAppsecret('you Appsecret')
    ->setAccessToken('you TOKEN')
    ->product
    ->getCrossProductInfo(new \JavaReact\AlibabaOpen\entity\CrossProductInfoParam('615890334160')) //商品ID
    ->post();
```

更新日志：

## License

MIT
