<?php /* Smarty version 3.1.27, created on 2016-01-03 04:30:19
         compiled from "D:\tools\xampp\htdocs\test\smarty\tpls\cache.html" */ ?>
<?php
/*%%SmartyHeaderCode:11203568895cbda7872_08901131%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '668f7188ba9fe4ff9333b84a0c3bb0210936f24c' => 
    array (
      0 => 'D:\\tools\\xampp\\htdocs\\test\\smarty\\tpls\\cache.html',
      1 => 1451791591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11203568895cbda7872_08901131',
  'variables' => 
  array (
    'ctime' => 1,
    'data' => 0,
    'row' => 0,
    'col' => 0,
    'fpage' => 0,
  ),
  'has_nocache_code' => true,
  'version' => '3.1.27',
  'unifunc' => 'content_568895cbde74d5_42031493',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_568895cbde74d5_42031493')) {
function content_568895cbde74d5_42031493 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11203568895cbda7872_08901131';
?>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<table align="center" border="1" width="800">
	<caption><h1>ecs_user  <?php echo '/*%%SmartyNocache:11203568895cbda7872_08901131%%*/<?php echo $_smarty_tpl->tpl_vars[\'ctime\']->value;?>
/*/%%SmartyNocache:11203568895cbda7872_08901131%%*/';?>
</h1></caption><!--   使用nocache中的变量不会缓存 -->
	
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
		<?php } elseif (!(1 & $_smarty_tpl->tpl_vars['row']->index)) {?>
			<tr bgcolor="#cccccc">
		<?php } else { ?>
			<tr>
		<?php }?>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->index;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->iteration;?>
</td>
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
?>

	<tr>
		<td colspan="5" align="right"><?php echo $_smarty_tpl->tpl_vars['fpage']->value;?>
</td>
	</tr>

</table></body>
</html>


<?php }
}
?>