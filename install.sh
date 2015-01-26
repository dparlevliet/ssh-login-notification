#!/bin/bash
wget --no-check-certificate https://raw.githubusercontent.com/dparlevliet/ssh-login-notification/master/sshrc -O /etc/ssh/sshrc
wget --no-check-certificate https://raw.githubusercontent.com/dparlevliet/ssh-login-notification/master/ssh_login.php -O /opt/ssh_login.php

echo '** INSTALL COMPLETE ***********************************************************';
if [ -f $FILE ]; then
  echo '!IMPORTANT!';
  echo 'Please create the admin emails file necessary for sending out emails';
  echo '-'
  echo 'Example:';
  echo 'touch /opt/ssh_admin_emails.php';
  echo 'nano /opt/ssh_admin_emails.php';
  echo '<?php';
  echo "  return Array('admin@example.com');";
fi