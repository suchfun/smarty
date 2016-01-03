<?php
/*%%SmartyHeaderCode:616855f561b881edd9_63697839%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c52cc1db4c55479e758dc80c646e77efb2b1f33' => 
    array (
      0 => 'D:\\tools\\xampp\\htdocs\\test\\tpls\\modifier.html',
      1 => 1442144689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '616855f561b881edd9_63697839',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'var' => 0,
    'var2' => 0,
    'time' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55f561b8a68a43_49279001',
  'cache_lifetime' => 30,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55f561b8a68a43_49279001')) {
function content_55f561b8a68a43_49279001 ($_smarty_tpl) {
?>
this is22 a44 test<br>
<!--  以  变量|函数名的形式   使用调解器 -->
<font color="#0000dd" size="7">THIS IS22 A44 TEST</font><br>
<font color="red" size="7">THIS IS22 A44 TEST</font><br>
<font color="blue" size="10">THIS IS22 A44 TEST</font><br>
<!-- 直接调用php的函数 -->
this is22 <br>
<!-- 直接将php的函数变成调解器（前提是：php函数的第一个参数是要改变的额变量本身） -->
this is22 <br>
<!-- 将所哦有的数字替换成# -->
this is## a## test<br>
<!-- 组合调解器 <font colo<br>-->
<font colo<br>

<font color="green" size="7">THIS IS@@ </font><br>

<!-- 系统自带的调解器 ，详细查看文档-->
This Is A Test<br>
1442144696<br>

Sep 13, 2015<br><!-- 后面可以加各种格式作为参数，参考文档 -->
<?php }
}
?>