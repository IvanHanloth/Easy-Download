<?php
if(strpos($_SERVER['HTTP_USER_AGENT'], 'QQ/')!==false || strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger')!==false){
	header('Content-type:text/html;charset=utf-8');
	include './jump.php';
	exit;
};
$name=$_REQUEST["name"];
$url=$_REQUEST["url"]
?>
<!Doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>
			文件下载页面
		</title>
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-touch-fullscreen" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="full-screen" content="yes">
		<!--UC强制全屏-->
		<meta name="browsermode" content="application">
		<!--UC应用模式-->
		<meta name="x5-fullscreen" content="true">
		<!--QQ强制全屏-->
		<meta name="x5-page-mode" content="app">
		<!--QQ应用模式-->
		<link href="./layui/css/layui.css" rel="stylesheet">
		<style>
			html,body,table{ margin:0; height:100%; text-align: center; } table{ width:100%;
			} .box{ padding:0px 5%; }
		</style>
	</head>
	<body>
		<table>
			<td>
				<div class="box">
					正在为您下载……
					<h5>
						文件名:
						<b>
							<?php echo $name?>
						</b>
					</h5>
					<div class="layui-progress layui-progress-big" lay-filter="download" style="max-width:800px">
						<div class="layui-progress-bar" lay-percent="0%">
						</div>
					</div>
					<div class="layui-btn-container" style="margin:5px">
						<button type="button" class="layui-btn layui-btn-sm layui-btn-radius"
						id="cancel">
							取消下载
						</button>
						<button type="button" class="layui-btn layui-btn-sm layui-btn-radius layui-btn-warm layui-hide"
						id="reload">
							重新下载
						</button>
					</div>
					<div id="tip" style="text-align:center;margin:5px">
					</div>
					<div id="msg" style="text-align:center;margin:5px">
					</div>
				</div>
			</td>
		</table>
		<footer>
			<script src="./jquery-3.1.1.js">
			</script>
			<script src="./layui/layui.js">
			</script>
			<script src="./download.js">
			</script>
			<script>
				download( <?php echo "'".$url."','".$name."'" ?>)
			</script>
		</footer>
	</body>

</html>