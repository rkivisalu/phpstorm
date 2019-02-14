<?php
////tegelikult peavad olema conf.php failis
define('BASE_DIR', './'); // define('BASE_DIR', '../');
require_once(BASE_DIR.'conf.php');
// vajalikud vaade objektid
$mainTmpl = new Template('main');
$contentTmpl = new Template('content');
$cardTmpl = new Template('card');

$mainTmpl->set('title', 'Menu Application');


$contentTmpl->add('cards', $cardTmpl->parse());
$contentTmpl->add('cards', $cardTmpl->parse());
$contentTmpl->add('cards', $cardTmpl->parse());
$contentTmpl->add('cards', $cardTmpl->parse());

$mainTmpl->set('content', $contentTmpl->parse());

echo $mainTmpl->parse();


//echo '<pre>';
//print_r($maintmpl);
//echo '<pre>'