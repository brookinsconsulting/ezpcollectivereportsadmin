<?php
/**
 * File containing the collectivereportsadmin module configuration file, module.php
 *
 * @copyright Copyright (C) 1999 - 2016 Brookins Consulting. All rights reserved.
 * @copyright Copyright (C) 2013 - 2016 Think Creative. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2 (or later)
 * @version 0.1.0
 * @package ezpcollectivereportsadmin
*/

// Define module name
$Module = array('name' => 'Collective Reports Admin');

// Define module view and parameters
$ViewList = array();

// Define 'view' module view parameters
$ViewList['view'] = array( 'script' => 'view.php',
                           'functions' => array( 'view' ),
                           'default_navigation_part' => 'ezcollectivereportsadminnavigationpart',
                           'post_actions' => array(),
                           'params' => array() );

// Define function parameters
$FunctionList = array();

// Define function 'view' parameters
$FunctionList['view'] = array();

?>