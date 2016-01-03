<?php
	include "../smarty_init.php";

	//assign();
	$smarty ->assign("title","this is a demo");
	$smarty ->assign("content", "this is article content");

	$smarty ->assign(array("author"=>"高洛峰", "ptime"=>date("Y-m-d H:i:s")));

	function myfun() {
		return date("Y-m-d");
	}

	$smarty -> registerPlugin("function", "myfun", "test");

	function test($args) {
		//$args=array("size"=>7,color="red", "num"=>5, "content"=>"111111111")

		$str="";

		for($i=0; $i<$args["num"]; $i++) {
			$str.='<font color="'.$args['color'].' size="'.$args['size'].'">'.$args["content"].'</font><br>';
		}
		return $str;

	}


	$smarty -> assign("contacts", array("010-123456789", "gaolf@brophp.com", array("12345678", "987654321")));

	$smarty -> assign("con", array("fax"=>"010-09876543", "email"=>"gaolf@brophp.com", "phone"=>array('123456789',"home"=>"987654")));

	class Person {
		public $name="zhangsan";

		function say() {
			return $this->name."111111111111";
		}

		function one() {
			$this->name="wwwwwwwwww";
			return $this;
		}
	}

	$smarty -> assign("p", new Person());

	//display();
	//$smarty->display("demo.tpl");
	//$smarty->display("user/demo.tpl");
	//$smarty->display("/user/local/include/templates/header.tpl");
	//$smarty->display("file:c:/www/pub/templates/header.tpl");
	$smarty -> display("demo2.html");
