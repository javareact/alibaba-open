# 效果

```php
$app = new Application();
$app->db->test();
```
一般框架都有容器这个概念，当基础类多了，会很零散，所以得有一个东西能收纳这些功能。

 零散的代码就好像在农村里生活一样，如果你对当地熟的话，其实也还好，自己知道就是比较麻烦一点，可能在去目的地的时候要花费一点时间。找你这个代码要一定的时间。

如果你在城里就不一样了， 有大型的商场里面啥都有，吃喝拉撒一条龙服务。只要进入了商场就非常多的指向标，小地图规划。这边提到的地图规划，就好像idea中的提示代码：
![在这里插入图片描述](https://img-blog.csdnimg.cn/20190919140948711.png)
进入某个商场，参加具体某个项目，比如去餐厅，服务员会拿出具体的菜单给你过目：

![在这里插入图片描述](https://img-blog.csdnimg.cn/20190919141735950.png?x-oss-process=image/watermark,type_ZmFuZ3poZW5naGVpdGk,shadow_10,text_aHR0cHM6Ly9ibG9nLmNzZG4ubmV0L3FxXzIyODIzNTgx,size_16,color_FFFFFF,t_70)
![在这里插入图片描述](https://img-blog.csdnimg.cn/2019091914013532.png?x-oss-process=image/watermark,type_ZmFuZ3poZW5naGVpdGk,shadow_10,text_aHR0cHM6Ly9ibG9nLmNzZG4ubmV0L3FxXzIyODIzNTgx,size_16,color_FFFFFF,t_70)
总的来说把一个大型的服务装进一个容器中，以这个容器为入口，程序的扩展性强，想让商场哪家倒闭就倒闭，新开一家就新开一家。

# 容器类

arrayAccess 赋予object 具有数组的功能

```php
<?php

class Container implements \ArrayAccess
{
    private $values = array();
    public $register;

    public function serviceRegister(Provider $provider)
    {
        $provider->serviceProvider($this);
        return $this;
    }

    public function offsetExists($offset)
    {
        // TODO: Implement offsetExists() method.
    }
	//可能多次调用，所以把类储存在instances 中，防止反复实例
    public function offsetGet($offset)
    {
        if(isset($this->instances[$offset])){
            return $this->instances[$offset];
        }
        $raw = $this->values[$offset];
        $val = $this->values[$offset] = $raw($this);
        $this->instances[$offset] = $val;
        return $val;
    }



    public function offsetSet($offset, $value)
    {
        $this->values[$offset] = $value;
    }

    public function offsetUnset($offset)
    {

    }
}

```



# 基础类

```php
class Base extends Container
{
    protected $provider = [];

    public function __construct()
    {
        $provider_callback = function ($provider) {
            $this->serviceRegister(new $provider);
        };
        array_walk($this->provider, $provider_callback);//注册
    }

    public function __get($id)
    {
        return $this->offsetGet($id);

    }
}
```
# 服务
注释让开发效率翻倍
```php
/**
 * Class Application
 * @property   Db db
 */
class Application extends Base
{
    protected $provider = [
        DbServiceProvider::class,
        //...其他服务
    ];

}
```

# 具体服务提供者

```php
class DbServiceProvider implements Provider
{
    /**
     * 服务提供者
     * @param Container $container
     * @return mixed
     */
    public function serviceProvider(Container $container,array $values = array())
    {

        $container['db'] = function () {
            return new DB();
        };


    }
}



```
# 接口

```php
interface Provider
{
    public function serviceProvider(Container $container);
}

```

# 实际功能类

```php
class DB
{
    public function test()
    {
        echo 'laji';
    }
}

```