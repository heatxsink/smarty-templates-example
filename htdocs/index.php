<?php
include_once('../lib/Smarty2/Smarty.class.php');
include_once('../lib/Template.class.php');

$DEBUG_MODE = false;

if($DEBUG_MODE) {
	error_reporting(E_ALL ^ E_NOTICE);
}

$template = Template::GetInstance();
$template->SetDebugMode($DEBUG_MODE);
$template->SetParameter('developer_mode', $DEBUG_MODE);
$template->SetParameter('page_title', 'Sample Site');
$template->SetParameter('content', 'Your content goes here.');
$template->Display('index.html');
