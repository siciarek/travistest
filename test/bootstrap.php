<?php
error_reporting(E_ALL);
ini_set("display_errors","On");

$libdir = dirname(__FILE__) . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR  . "lib";
set_include_path(get_include_path() . PATH_SEPARATOR . $libdir);

require_once "PHPUnit/Autoload.php";
require_once  "User.class.php";

