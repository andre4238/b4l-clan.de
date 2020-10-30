<?php /* Smarty version Smarty3rc4, created on 2020-10-18 21:41:57
         compiled from "/var/www/html/ts3wi/templates/new/clientsexport.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11292156415f8c9a854634c9-79054449%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2761f12dcae8675ec3e0b791b741ad643759793f' => 
    array (
      0 => '/var/www/html/ts3wi/templates/new/clientsexport.tpl',
      1 => 1330442010,
    ),
  ),
  'nocache_hash' => '11292156415f8c9a854634c9-79054449',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<form method="post" action="site/clientsexport.php" target="_blank">
<table class="border" cellpadding="1" cellspacing="0">
	<tr>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['clientsexport'];?>
</td>
	</tr>
	<tr>
		<td><?php echo $_smarty_tpl->getVariable('lang')->value['clientsexportdesc'];?>
</td>
	</tr>
	<tr>
		<td class="green1">
		<?php echo $_smarty_tpl->getVariable('lang')->value['serverid'];?>
: <input type="text" name="sid" value="" />
		<input type="hidden" name="sid" value="<?php echo $_smarty_tpl->getVariable('sid')->value;?>
" />
		<input class="button" type="submit" name="give" value="<?php echo $_smarty_tpl->getVariable('lang')->value['clientsexport'];?>
" />
		</td>
	</tr>
</table>
</form>