<html>
	<head>
		<title>图形计算(使用面向对象技术开发) </title>
		<meta http-equiv="Content-type" content="text/html;charset=utf-8"/>
	</head>
	
	<body>
		<center>
			<h1>图形(周长&面积)计算器</h1>
			<a href="index.php?action=rect">矩形</a> ||
			<a href="index.php?action=triangle">三角形</a> ||
			<a href="index.php?action=circle">圆形</a> <hr/>
		</center>
		<?php 
			//设置错误报告级别
			error_reporting(E_ALL & ~E_NOTICE);
			//通过魔术方法__autoload去自动加载所需的类文件,包含进来
			function __autoload($className){
				include strtolower($className).".class.php";
			}
			echo new Form("index.php"); // 输出用户需要的表单
			
			//计算提交的结果
			if (isSet($_POST['sub'])) {
				echo new Result();;
			}
		?>
	</body>
</html>
