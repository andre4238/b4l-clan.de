<?php /* Smarty version Smarty3rc4, created on 2020-10-18 21:42:52
         compiled from "/var/www/html/ts3wi/templates/new/counter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13126232485f8c9abc861b24-32119881%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd322b8fcc615ff634048d831c26c8f8f4e70a5e4' => 
    array (
      0 => '/var/www/html/ts3wi/templates/new/counter.tpl',
      1 => 1291288888,
    ),
  ),
  'nocache_hash' => '13126232485f8c9abc861b24-32119881',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_client_list'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_client_list'])||isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_client_dblist'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_client_dblist'])){?>
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
<table style="width:50%" align="center" class="border" cellpadding="1" cellspacing="0">
	<tr>
		<td style="width:100%" class="thead" colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value['clientcounter'];?>
</td>
	</tr>
	<tr>
		<td style="width:50%" class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['total'];?>
</td>
		<td style="width:50%" class="green1"><?php echo $_smarty_tpl->getVariable('totalclients')->value;?>
 <?php echo $_smarty_tpl->getVariable('lang')->value['clients'];?>
</td>
	</tr>
	<tr>
		<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['online'];?>
</td>
		<td class="green2">
		<img src="templates/default/gfx/images/stats.png"  height="10" width="<?php echo $_smarty_tpl->getVariable('perc_online')->value;?>
" alt="" />
		<?php echo $_smarty_tpl->getVariable('count_online')->value;?>
 <?php echo $_smarty_tpl->getVariable('lang')->value['clients'];?>
 | <?php echo $_smarty_tpl->getVariable('perc_online')->value;?>
%
		</td>
	</tr>
	<tr>
		<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['today'];?>
</td>
		<td class="green1">
		<img src="templates/default/gfx/images/stats.png"  height="10" width="<?php echo $_smarty_tpl->getVariable('perc_today')->value;?>
" alt="" />
		<?php echo $_smarty_tpl->getVariable('count_today')->value;?>
 <?php echo $_smarty_tpl->getVariable('lang')->value['clients'];?>
 | <?php echo $_smarty_tpl->getVariable('perc_today')->value;?>
%
		</td>
	</tr>
	<tr>
		<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['thisweek'];?>
</td>
		<td class="green2">
		<img src="templates/default/gfx/images/stats.png"  height="10" width="<?php echo $_smarty_tpl->getVariable('perc_week')->value;?>
" alt="" />
		<?php echo $_smarty_tpl->getVariable('count_week')->value;?>
 <?php echo $_smarty_tpl->getVariable('lang')->value['clients'];?>
 | <?php echo $_smarty_tpl->getVariable('perc_week')->value;?>
%
		</td>
	</tr>
	<tr>
		<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['thismonth'];?>
</td>
		<td class="green1">
		<img src="templates/default/gfx/images/stats.png"  height="10" width="<?php echo $_smarty_tpl->getVariable('perc_month')->value;?>
" alt="" />
		<?php echo $_smarty_tpl->getVariable('count_month')->value;?>
 <?php echo $_smarty_tpl->getVariable('lang')->value['clients'];?>
 | <?php echo $_smarty_tpl->getVariable('perc_month')->value;?>
%
		</td>
	</tr>
</table>
<?php }?>