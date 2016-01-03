<?php

	
	include "smarty_init.php";
	include "page.class.php";

	//判断如果  “$_SERVER["REQUEST_URI"]”这样一个缓存名称 的文件存在的话，就不执行以下代码（包括数据库的连接和查询等操作）
if(!$smarty -> isCached("cache.html", $_SERVER["REQUEST_URI"])) {


	//利用PDO类实现数据库的连接
	try {
		$pdo = new PDO("mysql:host=localhost;dbname=ecshop", "root", "");
	}catch(PDOException $e) {
		echo $e->getMessage();

	}
	//使用别人的  分页类  ，初始化这个类，第一个参数是分页的总记录数，第二个参数是每页的记录数
	$page = new Page(90, 3);
	
	$sql = "select user_id, user_name, password from ecs_users order by user_id {$page->limit}";
	//做记号，如果与输出  LIMIT  。。。。说哦名不是重缓存中取出的数据
	echo $page->limit.'<br>';

	$stmt = $pdo -> prepare($sql);
	$stmt -> execute();


	$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

	$smarty -> assign("data", $data);
	$smarty -> assign("fpage", $page->fpage());

}	
	//写在isCached()之外， 这里的代码都要执行

	$smarty -> assign("ctime", date("Y-m-d H:i:s"));

	
	//调用dosplay的时候判断，如果调用的模板文件存在，则直接从缓存中掉用
	/*
	栗子：要缓存cache.html?page=7&action=sdf  和  cache.html?page=7&action=sdff  
	这两个不同的页面就需要给display方法加上cache_id，即下面代码中的$_SERVER["REQUEST_URI"]
	*/
	$smarty->display("cache.html", $_SERVER["REQUEST_URI"]);

	//	$smarty -> clearAllCache();清楚缓存
