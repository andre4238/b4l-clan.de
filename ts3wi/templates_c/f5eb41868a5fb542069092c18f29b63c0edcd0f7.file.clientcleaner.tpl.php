<?php /* Smarty version Smarty3rc4, created on 2020-10-18 21:43:18
         compiled from "/var/www/html/ts3wi/templates/new/clientcleaner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8102782355f8c9ad63bcd35-29038441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5eb41868a5fb542069092c18f29b63c0edcd0f7' => 
    array (
      0 => '/var/www/html/ts3wi/templates/new/clientcleaner.tpl',
      1 => 1330442010,
    ),
  ),
  'nocache_hash' => '8102782355f8c9ad63bcd35-29038441',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
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
<form method="post" action="index.php?site=clientcleaner&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
">
<table>
	<tr>
		<td><?php echo $_smarty_tpl->getVariable('lang')->value['clientcleaner'];?>
</td>
	</tr>
	<?php if (isset($_smarty_tpl->getVariable('deleted')->value)){?>
	<tr>
		<td><?php echo $_smarty_tpl->getVariable('deleted')->value;?>
</td>
	</tr>
	<?php }?>
	<tr>
		<td><?php echo $_smarty_tpl->getVariable('lang')->value['deleteallclientsoffline'];?>
<input type="text" name="number" value="30" size="3"/><?php echo $_smarty_tpl->getVariable('lang')->value['deleteallclientsoffline2'];?>
</td>
	</tr>
	<tr>
		<td><?php echo $_smarty_tpl->getVariable('lang')->value['checkgroupsprotected'];?>
</td>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('sgrouplist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
	<tr>
		<td><input type="checkbox" name="sgroups[]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['sgid'];?>
" /> <?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</td>
	</tr>
	<?php }} ?>
	<tr>
		<td><input type="submit" name="cleanit" value="<?php echo $_smarty_tpl->getVariable('lang')->value['clean'];?>
" /></td>
	</tr>
</table>
</form>