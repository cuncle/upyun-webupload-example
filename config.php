<?php

// 空间名
$bucket = 'bucket_name';

//表单密钥通过后台——>服务——>功能配置——>高级功能——>表单API密钥获取
$form_api_secret = 'form_api_secret';

//上传API地址
$api= 'http://v0.api.upyun.com/' . $bucket.'/';
$options = array();
$options['bucket'] = $bucket;
// 授权过期时间：以页面加载完毕开始计时，10分钟内有效
$options['expiration'] = time()+600;

// 保存路径：最终将以"/年/月/日/upload_待上传文件名"的形式进行保存
// 文件的md5值作为上传成功后的文件名 以防止中文文件名出现的错误
$options['save-key'] = '/{year}/{mon}/{day}/upload_{filemd5}{.suffix}';

$policy = base64_encode(json_encode($options));

// 计算签名值，具体说明请参阅"Signature 签名"
$sign = md5($policy.'&'.$form_api_secret);

?>