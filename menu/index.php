<?php
////tegelikult peavad olema conf.php failis
define('BASE_DIR', './'); // define('BASE_DIR', '../');
require_once(BASE_DIR.'conf.php');
// loome vajalikud vaade objektid
$mainTmpl = new Template('main');
$mainTmpl->set('title', 'Menu App');
$contentTmpl = new Template('content');
require_once 'controller.php';
$mainTmpl->set('content', $contentTmpl->parse());
echo $mainTmpl->parse(); 