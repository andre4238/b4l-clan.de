<?php /* Smarty version Smarty3rc4, created on 2020-10-18 21:43:30
         compiled from "/var/www/html/ts3wi/templates/new/cgroupadd.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20237707835f8c9ae2401c85-03997099%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '145633a170452ad572a08e18ca9da5885031a9ad' => 
    array (
      0 => '/var/www/html/ts3wi/templates/new/cgroupadd.tpl',
      1 => 1330442010,
    ),
  ),
  'nocache_hash' => '20237707835f8c9ae2401c85-03997099',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_channelgroup_create'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_channelgroup_create'])){?>
	<table class="border" style="width:50%;" cellpadding="1" cellspacing="0">
		<tr>
			<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['error'];?>
</td>
		</tr>
		<tr>
			<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['nopermissions'];?>
</td>
		</tr>
	</table>
<?php }else{ ?>
<?php if (!empty($_smarty_tpl->getVariable('error')->value)||!empty($_smarty_tpl->getVariable('noerror')->value)){?>
<table>
	<?php if (!empty($_smarty_tpl->getVariable('error')->value)){?>
	<tr>
		<td class="error"><?php echo $_smarty_tpl->getVariable('error')->value;?>
</td>
	</tr>
	<?php }?>
	<?php if (!empty($_smarty_tpl->getVariable('noerror')->value)){?>
	<tr>
		<td class="noerror"><?php echo $_smarty_tpl->getVariable('noerror')->value;?>
</td>
	</tr>
	<?php }?>
</table>
<?php }?>
<form method="post" action="index.php?site=cgroupadd&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
">
<table class="border" cellpadding="1" cellspacing="0">
	<tr>
		<td colspan="2" class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['addchannelgroup'];?>
</td>
	</tr>
	<tr>
		<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['type'];?>
:</td>
		<td class="green1">
		<?php echo $_smarty_tpl->getVariable('lang')->value['template'];?>
<input type="radio" name="type" value="0" /><br />
		<?php echo $_smarty_tpl->getVariable('lang')->value['normal'];?>
<input checked="checked" type="radio" name="type" value="1" /><br />
		</td>
	</tr>
	<tr>
		<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['name'];?>
</td>
		<td class="green2">
		<input type="text" name="name" value="" />
		</td>
	</tr>
	<tr>
		<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['copypermsfrom'];?>
:</td>
		<td class="green1">
		<select name="copyfrom">
		<option value="0">-</option>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('channelgroups')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['cgid'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</option>
		<?php }} ?>
		</select>
		</td>
	</tr>
	<tr>
		<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['overwritegroup'];?>
:</td>
		<td class="green2">
		<select name="overwrite">
		<option value="0">-</option>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('channelgroups')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['cgid'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</option>
		<?php }} ?>
		</select>
		</td>
	</tr>
	<tr>
		<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['option'];?>
</td>
		<td class="green1"><input class="button" type="submit" name="addgroup" value="<?php echo $_smarty_tpl->getVariable('lang')->value['add'];?>
" /></td>
	</tr>
</table>
</form>
<?php }?>