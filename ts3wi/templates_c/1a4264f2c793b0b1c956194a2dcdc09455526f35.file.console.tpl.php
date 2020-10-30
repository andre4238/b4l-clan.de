<?php /* Smarty version Smarty3rc4, created on 2020-10-18 21:43:49
         compiled from "/var/www/html/ts3wi/templates/new/console.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13144480585f8c9af528c978-86732483%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a4264f2c793b0b1c956194a2dcdc09455526f35' => 
    array (
      0 => '/var/www/html/ts3wi/templates/new/console.tpl',
      1 => 1330442010,
    ),
  ),
  'nocache_hash' => '13144480585f8c9af528c978-86732483',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<form method="post" action="index.php?site=console&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
">
<table class="border" cellpadding="0" cellspacing="0">
	<tr>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['queryconsole'];?>
</td>
	</tr>
	<tr>
		<td><?php echo $_smarty_tpl->getVariable('lang')->value['inputbox'];?>
</td>
	</tr>
	<tr>
		<td>
			<textarea name="command" cols="50" rows="10"></textarea>	
		</td>
	</tr>
	<tr>
		<td><input class="button" type="submit" name="execute" value="<?php echo $_smarty_tpl->getVariable('lang')->value['execute'];?>
" /><br /><br /></td>
	</tr>
	<tr>
		<td><?php echo $_smarty_tpl->getVariable('lang')->value['outputbox'];?>
</td>
	</tr>
	<tr>
		<td>
			<textarea name="output" cols="80" rows="20" readonly="readonly"><?php echo $_smarty_tpl->getVariable('showOutput')->value;?>
</textarea>	
		</td>
	</tr>
</table>
</form>