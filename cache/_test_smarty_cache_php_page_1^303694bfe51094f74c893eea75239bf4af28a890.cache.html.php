<?php
/*%%SmartyHeaderCode:338455e99899766e18_39979816%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '303694bfe51094f74c893eea75239bf4af28a890' => 
    array (
      0 => 'D:\\tools\\xampp\\htdocs\\test\\tpls\\cache.html',
      1 => 1441356320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '338455e99899766e18_39979816',
  'tpl_function' => 
  array (
  ),
  'version' => '3.1.27',
  'unifunc' => 'content_55e99ad9da4222_19100247',
  'has_nocache_code' => true,
  'cache_lifetime' => 30,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e99ad9da4222_19100247')) {
function content_55e99ad9da4222_19100247 ($_smarty_tpl) {
?>

<table align="center" border="1" width="800">
	<caption><h1>xs_user  <?php echo $_smarty_tpl->tpl_vars['ctime']->value;?>
</h1></caption><!--   使用nocache中的变量不会缓存 -->
	
						<tr bgcolor="red">
					<td>0</td>
			<td>1</td>
							<td>1</td>
							<td>suchfun</td>
							<td>123456</td>
					</tr>
						<tr>
					<td>1</td>
			<td>2</td>
							<td>2</td>
							<td>Peter</td>
							<td>Griffin</td>
					</tr>
						<tr bgcolor="blue">
					<td>2</td>
			<td>3</td>
							<td>5</td>
							<td>suchfun2</td>
							<td>asdfas</td>
					</tr>
	
	<tr>
		<td colspan="5" align="right"><div style="font:12px '\5B8B\4F53',san-serif;">&nbsp;共<b> 90 </b>条记录&nbsp;&nbsp;本页 <b>3</b> 条&nbsp;&nbsp;本页从 <b>1-3</b> 条&nbsp;&nbsp;<b>1/30</b>页&nbsp;&nbsp;<b><span style='padding:1px 2px;background:#BBB;color:white'>1</span>&nbsp;<a href='/test/smarty_cache.php?page=2'>2</a>&nbsp;<a href='/test/smarty_cache.php?page=3'>3</a>&nbsp;<a href='/test/smarty_cache.php?page=4'>4</a>&nbsp;<a href='/test/smarty_cache.php?page=5'>5</a>&nbsp;<a href='/test/smarty_cache.php?page=6'>6</a>&nbsp;</b>&nbsp;<a href='/test/smarty_cache.php?page=2'>下一页</a>&nbsp;&nbsp;<a href='/test/smarty_cache.php?page=30'>末页</a>&nbsp;&nbsp;<input style="width:20px;height:17px !important;height:18px;border:1px solid #CCCCCC;" type="text" onkeydown="javascript:if(event.keyCode==13){var page=(this.value>30)?30:this.value;location='/test/smarty_cache.php?page='+page+''}" value="1"><input style="cursor:pointer;width:25px;height:18px;border:1px solid #CCCCCC;" type="button" value="GO" onclick="javascript:var page=(this.previousSibling.value>30)?30:this.previousSibling.value;location='/test/smarty_cache.php?page='+page+''">&nbsp;</div></td>
	</tr>

</table>

<?php }
}
?>