<?php
//start session
session_start();

//config file
require_once 'config.php';

//include helpers
require_once 'helpers/system_helper.php';
//autoload
function __autoload($className){
    require_once 'lib/'.$className. '.php';
}
