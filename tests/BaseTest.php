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
        (new Dotenv(true))->load('.env');
        parent::setUp();
    }
}