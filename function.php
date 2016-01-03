<?php


function writeHello(){
	echo "hello<br>";
}
writeHello();
echo "-----------------------------------------<br>";

function familyName($fname="suchfun") {//默认参数值
  echo "$fname Zhang.<br>";
}
	familyName();
	familyName("Li");
	familyName("Hong");
	familyName("Tao");
	familyName("Xiao Mei");
	familyName("Jian");
echo "-----------------------------------------<br>";

	function sum($a,$b){
		$c = $a+$b;
		return $c;
	}
	echo "4+3=".sum(4,3)."<br>";   //函数声明无返回变量，只是在函数体中写入return语句
echo "-----------------------------------------<br>";

//超全局变量
$x=55;
$y=45;
function add(){
	$GLOBALS['c'] = $GLOBALS['x']+$GLOBALS['y'];
}
add();
echo $c."<br>";
echo "-----------------------------------------<br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['SERVER_PORT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
	?>