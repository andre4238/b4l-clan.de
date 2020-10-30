<?php /* Smarty version Smarty3rc4, created on 2020-10-18 21:42:08
         compiled from "/var/www/html/ts3wi/templates/new/permexport.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19461845355f8c9a904a6c65-19579685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b4179170992919cf4ce8588bbfa5d4ebbe134d8' => 
    array (
      0 => '/var/www/html/ts3wi/templates/new/permexport.tpl',
      1 => 1330442010,
    ),
  ),
  'nocache_hash' => '19461845355f8c9a904a6c65-19579685',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!empty($_smarty_tpl->getVariable('error')->value)){?>
<table>
	<?php if (!empty($_smarty_tpl->getVariable('error')->value)){?>
	<tr>
		<td class="error"><?php echo $_smarty_tpl->getVariable('error')->value;?>
</td>
	</tr>
	<?php }?>
</table>
<?php }?>
<form method="post" action="index.php?site=permexport&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
">
<table  class="border" cellpadding="1" cellspacing="0">
	<tr>
		<td colspan="2" style="font-size:12px"><?php echo $_smarty_tpl->getVariable('lang')->value['permexdesc'];?>
</td>
	</tr>
	<tr>
		<td class="thead" colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value['permexport'];?>
</td>
	</tr>
	<tr>
		<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['sourcetype'];?>
</td>
		<td class="green1">
		<select name="sourcemode">
		<option value="1"><?php echo $_smarty_tpl->getVariable('lang')->value['servergroup'];?>
</option>
		<option value="2"><?php echo $_smarty_tpl->getVariable('lang')->value['channelgroup'];?>
</option>
		<option value="3"><?php echo $_smarty_tpl->getVariable('lang')->value['channel'];?>
</option>
		<option value="4"><?php echo $_smarty_tpl->getVariable('lang')->value['client'];?>
</option>
		</select> 
		</td>
	</tr>
	<tr>
		<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['sourceid'];?>
</td>
		<td class="green2"><input type="text" name="sourceid" value="" /></td>
	</tr>
	<tr>
		<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['targettype'];?>
</td>
		<td class="green1">
		<select name="targetmode">
		<option value="1"><?php echo $_smarty_tpl->getVariable('lang')->value['servergroup'];?>
</option>
		<option value="2"><?php echo $_smarty_tpl->getVariable('lang')->value['channelgroup'];?>
</option>
		<option value="3"><?php echo $_smarty_tpl->getVariable('lang')->value['channel'];?>
</option>
		<option value="4"><?php echo $_smarty_tpl->getVariable('lang')->value['client'];?>
</option>
		</select> 
		</td>
	</tr>
	<tr>
		<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['targetid'];?>
</td>
		<td class="green2"><input type="text" name="targetid" value="" /></td>
	</tr>
	<tr>
		<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['option'];?>
</td>
		<td class="green1">
		<input class="button" type="submit" name="showcommands" value="<?php echo $_smarty_tpl->getVariable('lang')->value['view'];?>
" />
		</td>
	</tr>
	<?php if (isset($_POST['showcommands'])&&empty($_smarty_tpl->getVariable('error')->value)){?>
		<tr>
			<td class="green2 center" colspan="2">
			<textarea name="showfield" cols="50" rows="10" readonly="readonly"><?php echo $_smarty_tpl->getVariable('permexport')->value;?>
</textarea>
			</td>
		</tr>
	<?php }?>
</table>
</form>