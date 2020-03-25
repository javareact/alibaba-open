<?php


namespace JavaReact\AlibabaOpen\core;

/**
 * Class BaseClient
 * @package JavaReact\AlibabaOpen\core
 * @property \JavaReact\AlibabaOpen\AlibabaClient app
 */
class BaseClient
{
    /**
     * @var Container
     */
    protected $app;

    /**
     * @var string
     */
    public $base_url = 'http://gw.open.1688.com/openapi/';

    /**
     * @var
     */
    public $url_info;

    /**
     * @var
     */
    protected $postData;

    /**
     * @var
     */
    public $res_url;

    /**
     * BaseClient constructor.
     * @param Container $app
     */
    public function __construct(Container $app)
    {
        $this->app = $app;
    }


    /**
     * 签名
     * @throws Exception
     */
    public function sign()
    {
        //url 因子
        if (empty($this->url_info)) {
            throw new Exception('url因子为空，如无配置，请配置');
        }
        $arr       = explode(':', $this->url_info);
        $spacename = $arr[0];
        $arr       = explode('-', $arr[1]);
        $version   = $arr[1];
        $apiname   = $arr[0];
        $url_info  = 'param2/' . $version . '/' . $spacename . '/' . $apiname . '/';
        //参数因子
        $appKey    = $this->app->appkey;
        $appSecret = $this->app->appsecret;
        $apiInfo   = $url_info . $appKey;//此处请用具体api进行替换
        //配置参数，请用apiInfo对应的api参数进行替换
        $code_arr  = array_merge([
            'access_token' => $this->app->access_token
        ], $this->app->params);
        $aliParams = array();
        $url_pin   = '';
        foreach ($code_arr as $key => $val) {
            $url_pin     .= $key . '=' . $val . '&';
            $aliParams[] = $key . $val;
        }
        sort($aliParams);
        $sign_str = join('', $aliParams);
        $sign_str = $apiInfo . $sign_str;
        //签名
        $code_sign      = strtoupper(bin2hex(hash_hmac("sha1", $sign_str, $appSecret, true)));
        $this->postData = $code_arr;
        $this->res_url  = $this->base_url . $apiInfo . '?' . $url_pin . '_aop_signature=' . $code_sign;
    }

    /**
     * GET请求方式
     * @return array
     */
    public function get()
    {
        $this->sign();
        $file = $this->curlRequest($this->res_url, '', 'GET');
        return json_decode($file, true);
    }

    /**
     * POST请求方式
     * @throws array
     */
    public function post()
    {
        $this->sign();
        $result = $this->curlRequest($this->res_url, $this->postData, 'POST');
        return json_decode($result, true);
    }

    /**
     * @param $comalibabatradealibabatradegetbuyerView
     * @return $this
     */
    public function setApi($comalibabatradealibabatradegetbuyerView)
    {
        $this->url_info = $comalibabatradealibabatradegetbuyerView;
        return $this;
    }

    /**
     * curl 请求
     * @param $base_url
     * @param $query_data
     * @param string $method
     * @param bool $ssl
     * @param int $exe_timeout
     * @param int $conn_timeout
     * @param int $dns_timeout
     * @return bool|string
     */
    public function curlRequest($base_url, $query_data, $method = 'get', $ssl = true, $exe_timeout = 10, $conn_timeout = 10, $dns_timeout = 3600)
    {

        $ch = curl_init();
        if ($method == 'get') {
            //method get
            if ((!empty($query_data))
                && (is_array($query_data))
            ) {
                $connect_symbol = (strpos($base_url, '?')) ? '&' : '?';
                foreach ($query_data as $key => $val) {
                    if (is_array($val)) {
                        $val = serialize($val);
                    }
                    $base_url       .= $connect_symbol . $key . '=' . rawurlencode($val);
                    $connect_symbol = '&';
                }
            }
        } else {
            if ((!empty($query_data))
                && (is_array($query_data))
            ) {
                foreach ($query_data as $key => $val) {
                    if (is_array($val)) {
                        $query_data[$key] = serialize($val);
                    }
                }
            }
            //method post
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $query_data);
        }
        curl_setopt($ch, CURLOPT_URL, $base_url);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $conn_timeout);
        curl_setopt($ch, CURLOPT_DNS_CACHE_TIMEOUT, $dns_timeout);
        curl_setopt($ch, CURLOPT_TIMEOUT, $exe_timeout);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        // 关闭ssl验证
        if ($ssl) {
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        }
        $output = curl_exec($ch);
        if ($output === FALSE)
            $output = '';

        curl_close($ch);
        return $output;
    }

}
