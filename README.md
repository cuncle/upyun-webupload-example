**UPYUN-Webupload上传Demo**

一个基于 又拍云云存储 及Webupload 开发的上传Demo

**依赖**

1、webupload

2、UPYUN HTTP FORM API

**安装和运行程序**

获取源代码： git clone https://github.com/cuncle/upyun-webupload-example.git

编辑 config.php 文件，修改您的服务名，操作员，操作员密码。

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
            authorization: $authorization
        }
    });
```

上传文件后，可以通过UPYUN外链方式访问获取上传的文件。
