<?php
define("DB_HOST", "db4free.net");
define("DB_USER", "hostingerjappe");
define("DB_PASSWORD", "0415668017");
define("DB_DATABASE", "hostingerjappe");
define("DB_PREFIX", "hostingerjappe");

$SQL = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
global $DB;
$DB = $SQL;

define("SSH_PORT", 22);
define("SSH_HOST", "usa.lionssh.xyz");
define("SSH_USER", "Jappe-lionssh.com");
define("SSH_PASSWORD", "0415668017");

define("DIR_HOME", "/home/bots/");
define("DIR_USER", DIR_HOME . "user/");

$MAINTENANCE = array("wiki");
$SITE_KEY = "6LcpG-gZAAAAAFkGZRiNCuCHl9kWGgDZDJaYprPL";
