<?php
/**
 * index.php
 *
 * @author  $Author: faust $
 * @version $Id: index.php,v 1.1 2017/01/23 17:11:46 faust Exp $
 */

// Define path to application directory
defined('APPLICATION_PATH') || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application'));

// Autoload vendor libraries
require_once APPLICATION_PATH . '/../vendor/autoload.php';

// Define application environment
defined('APPLICATION_ENV') || define(
    'APPLICATION_ENV',
    getenv('APPLICATION_ENV') ? (getenv('APPLICATION_ENV')) : ('production')
);

// get version.ini
$config = parse_ini_file(APPLICATION_PATH . '/configs/version.ini');

// Define path for Zend Framework
defined('ZF_PATH') || define('ZF_PATH', (getenv('ZF_PATH') ? getenv('ZF_PATH') : $config['zendFramework']));

// Define path for ZendframeworkLibrary
defined('PCT_LIBRARY_PATH') || define(
    'PCT_LIBRARY_PATH',
    (getenv('PCT_LIBRARY_PATH') ? getenv('PCT_LIBRARY_PATH') : realpath(APPLICATION_PATH . '/../library/'))
);

//The path where zf-modules are located
defined('APPLICATION_MODULES_PATH') || define('APPLICATION_MODULES_PATH', realpath(APPLICATION_PATH . '/../modules'));

// Ensure zend-framework is on include_path
set_include_path(
    implode(
        PATH_SEPARATOR,
        array(
            realpath(APPLICATION_PATH . '/../library/'),
            realpath(ZF_PATH),
            realpath(PCT_LIBRARY_PATH),
            get_include_path(),
        )
    )
);

/** Zend_Application */
/** @noinspection PhpIncludeInspection */
require_once 'Zend/Application.php';

// Create application, bootstrap, and run
$application = new Zend_Application(APPLICATION_ENV, APPLICATION_PATH . '/configs/application.ini');
$application->bootstrap()->run();
