<?php

define('ROOT',dirname( __DIR__) . '/');
/**
 * autoloader pour charger toutes mes classes automatiquement
 */
require_once ROOT . '/App/autoloader.php';

autoloader::register();


// j'essaye d'include mon autoloader et tout
// jsuis un flemmard donc je fais les requires mais go autoload

require_once ROOT . '/MyClass/Form.php';



/**
 *      Identifiants pour la base de données. Nécessaires à PDO2.
 */

define('SQL_DSN', 'mysql:dbname=jabt_camagru;host=localhost');
define('SQL_USERNAME', 'root');
define('SQL_PASSWORD', '');

/**
 *      Chemins
 */

$module = empty($module) ? !empty($_GET['module']) ? $_GET['module'] : 'index' : $module;

define('VIEWS_PATH', ROOT . 'views\\');
define('MODEL_PATH', ROOT . '\modeles/');
define('CONTROLLER_PATH', ROOT . '/controller/');
define('LIB_PATH', dirname(__DIR__) . '\libs\\');
define('MODULE_PATH', ROOT . 'module/');
