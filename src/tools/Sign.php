<?php

namespace JavaReact\AlibabaOpen\tools;

final class Sign
{
    /**
     * 验证消息签名
     *
     * @param $params
     * @param $appSecret
     * @return bool
     * @see https://open.1688.com/doc/msgOverview.htm?id=546049
     */
    public static function verifySign(array $params, $appSecret)
    {
        if (empty($params['message']) || empty($params['_aop_signature'])) {
            return false;
        }
        $sign = hash_hmac('sha1', 'message' . $params['message'], $appSecret);
        return strtoupper($sign) == $params['_aop_signature'];
    }

    /**
     * 生成签名
     *
     * @param $signStr
     * @param $appSecret
     * @return string
     */
    public static function generateSign($signStr, $appSecret)
    {
        return strtoupper(hash_hmac("sha1", $signStr, $appSecret));
    }

}