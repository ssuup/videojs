<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="video/video.min.css">
		<style type="text/css">
		*{margin: 0;padding: 0;font-family: "Microsoft YaHei",SimHei,"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:13px;}
		img{border: 0;}
		a{color:inherit;text-decoration: none;color:#4B7E9D;}
		a:hover{text-decoration: underline;}
		body{background:#000;padding: 0;margin: 0;width:100%;height:100%;color:#fff;overflow:hidden;cursor: default;}
		.player{position:absolute;width:100%;height:100%;}         
         .vjs-paused .vjs-big-play-button,
         .vjs-paused.vjs-has-started .vjs-big-play-button {
    display: block;

		</style>
        <script src="video/video.min.js" charset="utf-8"></script>
        <script src="video/video-conrtib-ads.js" charset="utf-8"></script>
        <script type="text/javascript" src="video/play.js"></script>
        <script src="lang/zh-CN.js"></script>
</head>
<body>
	<div class="player">
    <video id="playVideo" class="video-js" preauto="auto" poster="video/loading_wap.gif"> </video>
    </div>
        <script type="text/javascript">
            var vPath = '<?php echo($_REQUEST['url']);?>';
             var myplayer=initVideo({
                id:'playVideo',
                url:vPath,
                logo:{
                       url:'logo.png',
                        width:'100px'
                       },
                /*ad:{
                    pre:{
                    url:'http://video2.jiagew762.com:8091/20180910/mHVFer3v/index.m3u8',
                    link:'http://www.zhihu.com',
                    },
                    pause:{
                    url:'https://pic1.zhimg.com/v2-7c9baab65a24bbc51f132dda86058c58_400x224.jpg',
                    link:'http://www.zhihu.com',
                    }
                }*/
            });
        </script>
</body>
</html>