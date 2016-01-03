<?php
	//设置绝对路径，防止引入文件是对‘./’当前目录产生误解
	// dirname(__FILE__)=> D:\tools\xampp\htdocs\test\smarty
	define("ROOT", str_replace("\\", "/", dirname(__FILE__)).'/');
	require ROOT."libs/Smarty.class.php";
	
	$smarty = new Smarty();
	//开启缓存
	$smarty -> caching = true;
	//设置缓存路径
	$smarty -> setCacheDir(ROOT."/cache/");
	//设置缓存时间
	$smarty -> cache_lifetime = 30;  //60*60*24*7 

	$smarty->setTemplateDir(ROOT."/tpls")  //设置模板路径
			->setCompileDir(ROOT."/coms"); //设置编译文件的路径
	$smarty->auto_literal=false; //设置占位符中间可以出现空格

	$smarty->left_delimiter="<{";//更改临界符
	$smarty->right_delimiter="}>";
	
	$smarty->setConfigDir(ROOT."/configs");//设置配置目录
	$smarty->addPluginsDir(ROOT."plugins");//添加插件目录
?>w