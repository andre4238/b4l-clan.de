<?php /* Smarty version Smarty3rc4, created on 2020-10-18 23:00:59
         compiled from "/var/www/html/ts3wi/templates/new/servertraffic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3644714685f8cad0b683970-13049029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92e7cae94d6d9ddcc5cf8a06d2de7ebd80cdf2b0' => 
    array (
      0 => '/var/www/html/ts3wi/templates/new/servertraffic.tpl',
      1 => 1330442010,
    ),
  ),
  'nocache_hash' => '3644714685f8cad0b683970-13049029',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!isset($_smarty_tpl->getVariable('sid')->value)){?>
	<?php if (!isset($_GET['refresh'])||$_GET['refresh']=='on'){?>
	<meta http-equiv="refresh" content="3; URL=index.php?site=servertraffic" />
	<?php }?>
	<table align="center" style="width:50%" class="border" cellpadding="1" cellspacing="0">
		<tr>
			<td style="width:100%" class="thead" colspan="3"><?php echo $_smarty_tpl->getVariable('lang')->value['instancetraffic'];?>
</td>
		</tr>
		<tr>
			<td style="width:33%" class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['description'];?>
</td>
			<td style="width:33%" class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['incoming'];?>
</td>
			<td style="width:33%" class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['outgoing'];?>
</td>
		</tr>
		<tr>
			<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['packetstransfered'];?>
</td>
			<td class="green1 center"><?php echo $_smarty_tpl->getVariable('hostinfo')->value['connection_packets_received_total'];?>
</td>
			<td class="green1 center"><?php echo $_smarty_tpl->getVariable('hostinfo')->value['connection_packets_sent_total'];?>
</td>
		</tr>
		<tr>
			<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['bytestransfered'];?>
</td>
			<td class="green2 center"><?php echo $_smarty_tpl->getVariable('hostinfo')->value['connection_bytes_received_total'];?>
</td>
			<td class="green2 center"><?php echo $_smarty_tpl->getVariable('hostinfo')->value['connection_bytes_sent_total'];?>
</td>
		</tr>
		<tr>
			<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['bandwidthlastsecond'];?>
</td>
			<td class="green1 center"><?php echo $_smarty_tpl->getVariable('hostinfo')->value['connection_bandwidth_received_last_second_total'];?>
 /s</td>
			<td class="green1 center"><?php echo $_smarty_tpl->getVariable('hostinfo')->value['connection_bandwidth_sent_last_second_total'];?>
 /s</td>
		</tr>
		<tr>
			<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['bandwidthlastminute'];?>
</td>
			<td class="green2 center"><?php echo $_smarty_tpl->getVariable('hostinfo')->value['connection_bandwidth_received_last_minute_total'];?>
 /s</td>
			<td class="green2 center"><?php echo $_smarty_tpl->getVariable('hostinfo')->value['connection_bandwidth_sent_last_minute_total'];?>
 /s</td>
		</tr>
		<tr>
			<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['filetransferbandwidth'];?>
</td>
			<td class="green1 center"><?php echo $_smarty_tpl->getVariable('hostinfo')->value['connection_filetransfer_bandwidth_received'];?>
 /s</td>
			<td class="green1 center"><?php echo $_smarty_tpl->getVariable('hostinfo')->value['connection_filetransfer_bandwidth_sent'];?>
 /s</td>
		</tr>
		<tr>
			<td colspan="3">
			<?php if (!isset($_GET['refresh'])||$_GET['refresh']=='on'){?>
				<a href="index.php?site=servertraffic&amp;refresh=off"><?php echo $_smarty_tpl->getVariable('lang')->value['stoprefresh'];?>
</a>
			<?php }else{ ?>
			<a href="index.php?site=servertraffic&amp;refresh=on"><?php echo $_smarty_tpl->getVariable('lang')->value['autorefresh'];?>
</a>
			<?php }?>
			</td>
		</tr>
	</table>
<?php }else{ ?>
	<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_info_view'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_info_view'])){?>
		<table align="center" style="width:50%" class="border" cellpadding="1" cellspacing="0">

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
	<?php if (!isset($_GET['refresh'])||$_GET['refresh']=='on'){?>
		<meta http-equiv="refresh" content="3; URL=index.php?site=servertraffic&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
" />
	<?php }?>
	<table align="center" style="width:50%" class="border" cellpadding="1" cellspacing="0">
		<tr>
			<td style="width:100%" class="thead" colspan="3"><?php echo $_smarty_tpl->getVariable('lang')->value['virtualtraffic'];?>
</td>
		</tr>
		<tr>
			<td style="width:33%" class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['description'];?>
</td>
			<td style="width:33%" class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['incoming'];?>
</td>
			<td style="width:33%" class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['outgoing'];?>
</td>
		</tr>
		<tr>
			<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['packetstransfered'];?>
</td>
			<td class="green1 center"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['connection_packets_received_total'];?>
</td>
			<td class="green1 center"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['connection_packets_sent_total'];?>
</td>
		</tr>
		<tr>
			<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['bytestransfered'];?>
</td>
			<td class="green2 center"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['connection_bytes_received_total'];?>
</td>
			<td class="green2 center"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['connection_bytes_sent_total'];?>
</td>
		</tr>
		<tr>
			<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['bandwidthlastsecond'];?>
</td>
			<td class="green1 center"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['connection_bandwidth_received_last_second_total'];?>
 /s</td>
			<td class="green1 center"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['connection_bandwidth_sent_last_second_total'];?>
 /s</td>
		</tr>
		<tr>
			<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['bandwidthlastminute'];?>
</td>
			<td class="green2 center"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['connection_bandwidth_received_last_minute_total'];?>
 /s</td>
			<td class="green2 center"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['connection_bandwidth_sent_last_minute_total'];?>
 /s</td>
		</tr>
		<tr>
			<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['filetransferbandwidth'];?>
</td>
			<td class="green1 center"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['connection_filetransfer_bandwidth_received'];?>
 /s</td>
			<td class="green1 center"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['connection_filetransfer_bandwidth_sent'];?>
 /s</td>
		</tr>
		<tr>
			<td colspan="3">
			<?php if (!isset($_GET['refresh'])||$_GET['refresh']=='on'){?>
			<a href="index.php?site=servertraffic&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
&amp;refresh=off"><?php echo $_smarty_tpl->getVariable('lang')->value['stoprefresh'];?>
</a>
			<?php }else{ ?>
			<a href="index.php?site=servertraffic&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
&amp;refresh=on"><?php echo $_smarty_tpl->getVariable('lang')->value['autorefresh'];?>
</a>
			<?php }?>
			</td>
		</tr>
	</table>
<?php }?>
<?php }?>