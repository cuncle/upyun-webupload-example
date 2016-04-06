**UPYUN-Webupload上传Demo**

一个基于 又拍云云存储 及Webupload 开发的上传Demo

**依赖**

1、webupload

2、UPYUN HTTP FORM API

**安装和运行程序**

获取源代码： git clone https://github.com/cuncle/upyun-webupload-example.git

编辑 config.php 文件，填写您的BUCKET和Form_Api_Secret，表单密钥通过后台——>服务——>功能配置——>高级功能——>表单API密钥获取。

**说明**

```
jQuery(function() {
    var $ = jQuery,
        $list = $('#fileList'),
        $btn = $('#ctlBtn'),
        $policy = $('#policy').val(),
        $sign = $('#sign').val(),
        $api = $('#api').val(),
        state = 'pending',      
        // Web Uploader实例
        uploader;
        uploader = WebUploader.create({
        // swf文件路径
        swf: '/webuploader/Uploader.swf',
        // 文件接收服务端。
        server: $api,
        // 选择文件的按钮。可选。
        // 内部根据当前运行是创建，可能是input元素，也可能是flash.
        pick: '#filePicker',
        formData: {
            policy: $policy,
            signature: $sign
        }
    });
```

上传文件后，可以通过UPYUN外链方式访问获取上传的文件。
