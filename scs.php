<?php
/**
 * Plugin Name: Maintenance Mode by Supsystic
 * Plugin URI: https://supsystic.com/
 * Description: Maintenance Mode page with drag-and-drop builder or under construction |  maintenance mode to notify visitors and collects emails
 * Version: 1.7.13
 * Author: supsystic.com
 * Author URI: https://supsystic.com/
 * Text Domain: maintenance-mode-by-supsystic
 * Domain Path: /languages
 **/
	/**
	 * Base config constants and functions
	 */
    require_once(dirname(__FILE__). DIRECTORY_SEPARATOR. 'config.php');
    require_once(dirname(__FILE__). DIRECTORY_SEPARATOR. 'functions.php');
	/**
	 * Connect all required core classes
	 */
    importClassScs('dbScs');
    importClassScs('installerScs');
    importClassScs('baseObjectScs');
    importClassScs('moduleScs');
    importClassScs('modelScs');
    importClassScs('viewScs');
    importClassScs('controllerScs');
    importClassScs('helperScs');
    importClassScs('dispatcherScs');
    importClassScs('fieldScs');
    importClassScs('tableScs');
    importClassScs('frameScs');
    importClassScs('reqScs');
    importClassScs('uriScs');
    importClassScs('htmlScs');
    importClassScs('responseScs');
    importClassScs('fieldAdapterScs');
    importClassScs('validatorScs');
    importClassScs('errorsScs');
    importClassScs('utilsScs');
    importClassScs('modInstallerScs');
	importClassScs('installerDbUpdaterScs');
    importClassScs('dateScs');
    importClassScs('Mobile_Detect', SCS_HELPERS_DIR. 'mobileDetect.php');
	/**
	 * Check plugin version - maybe we need to update database, and check global errors in request
	 */
    installerScs::update();
    errorsScs::init();
    /**
	 * Start application
	 */
    frameScs::_()->parseRoute();
    frameScs::_()->init();
    frameScs::_()->exec();
	
	//var_dump(frameScs::_()->getActivationErrors()); exit();
	//installerScs::initBaseBlocks();
