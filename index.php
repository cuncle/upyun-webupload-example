<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Webuploader-Demo</title>
        
		<link rel="stylesheet" type="text/css" href="css/webuploader.css"/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <script type="text/javascript" src="./js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="./webuploader/webuploader.js"></script>
		<script type="text/javascript" src="./js/bootstrap.min.js"></script>
        <script type="text/javascript" src="./js/upload.js"></script>
    </head>
    <body>
        <?php
        require_once('./config.php');
        ?>

<div id="uploader-demo">
    <!--用来存放item-->
    <div id="fileList" class="uploader-list"></div>
    <div id="filePicker">选择图片</div>
	<button id="ctlBtn" class="btn btn-default">开始上传</button>
</div>
    </body>
</html>
