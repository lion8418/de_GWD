<?php require_once('../auth.php'); ?>
<?php if (isset($auth) && $auth) {?>
<?php 
shell_exec('sudo /usr/local/bin/ui-dnsCHNW');
shell_exec('sudo /usr/local/bin/ui-saveListBW');
shell_exec('sudo systemctl restart v2dns');
shell_exec('sudo systemctl restart iptables-proxy');
shell_exec('sudo /opt/AdGuardHome/AdGuardHome -s restart');
?>
<?php }?>