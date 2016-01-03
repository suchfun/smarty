<?php
	require "./smarty_init.php";
	$smarty->assign("var","this is22 a44 test");   //时间戳，yy-mm-dd hh-
	$smarty->assign("var2","this is a test");
	$smarty->assign("time",time());
	//将test方法注册成模板中可以使用的修改器
	$smarty->registerPlugin("modifier","myfun","test");
	//php系统的函数，如果第一个参数是变量，则可以直接修改成修改器
	$smarty->registerPlugin("modifier","sub","substr");
	$smarty->registerPlugin("modifier","preplace","demo");
	

	//如果第一个参数不是变量，例如
	function demo($var,$p,$r){
		return preg_replace($p, $r, $var); 
	}


	//给传入的参数赋值，是变量的默认值
	function test($var,$color='#0000dd',$size='7'){
		return '<font color="'.$color.'" size="'.$size.'">'.strtoupper($var).'</font>';
	}


	$smarty->display("modifier.html");
?>