<?php

namespace JavaReact\AlibabaOpen\tools;

final class Sign
{
    /**
     * 验证消息签名
     *
     * @param array $params 一定要包含message和_aop_signature
     * @param $appSecret
     * @return bool
     * @see https://open.1688.com/doc/msgOverview.htm?id=546049
     */
    public static function verifySign(array $params, $appSecret)
    {
        if (empty($params['message']) || empty($params['_aop_signature'])) {
            //缺少关键参数
            return false;
        }
        $sign = hash_hmac('sha1', 'message' . html_entity_decode($params['message']), $appSecret);//多次解码不会出现问题
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