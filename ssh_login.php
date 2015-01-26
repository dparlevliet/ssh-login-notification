<?php
  $emails = require(__DIR__.'/ssh_admin_emails.php');

  function getIPs($withV6 = true) {
    preg_match_all('/inet'.($withV6 ? '6?' : '').' addr: ?([^ ]+)/', `ifconfig`, $ips);
    return $ips[1];
  }

  ob_start();
  $user = `id`;
  $hostname = gethostname();

  echo "User Information: \n";
  echo "  Login as: $user";
  echo "  IP: ". $argv[1]."\n";
  echo "\nServer IPs:\n";
  foreach (getIPs() as $k=>$ip) {
    echo "  $k. $ip\n";
  }
  echo "\nServer time: ". date('r')."\n";

  $contents = ob_get_contents();
  ob_end_clean();

  foreach ($emails as $email) {
    mail($email, 'SSH login @ '.$hostname, $contents);
  }
