<?php /* Smarty version 3.1.27, created on 2015-09-13 12:48:55
         compiled from "D:\tools\xampp\htdocs\test\tpls\showlist.html" */ ?>
<?php
/*%%SmartyHeaderCode:1049655f554973ab831_41371665%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4389f2695aeda157ac9505df139ab7532650a2d5' => 
    array (
      0 => 'D:\\tools\\xampp\\htdocs\\test\\tpls\\showlist.html',
      1 => 1442141330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1049655f554973ab831_41371665',
  'variables' => 
  array (
    'data' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55f554974ae815_27279981',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55f554974ae815_27279981')) {
function content_55f554974ae815_27279981 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1049655f554973ab831_41371665';
?>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
 	<table border="1">
		<tr>
			<td>id</td>
			<td>username</td>
			
			
		</tr>
 		<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['user_id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['user_name'];?>
</td>
				
				
			</tr>
	 <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
	</table>
</body>
</html>

<?php }
}
?>