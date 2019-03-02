<?php
// Enable Error Reporting
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

// Init variables
$php_root = $_SERVER['DOCUMENT_ROOT'] . "/dream-journal/";
$htp_root = "http://192.168.0.108/dream-journal/";

// Defaults
$document_title = "Dream Journal";
$document_author = "Sam Murphey";
$document_url = $htp_root;
$last_updated = "2019-2-26";
$version = 2.0;
$favicon = $htp_root . "favicon.ico";
$fonts = "Ubuntu";

// Functions
require_once($php_root . "core/functions.php");
jsLogs("hello world");
// Find where we are
require_once($php_root . "core/headers.php");

// Verify user
require_once($php_root . "core/checkLogin.php");