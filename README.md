# ssh-login-notification
Send an email when someone logs in via SSH

Install
=======
```
wget -q -O - "$@" --no-check-certificate https://raw.github.com/dparlevliet/ssh-login-notification/master/install.sh | sudo sh
```
You can run this command multiple times without consequences. This is useful for
updating your version to the newest version.

Requirements
============
* PHP5 CLI
* PHP5 mail (postfix)