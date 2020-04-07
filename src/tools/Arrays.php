<?php

namespace JavaReact\AlibabaOpen\tools;

class Arrays
{
    /**
     * 转为字节数组
     * @param string $str
     * @return array
     */
    public static function toByteArray(string $str)
    {
        return array_map('ord', str_split($str, 1));
    }
}