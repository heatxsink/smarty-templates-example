<?php
error_reporting(E_ALL ^ E_NOTICE);

include_once('../lib/Smarty2/Smarty.class.php');
include_once('../lib/Template.class.php');

$debug_mode = false;

Template::SetDebugMode($debug_mode);
Template::SetParameter('developer_mode', $debug_mode);
Template::SetParameter('page_title', 'Sample Site');
Template::SetParameter('content', 'Your content goes here.');
Template::Display('index.html');
