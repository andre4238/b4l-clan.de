<?php /* Smarty version Smarty3rc4, created on 2020-10-18 21:38:37
         compiled from "/var/www/html/ts3wi/templates/new/backup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20142170475f8c99bd744c65-61084305%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70902599bbfb62337d02d1c00521a965f531c586' => 
    array (
      0 => '/var/www/html/ts3wi/templates/new/backup.tpl',
      1 => 1330441236,
    ),
  ),
  'nocache_hash' => '20142170475f8c99bd744c65-61084305',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/ts3wi/libs/Smarty/libs/plugins/modifier.date_format.php';
?><?php if (!empty($_smarty_tpl->getVariable('error')->value)||!empty($_smarty_tpl->getVariable('noerror')->value)){?>
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
<table class="border" style="width:100%" cellpadding="1" cellspacing="0">
	<tr>
		<td class="center" colspan="3" style="font-size:12px;"><?php echo $_smarty_tpl->getVariable('lang')->value['chanbackdesc'];?>
</td>
	</tr>
	<tr>
		<td class="thead" colspan="3"><?php echo $_smarty_tpl->getVariable('lang')->value['chanbackups'];?>
</td>
	</tr>
	<tr>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['created'];?>
</td>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['server'];?>
</td>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['options'];?>
</td>
	</tr>
<?php if (isset($_smarty_tpl->getVariable('files')->value[0])&&!empty($_smarty_tpl->getVariable('files')->value[0])){?>
	<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('files')->value[0]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
		<?php if ($_smarty_tpl->getVariable('serverhost')->value===true&&$_smarty_tpl->getVariable('hoststatus')->value===false&&$_smarty_tpl->tpl_vars['value']->value['server']==$_smarty_tpl->getVariable('getserverip')->value||$_smarty_tpl->getVariable('serverhost')->value===false||$_smarty_tpl->getVariable('hoststatus')->value===true){?>
			<?php if ($_smarty_tpl->getVariable('change_col')->value%2){?> <?php $_smarty_tpl->tpl_vars['td_col'] = new Smarty_variable("green1", null, null);?> <?php }else{ ?> <?php $_smarty_tpl->tpl_vars['td_col'] = new Smarty_variable("green2", null, null);?> <?php }?>
			<tr>
				<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['timestamp'],"%d.%m.%Y - %H:%M:%S");?>
</td>
				<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center"><?php echo $_smarty_tpl->tpl_vars['value']->value['server'];?>
</td>
				<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center">
				<input class="view" type="button" name="view" value="" title="<?php echo $_smarty_tpl->getVariable('lang')->value['view'];?>
" onClick="oeffnefenster('site/chanbackupview.php?backupid=<?php echo $_smarty_tpl->tpl_vars['value']->value['timestamp'];?>
&amp;fileport=<?php echo $_smarty_tpl->tpl_vars['value']->value['server'];?>
');"/>
				<form method="post" action="index.php?site=backup&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
">
				<input type="hidden" name="backupid" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['timestamp'];?>
" />
				<input type="hidden" name="fileport" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['server'];?>
" />
				<input class="start" type="submit" name="deploy" value="" title="<?php echo $_smarty_tpl->getVariable('lang')->value['deploy'];?>
" />
				</form>
				<form method="post" action="index.php?site=backup&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
">
				<input type="hidden" name="backupid" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['timestamp'];?>
" />
				<input type="hidden" name="fileport" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['server'];?>
" />
				<input class="delete" type="submit" name="delete" value="" title="<?php echo $_smarty_tpl->getVariable('lang')->value['delete'];?>
" />
				</form>
				</td>
			</tr>
			<?php $_smarty_tpl->tpl_vars['change_col'] = new Smarty_variable(($_smarty_tpl->getVariable('change_col')->value+1), null, null);?>
		<?php }?>
	<?php }} ?>	
<?php }?>
</table>
<?php if ($_smarty_tpl->getVariable('serverhost')->value==true&&$_smarty_tpl->getVariable('hoststatus')->value==true||$_smarty_tpl->getVariable('serverhost')->value==false){?>
	<br />
	<table class="border" style="width:100%" cellpadding="1" cellspacing="0">
		<tr>
			<td class="thead" colspan="3"><?php echo $_smarty_tpl->getVariable('lang')->value['host'];?>
 <?php echo $_smarty_tpl->getVariable('lang')->value['chanbackups'];?>
</td>
		</tr>
		<tr>
			<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['created'];?>
</td>
			<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['server'];?>
</td>
			<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['options'];?>
</td>
		</tr>
	<?php if (isset($_smarty_tpl->getVariable('files')->value[1])&&!empty($_smarty_tpl->getVariable('files')->value[1])){?>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('files')->value[1]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<?php if ($_smarty_tpl->getVariable('change_col')->value%2){?> <?php $_smarty_tpl->tpl_vars['td_col'] = new Smarty_variable("green1", null, null);?> <?php }else{ ?> <?php $_smarty_tpl->tpl_vars['td_col'] = new Smarty_variable("green2", null, null);?> <?php }?>
			<tr>
				<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['timestamp'],"%d.%m.%Y - %H:%M:%S");?>
</td>
				<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center"><?php echo $_smarty_tpl->tpl_vars['value']->value['server'];?>
</td>
				<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center">
				<input class="view" type="button" name="view" value="" title="<?php echo $_smarty_tpl->getVariable('lang')->value['view'];?>
" onClick="oeffnefenster('site/chanbackupview.php?backupid=<?php echo $_smarty_tpl->tpl_vars['value']->value['timestamp'];?>
&amp;fileport=<?php echo $_smarty_tpl->tpl_vars['value']->value['server'];?>
&amp;hostbackup=1');"/>
				<form method="post" action="index.php?site=backup&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
">
				<input type="hidden" name="hostbackup" value="1" />
				<input type="hidden" name="backupid" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['timestamp'];?>
" />
				<input type="hidden" name="fileport" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['server'];?>
" />
				<input class="start" type="submit" name="deploy" value="" title="<?php echo $_smarty_tpl->getVariable('lang')->value['deploy'];?>
" />
				</form>
				<form method="post" action="index.php?site=backup&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
">
				<input type="hidden" name="hostbackup" value="1" />
				<input type="hidden" name="backupid" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['timestamp'];?>
" />
				<input type="hidden" name="fileport" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['server'];?>
" />
				<input class="delete" type="submit" name="delete" value="" title="<?php echo $_smarty_tpl->getVariable('lang')->value['delete'];?>
" />
				</form>
				</td>
			</tr>
			<?php $_smarty_tpl->tpl_vars['change_col'] = new Smarty_variable(($_smarty_tpl->getVariable('change_col')->value+1), null, null);?>
		<?php }} ?>	
	<?php }?>
	</table>
<?php }?>
<br />
<table class="border" cellpadding="1" cellspacing="0">
<tr>
	<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['createchanbackup'];?>
</td>
</tr>
<tr>
	<td class="green1 center">
	<form method="post" action="index.php?site=backup&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
">
	<input class="button" type="submit" name="create" value="<?php echo $_smarty_tpl->getVariable('lang')->value['create'];?>
" />
	</form>
<?php if ($_smarty_tpl->getVariable('serverhost')->value==true&&$_smarty_tpl->getVariable('hoststatus')->value==true||$_smarty_tpl->getVariable('serverhost')->value==false){?>
	<form method="post" action="index.php?site=backup&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
">
	<input type="hidden" name="hostbackup" value="1" />
	<input class="button" type="submit" name="create" value="<?php echo $_smarty_tpl->getVariable('lang')->value['host'];?>
 <?php echo $_smarty_tpl->getVariable('lang')->value['create'];?>
" />
	</form>
<?php }?>
	</td>
</tr>
</table>