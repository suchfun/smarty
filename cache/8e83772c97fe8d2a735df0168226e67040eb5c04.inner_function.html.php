<?php
/*%%SmartyHeaderCode:2736455f56776c30b00_21718133%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e83772c97fe8d2a735df0168226e67040eb5c04' => 
    array (
      0 => 'D:\\tools\\xampp\\htdocs\\test\\tpls\\inner_function.html',
      1 => 1442146163,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2736455f56776c30b00_21718133',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'one' => 0,
    'two' => 0,
    'three' => 0,
    'four' => 0,
    'five' => 0,
    'six' => 0,
    'seven' => 0,
    'a' => 0,
    'foo' => 0,
    'start' => 0,
    'end' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55f56777ae2655_39378516',
  'cache_lifetime' => 30,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55f56777ae2655_39378516')) {
function content_55f56777ae2655_39378516 ($_smarty_tpl) {
?>
<!--  模板内置函数的变量声明和流程控制 -->


111111111<br>
2222222<br>
3333<br>
4444<br>
bilibili<br>
113333333<br>
111111111+2222222<br>
<br><br><br><br><br><br><br>
--------------else   if----------------<br>
<!-- smarty3中没有swich case,可以利用else if 的嵌套哦实现  -->
<!--   '==' -> 'eq','!=' -> 'neq'  ,'>'->'gt','<'->'lt'  ,'!'->'not  '    ,'%'->'mod'  更多参考文档中模板设计片->内置函数->elseif -->
	not equal~<br>
------------------for----------------<br>
<ul>
					<li>1</li>
					<li>2</li>
					<li>3</li>
					<li>4</li>
					<li>5</li>
					<li>6</li>
					<li>7</li>
					<li>8</li>
					<li>9</li>
					<li>10</li>
		</ul>
<br>
<ul>
			<!-- 注意：step 后面不加'=',max后面要'=' ;且for中变量默认是递增的,就是说start要大鱼等于end,如果小于则执行forelse-->
		<li>1</li>
	<!-- 注意：step 后面不加'=',max后面要'=' ;且for中变量默认是递增的,就是说start要大鱼等于end,如果小于则执行forelse-->
		<li>3</li>
	<!-- 注意：step 后面不加'=',max后面要'=' ;且for中变量默认是递增的,就是说start要大鱼等于end,如果小于则执行forelse-->
		<li>5</li>
	</ul><br>
-------------------while--------------<br>
	10<br>
	9<br>
	8<br>
	7<br>
	6<br>
	5<br>
	4<br>
	3<br>
	2<br>
	1<br>
<?php }
}
?>