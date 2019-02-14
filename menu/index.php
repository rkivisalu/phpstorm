<?php
////tegelikult peavad olema conf.php failis
define('BASE_DIR', './'); // define('BASE_DIR', '../');
require_once(BASE_DIR.'conf.php');

$maintmpl = new Template (main);
$mainTmpl->set('title', 'Menu Application');
$mainTmpl->set('content', 'Menu App content');

echo $mainTmpl->parse();

//echo '<pre>';
//print_r($maintmpl);
//echo '<pre>'