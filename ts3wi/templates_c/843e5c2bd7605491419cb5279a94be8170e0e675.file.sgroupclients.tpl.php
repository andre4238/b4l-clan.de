<?php /* Smarty version Smarty3rc4, created on 2020-10-25 21:19:46
         compiled from "/var/www/html/ts3wi/templates/new/sgroupclients.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8395492985f95dde210c4a0-97975531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '843e5c2bd7605491419cb5279a94be8170e0e675' => 
    array (
      0 => '/var/www/html/ts3wi/templates/new/sgroupclients.tpl',
      1 => 1330442010,
    ),
  ),
  'nocache_hash' => '8395492985f95dde210c4a0-97975531',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_servergroup_client_list'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_servergroup_client_list'])){?>
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
<table style="width:100%" class="border" cellpadding="1" cellspacing="0">
	<tr>
		<td class="thead" colspan="6"><?php echo $_smarty_tpl->getVariable('lang')->value['searchfor'];?>
<?php echo $_smarty_tpl->getVariable('lang')->value['client'];?>
</td>
	</tr>
	<tr>
		<td class="green1" colspan="6">
		<form method="post" action="index.php?site=sgroupclients&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
&amp;sgid=<?php echo $_smarty_tpl->getVariable('sgid')->value;?>
">
		<select name="searchby">
		<option value="cldbid"><?php echo $_smarty_tpl->getVariable('lang')->value['cldbid'];?>
</option>
		<option value="name"><?php echo $_smarty_tpl->getVariable('lang')->value['name'];?>
</option>
		</select>
		<input type="text" name="search" value="" />
		<input type="submit" name="sendsearch" value="<?php echo $_smarty_tpl->getVariable('lang')->value['search'];?>
" />
		</form>
		</td>
	</tr>
	<tr>
		<td class="thead" colspan="6">(<?php echo $_smarty_tpl->getVariable('sgroupid')->value;?>
) <?php echo $_smarty_tpl->getVariable('sgroupname')->value;?>
 <?php echo $_smarty_tpl->getVariable('lang')->value['groupmember'];?>
</td>
	</tr>
	<tr>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['uniqueid'];?>
</td>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['dbid'];?>
</td>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['name'];?>
</td>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['created'];?>
</td>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['lastonline'];?>
</td>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['option'];?>
</td>
	</tr>
	<?php if (!empty($_smarty_tpl->getVariable('groupclients')->value)){?>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('groupclients')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<?php if ($_smarty_tpl->getVariable('change_col')->value%2){?> <?php $_smarty_tpl->tpl_vars['td_col'] = new Smarty_variable("green1", null, null);?> <?php }else{ ?> <?php $_smarty_tpl->tpl_vars['td_col'] = new Smarty_variable("green2", null, null);?> <?php }?>
			<tr>
				<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center"><?php echo $_smarty_tpl->tpl_vars['value']->value['client_unique_identifier'];?>
</td>
				<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center"><?php echo $_smarty_tpl->tpl_vars['value']->value['cldbid'];?>
</td>
				<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center"><?php echo secure($_smarty_tpl->tpl_vars['value']->value['client_nickname']);?>
</td>
				<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center"><?php echo date("d.m.Y",$_smarty_tpl->tpl_vars['value']->value['client_created']);?>
</td>
				<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center"><?php echo date("d.m.Y",$_smarty_tpl->tpl_vars['value']->value['client_lastconnected']);?>
</td>
				<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center">
				<form method="post" action="index.php?site=sgroupclients&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
&amp;sgid=<?php echo $_smarty_tpl->getVariable('sgid')->value;?>
">
				<input type="hidden" name="cldbid" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['cldbid'];?>
" />
				<input type="submit" class="delete" name="kickclient" value="" title="kick"/>
				</form>
				</td>
			</tr> 
			<?php $_smarty_tpl->tpl_vars['change_col'] = new Smarty_variable(($_smarty_tpl->getVariable('change_col')->value+1), null, null);?>
		<?php }} ?>
	<?php }?>
</table>
<br />
<form method="post" action="index.php?site=sgroupclients&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
&amp;sgid=<?php echo $_smarty_tpl->getVariable('sgid')->value;?>
">
<table class="border" cellpadding="1" cellspacing="0">
	<tr>
		<td colspan="2" class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['addclient'];?>
</td>
	</tr>
	<tr>
		<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['cldbid'];?>
</td>
		<td class="green1"><input type="text" name="cldbid" value="" /></td>
	</tr>
	<tr>
		<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['options'];?>
</td>
		<td class="green2"><input type="submit" name="addclient" value="<?php echo $_smarty_tpl->getVariable('lang')->value['add'];?>
" /></td>
	</tr>
</table>
</form>
<?php }?>