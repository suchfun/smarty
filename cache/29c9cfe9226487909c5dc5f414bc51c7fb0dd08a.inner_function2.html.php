<?php
/*%%SmartyHeaderCode:2081655f5685174e481_39960353%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29c9cfe9226487909c5dc5f414bc51c7fb0dd08a' => 
    array (
      0 => 'D:\\tools\\xampp\\htdocs\\test\\tpls\\inner_function2.html',
      1 => 1442146381,
      2 => 'file',
    ),
    'b986637139c947976ba1db1105b0b1f0caf58f5a' => 
    array (
      0 => 'D:\\tools\\xampp\\htdocs\\test\\tpls\\header.html',
      1 => 1441890576,
      2 => 'file',
    ),
    '1c7350cb8a0a5a3c8165f51025e25d550ad11bc3' => 
    array (
      0 => 'D:\\tools\\xampp\\htdocs\\test\\tpls\\footer.html',
      1 => 1441890576,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2081655f5685174e481_39960353',
  'tpl_function' => 
  array (
    'fun1' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => 'D:/tools/xampp/htdocs/test//coms\\29c9cfe9226487909c5dc5f414bc51c7fb0dd08a_0.file.inner_function2.html.cache.php',
      'uid' => '29c9cfe9226487909c5dc5f414bc51c7fb0dd08a',
      'call_name' => 'smarty_template_function_fun1_2081655f5685174e481_39960353',
    ),
    'fun2' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => 'D:/tools/xampp/htdocs/test//coms\\29c9cfe9226487909c5dc5f414bc51c7fb0dd08a_0.file.inner_function2.html.cache.php',
      'uid' => '29c9cfe9226487909c5dc5f414bc51c7fb0dd08a',
      'call_name' => 'smarty_template_function_fun2_2081655f5685174e481_39960353',
    ),
  ),
  'variables' => 
  array (
    'a' => 0,
    'country' => 0,
    'who' => 0,
    'arrvar' => 0,
    'itemvar' => 0,
    'lamp' => 0,
    'key' => 0,
    'value' => 0,
    'header' => 0,
    'data' => 0,
    'row' => 0,
    'col' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55f56851d74f55_88515664',
  'cache_lifetime' => 30,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55f56851d74f55_88515664')) {
function content_55f56851d74f55_88515664 ($_smarty_tpl) {
?>
<!--模板内置函数中的函数声明和使用-->

------fun1------
		hello china~<br>
		i am suchfun<br>
<br>


----------fun2-----------<br>
		ook<br>
		hello china<br>
		i am suchfun<br>

-------------foreach------------<br>
<!--<br />
<b>Notice</b>:  Undefined index: arrvar in <b>D:\tools\xampp\htdocs\test\coms\29c9cfe9226487909c5dc5f414bc51c7fb0dd08a_0.file.inner_function2.html.cache.php</b> on line <b>76</b><br />
<br />
<b>Notice</b>:  Trying to get property of non-object in <b>D:\tools\xampp\htdocs\test\coms\29c9cfe9226487909c5dc5f414bc51c7fb0dd08a_0.file.inner_function2.html.cache.php</b> on line <b>76</b><br />
	error<br>
  -->

	os=>linux<br>
	ws=>apache<br>
	db=>mysql<br>
	sc=>php<br>
<br>----------------------foreach   db--------------<br>
<!--  php中分配的变量也可以在include的模板中使用 -->
-------------------------------------------------------------<br>
<!-- 将包含的模板分配给一个变量，这句代{$header}-->
-------------------------------------------------------------<br>
<table align="center" border="1" width="800">
	<caption><h1>xs_user</h1></caption>
	
						<tr bgcolor="red">
					<td>0</td>  <!--  index是当前数组的索引 -->
			<td>1</td><!--  iteration是当前循环的次数-->
							<td>1</td>
							<td>ecshop</td>
					</tr>
						<tr>
					<td>1</td>  <!--  index是当前数组的索引 -->
			<td>2</td><!--  iteration是当前循环的次数-->
							<td>2</td>
							<td>vip</td>
					</tr>
			   <!-- 这个row的index是哦偶数 -->
			<tr bgcolor="#cccccc">
					<td>2</td>  <!--  index是当前数组的索引 -->
			<td>3</td><!--  iteration是当前循环的次数-->
							<td>3</td>
							<td>text</td>
					</tr>
						<tr bgcolor="blue">
					<td>3</td>  <!--  index是当前数组的索引 -->
			<td>4</td><!--  iteration是当前循环的次数-->
							<td>5</td>
							<td>zuanshi</td>
					</tr>
	码不显示 -->
<

</table>
-------------------------------------------------------------<?php }
}
?><?php /* smarty_template_function_fun1_2081655f5685174e481_39960353 */
if (!function_exists('smarty_template_function_fun1_2081655f5685174e481_39960353')) {
function smarty_template_function_fun1_2081655f5685174e481_39960353($_smarty_tpl,$params) {
$saved_tpl_vars = $_smarty_tpl->tpl_vars;
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value);
}?>
		hello china~<br>
		i am suchfun<br>
<?php foreach (Smarty::$global_tpl_vars as $key => $value){
if ($_smarty_tpl->tpl_vars[$key] === $value) $saved_tpl_vars[$key] = $value;
}
$_smarty_tpl->tpl_vars = $saved_tpl_vars;
}
}
/*/ smarty_template_function_fun1_2081655f5685174e481_39960353 */?>
<?php /* smarty_template_function_fun2_2081655f5685174e481_39960353 */
if (!function_exists('smarty_template_function_fun2_2081655f5685174e481_39960353')) {
function smarty_template_function_fun2_2081655f5685174e481_39960353($_smarty_tpl,$params) {
$saved_tpl_vars = $_smarty_tpl->tpl_vars;
$params = array_merge(array('a'=>'smarty'), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value);
}?>
		<?php echo $_smarty_tpl->tpl_vars['a']->value;?>
<br>
		hello <?php echo $_smarty_tpl->tpl_vars['country']->value;?>
<br>
		i am <?php echo $_smarty_tpl->tpl_vars['who']->value;?>
<br>
<?php foreach (Smarty::$global_tpl_vars as $key => $value){
if ($_smarty_tpl->tpl_vars[$key] === $value) $saved_tpl_vars[$key] = $value;
}
$_smarty_tpl->tpl_vars = $saved_tpl_vars;
}
}
/*/ smarty_template_function_fun2_2081655f5685174e481_39960353 */?>
