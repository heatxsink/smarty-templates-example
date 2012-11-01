<?php
include_once('../lib/Smarty2/Smarty.class.php');
include_once('../lib/Template.class.php');

$DEBUG_MODE = false;

if($DEBUG_MODE) {
	error_reporting(E_ALL ^ E_NOTICE);
}

Template::SetDebugMode($DEBUG_MODE);
Template::SetParameter('developer_mode', $DEBUG_MODE);
Template::SetParameter('page_title', 'Sample Site');
Template::SetParameter('content', 'Your content goes here.');
Template::Display('index.html');
