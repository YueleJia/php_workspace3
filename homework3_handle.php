<html>
<body>
<?php
	$str = $_GET["mystring"];
	if(strlen($str) % 2 ==0) {
?>
		<img src = "http://www.baidu.com/img/bdlogo.gif"/>
<?php
	}else {
?>
		<img src = "http://www.google.com/logo2.png"/>
<?php
	}
?>
</body>
</html>
