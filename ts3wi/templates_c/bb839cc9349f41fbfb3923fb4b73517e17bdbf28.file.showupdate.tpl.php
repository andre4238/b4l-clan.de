<?php /* Smarty version Smarty3rc4, created on 2020-10-18 21:35:36
         compiled from "/var/www/html/ts3wi/templates/new/showupdate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4244206005f8c9908356fa3-45680748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb839cc9349f41fbfb3923fb4b73517e17bdbf28' => 
    array (
      0 => '/var/www/html/ts3wi/templates/new/showupdate.tpl',
      1 => 1291677160,
    ),
  ),
  'nocache_hash' => '4244206005f8c9908356fa3-45680748',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (isset($_smarty_tpl->getVariable('newwiversion')->value)){?>
<tr>
	<td class="green1 warning center" colspan="2">
	<?php echo $_smarty_tpl->getVariable('newwiversion')->value;?>

	</td>
<tr>
<?php }?>