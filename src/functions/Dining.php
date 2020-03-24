<?php


namespace JavaReact\AlibabaOpen\functions;


use JavaReact\AlibabaOpen\core\BaseClient;

class Dining extends BaseClient
{
    public function bojiBan(){
        echo '实例化中的参数';
        var_dump($this->app->params);
        echo "点一份簸箕板";
    }

    public function BeijingKaoYa(){
        echo '点一份北京烤鸭';
    }
}
