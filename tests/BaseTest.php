<?php

namespace Test\AlibabaOpen;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Dotenv\Dotenv;

/**
 * Class BaseTest 测试基类
 * @package Test\CQApi
 */
class BaseTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        //设置测试环境变量
        (new Dotenv(true))->load(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '.env');
    }
}