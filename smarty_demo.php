<?php
	require "./smarty_init.php";
	//分配占位符的内容
	$smarty->assign("title","111111"); 
	$smarty->assign("content","22222");

	function myfun(){
		return date('Y-m-d H:i:s');
	}
	//将myfun变成函数标签
	$smarty->registerPlugin("function","my","test");

	function test($args){
		$str="";
		for($i=0;$i<$args["num"];$i++){
			$str.=
			'<font color="'.$args['color'].
			'size="'.$args['size'].'">'.
			$args['content'].'</font></br>';
		}
		return $str;
	}

	//9,3

	try {
		$pdo = new PDO("mysql:host=localhost;dbname=ecshop", "root", "");
	}catch(PDOException $e) {
		echo $e->getMessage();

	}
	
	$sql = "select user_id, user_name  from ecs_users ";

	$stmt = $pdo -> prepare($sql);
	$stmt -> execute();


	$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

	//print_r($data);

	$smarty -> assign("data", $data);

	$smarty -> assign("var", "9999999999999999");

	
		//用什么模板展示
	$smarty->display("son.html");
?>