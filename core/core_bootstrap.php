<?php
namespace Core
{
$config = require_once("core/config.php");
require_once("core/helpers/autoload.php");
spl_autoload_register('Autoloader::helper');
spl_autoload_register('Autoloader::controller');
spl_autoload_register('Autoloader::layout');
spl_autoload_register('Autoloader::model');
spl_autoload_register('Autoloader::view');
spl_autoload_register('Autoloader::core');
spl_autoload_register('Autoloader::library');
spl_autoload_register('Autoloader::application');
spl_autoload_register('Autoloader::helper');
spl_autoload_register('Autoloader::css');
spl_autoload_register('Autoloader::js');
spl_autoload_register('Autoloader::template');

}
