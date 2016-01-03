<?php
/*%%SmartyHeaderCode:50715688948f4792b8_46273241%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '668f7188ba9fe4ff9333b84a0c3bb0210936f24c' => 
    array (
      0 => 'D:\\tools\\xampp\\htdocs\\test\\smarty\\tpls\\cache.html',
      1 => 1451791498,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50715688948f4792b8_46273241',
  'tpl_function' => 
  array (
  ),
  'version' => '3.1.27',
  'unifunc' => 'content_5688949ec7f050_09350246',
  'has_nocache_code' => true,
  'cache_lifetime' => 30,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5688949ec7f050_09350246')) {
function content_5688949ec7f050_09350246 ($_smarty_tpl) {
?>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<table align="center" border="1" width="800">
	<caption><h1>xs_user  <?php echo $_smarty_tpl->tpl_vars['ctime']->value;?>
</h1></caption><!--   使用nocache中的变量不会缓存 -->
	
		
		数组为空，或数组没有被分配过来
	
	<tr>
		<td colspan="5" align="right"><div style="font:12px '\5B8B\4F53',san-serif;">&nbsp;共<b> 90 </b>条记录&nbsp;&nbsp;本页 <b>3</b> 条&nbsp;&nbsp;本页从 <b>7-9</b> 条&nbsp;&nbsp;<b>3/30</b>页&nbsp;&nbsp;<a href='/test/smarty/smarty_cache.php?page=1'>首页</a>&nbsp;<a href='/test/smarty/smarty_cache.php?page=2'>上一页</a>&nbsp;&nbsp;<b><a href='/test/smarty/smarty_cache.php?page=1'>1</a>&nbsp;<a href='/test/smarty/smarty_cache.php?page=2'>2</a>&nbsp;<span style='padding:1px 2px;background:#BBB;color:white'>3</span>&nbsp;<a href='/test/smarty/smarty_cache.php?page=4'>4</a>&nbsp;<a href='/test/smarty/smarty_cache.php?page=5'>5</a>&nbsp;<a href='/test/smarty/smarty_cache.php?page=6'>6</a>&nbsp;<a href='/test/smarty/smarty_cache.php?page=7'>7</a>&nbsp;<a href='/test/smarty/smarty_cache.php?page=8'>8</a>&nbsp;</b>&nbsp;<a href='/test/smarty/smarty_cache.php?page=4'>下一页</a>&nbsp;&nbsp;<a href='/test/smarty/smarty_cache.php?page=30'>末页</a>&nbsp;&nbsp;<input style="width:20px;height:17px !important;height:18px;border:1px solid #CCCCCC;" type="text" onkeydown="javascript:if(event.keyCode==13){var page=(this.value>30)?30:this.value;location='/test/smarty/smarty_cache.php?page='+page+''}" value="3"><input style="cursor:pointer;width:25px;height:18px;border:1px solid #CCCCCC;" type="button" value="GO" onclick="javascript:var page=(this.previousSibling.value>30)?30:this.previousSibling.value;location='/test/smarty/smarty_cache.php?page='+page+''">&nbsp;</div></td>
	</tr>

</table></body>
</html>


<?php }
}
?>