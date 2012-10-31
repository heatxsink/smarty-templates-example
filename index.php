<?php
include_once('lib/Smarty2/Smarty.class.php');

$smarty = new Smarty();
$smarty->debugging = false;
$smarty->template_dir = 'views/templates';
$smarty->compile_dir = 'views/templates_c';
$smarty->cache_dir = 'views/cache';
$smarty->config_dir = 'views/configs';

$smarty->assign('developer_mode', true);
$smarty->assign('page_title', 'Sample Site');
$smarty->assign('content', 'Your content goes here.');
$smarty->display('index.html');
?>