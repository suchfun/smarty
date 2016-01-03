<?php /* Smarty version 3.1.27, created on 2015-09-13 14:13:05
         compiled from "D:\tools\xampp\htdocs\test\tpls\inner_function2.html" */ ?>
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
  ),
  'nocache_hash' => '2081655f5685174e481_39960353',
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
  'unifunc' => 'content_55f56851971ce3_95922834',
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
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55f56851971ce3_95922834')) {
function content_55f56851971ce3_95922834 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2081655f5685174e481_39960353';
?>
<!--模板内置函数中的函数声明和使用-->

------fun1------
<?php $_smarty_tpl->callTemplateFunction ('fun1', $_smarty_tpl, array(), false);?>
<br>


----------fun2-----------<br>
<?php $_smarty_tpl->callTemplateFunction ('fun2', $_smarty_tpl, array('a'=>"ook",'country'=>"china",'who'=>"suchfun"), false);?>

-------------foreach------------<br>
<?php $_smarty_tpl->tpl_vars['lamp'] = new Smarty_Variable(array('os'=>'linux','ws'=>'apache','db'=>'mysql','sc'=>'php'), null, 0);?>
<!--<?php
$_from = $_smarty_tpl->tpl_vars['arrvar']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['itemvar'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['itemvar']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['itemvar']->value) {
$_smarty_tpl->tpl_vars['itemvar']->_loop = true;
$foreach_itemvar_Sav = $_smarty_tpl->tpl_vars['itemvar'];
?>
	<?php echo $_smarty_tpl->tpl_vars['itemvar']->value;?>
<br>
<?php
$_smarty_tpl->tpl_vars['itemvar'] = $foreach_itemvar_Sav;
}
if (!$_smarty_tpl->tpl_vars['itemvar']->_loop) {
?>
	error<br>
<?php
}
?>  -->

<?php
$_from = $_smarty_tpl->tpl_vars['lamp']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['value']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$foreach_value_Sav = $_smarty_tpl->tpl_vars['value'];
?>
	<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
=><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
<br>
<?php
$_smarty_tpl->tpl_vars['value'] = $foreach_value_Sav;
}
if (!$_smarty_tpl->tpl_vars['value']->_loop) {
?>

<?php
}
?>
<br>----------------------foreach   db--------------<br>
<!--  php中分配的变量也可以在include的模板中使用 -->
<?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
?>
<br>
<?php $_smarty_tpl->tpl_vars["header"] = new Smarty_Variable($_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0));
?>
<!-- 将包含的模板分配给一个变量，这句代{$header}-->
<?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<br>
<table align="center" border="1" width="800">
	<caption><h1>xs_user</h1></caption>
	
	<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['row']->_loop = false;
$_smarty_tpl->tpl_vars['row']->total= $_smarty_tpl->_count($_from);
$_smarty_tpl->tpl_vars['row']->iteration=0;
$_smarty_tpl->tpl_vars['row']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$_smarty_tpl->tpl_vars['row']->iteration++;
$_smarty_tpl->tpl_vars['row']->index++;
$_smarty_tpl->tpl_vars['row']->first = $_smarty_tpl->tpl_vars['row']->index == 0;
$_smarty_tpl->tpl_vars['row']->last = $_smarty_tpl->tpl_vars['row']->index + 1 == $_smarty_tpl->tpl_vars['row']->total;
$foreach_row_Sav = $_smarty_tpl->tpl_vars['row'];
?>
		<?php if ($_smarty_tpl->tpl_vars['row']->last) {?>
			<tr bgcolor="blue">
		<?php } elseif ($_smarty_tpl->tpl_vars['row']->first) {?>
			<tr bgcolor="red">
		<?php } elseif (!(1 & $_smarty_tpl->tpl_vars['row']->index)) {?>   <!-- 这个row的index是哦偶数 -->
			<tr bgcolor="#cccccc">
		<?php } else { ?>
			<tr>
		<?php }?>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->index;?>
</td>  <!--  index是当前数组的索引 -->
			<td><?php echo $_smarty_tpl->tpl_vars['row']->iteration;?>
</td><!--  iteration是当前循环的次数-->
			<?php
$_from = $_smarty_tpl->tpl_vars['row']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['col'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['col']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->_loop = true;
$foreach_col_Sav = $_smarty_tpl->tpl_vars['col'];
?>
				<td><?php echo $_smarty_tpl->tpl_vars['col']->value;?>
</td>
			<?php
$_smarty_tpl->tpl_vars['col'] = $foreach_col_Sav;
}
?>
		</tr>
	<?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
if (!$_smarty_tpl->tpl_vars['row']->_loop) {
?>	
		数组为空，或数组没有被分配过来
	<?php
}
?>码不显示 -->
<

</table>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?><?php
/* smarty_template_function_fun1_2081655f5685174e481_39960353 */
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
/*/ smarty_template_function_fun1_2081655f5685174e481_39960353 */

?>
<?php
/* smarty_template_function_fun2_2081655f5685174e481_39960353 */
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
/*/ smarty_template_function_fun2_2081655f5685174e481_39960353 */

?>
