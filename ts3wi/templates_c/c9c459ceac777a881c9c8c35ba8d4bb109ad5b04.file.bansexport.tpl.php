<?php /* Smarty version Smarty3rc4, created on 2020-10-18 21:43:52
         compiled from "/var/www/html/ts3wi/templates/new/bansexport.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14206490675f8c9af85bca65-19248137%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9c459ceac777a881c9c8c35ba8d4bb109ad5b04' => 
    array (
      0 => '/var/www/html/ts3wi/templates/new/bansexport.tpl',
      1 => 1290362446,
    ),
  ),
  'nocache_hash' => '14206490675f8c9af85bca65-19248137',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<table class="border" style="width:100%" cellpadding="1" cellspacing="0">

	<tr>
		<td class="thead" colspan="9"><?php echo $_smarty_tpl->getVariable('lang')->value['bansexport'];?>
</td>
	</tr>
	<tr>
		<td colspan="9"><?php echo $_smarty_tpl->getVariable('lang')->value['bansexportdesc'];?>
</td>
	</tr>
	<tr>
		<td>
		<textarea rows="10" cols="70" readonly="readonly"><?php echo $_smarty_tpl->getVariable('banexport')->value;?>
</textarea>
		</td>
	</tr>
</table>