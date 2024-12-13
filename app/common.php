<?php

use Config\Config;
use DB\DBManager;

$f3 = Base::instance();

if(getenv("DEBUG")) {
    $f3->set('DEBUG', getenv("DEBUG"));
}
$f3->set('UI', '../views/');
$f3->set('URLBASE', Config::getInstance()->getUrlbase());
$f3->set('VERSION', Config::getInstance()->getCommit());
if(Config::getInstance()->get('db_dsn')) {
    $f3->set('DB', DBManager::init(Config::getInstance()->get('db_dsn')));
}
$f3->set('config', Config::getInstance());
