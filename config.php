<?php
//必须需要修改的参数
//#################################################################################################
$bucket = 'bucket';//又拍云的服务名
//$form_api_secret = 'form_api_secret';//表单密钥：后台——>空间——>通用——>基本设置
$operator ='operator'; //授权的操作员
$password = md5('password'); // 授权的操作员密码
//#################################################################################################
$GMTdate = gmdate('D, d M Y H:i:s') . ' GMT';
$method = 'POST';
$URI = '/'.$bucket;
$options = array();
$options['bucket'] = $bucket;
$options['expiration'] = time()+3600;
$options['save-key'] = '/{year}/{mon}/{day}/upload_{filename}{.suffix}';//save-key 详细说明可以看官方文档
$options['date'] = $GMTdate;
$policy = base64_encode(json_encode($options));//policy 生成
$str = $method.'&'.$URI.'&'.$GMTdate.'&'.$policy;
$signature = base64_encode(hash_hmac('sha1',$str, $password, true));
$authorization = "UPYUN {$operator}:{$signature}";
//$signature = md5($policy.'&'.$form_api_secret);// sigenature生成
?>
