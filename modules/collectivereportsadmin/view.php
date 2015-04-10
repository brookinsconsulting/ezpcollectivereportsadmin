<?php
/**
 * File containing the collectivereportsadmin/view module view.
 *
 * @copyright Copyright (C) 1999 - 2016 Brookins Consulting. All rights reserved.
 * @copyright Copyright (C) 2013 - 2016 Think Creative. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2 (or later)
 * @version 0.1.0
 * @package ezpcollectivereportsadmin
 */

/**
 * Default module parameters
 */
$module = $Params["Module"];

/**
* Default class instances
*/

// Init template behaviors
$tpl = eZTemplate::factory();

// Access ini variables
$ini = eZINI::instance();
$iniCollectiveReportsAdminSettings = eZINI::instance( 'ezpcollectivereportsadmin.ini' );
$activeExtensions = $ini->variable( 'ExtensionSettings', 'ActiveExtensions' );

/**
 * Pass array of active extensions to template to provide for semi dynamic report information display.
 */
$tpl->setVariable( 'extensions', $activeExtensions );

/**
 * Default template include
 */
$Result = array();
$Result['content'] = $tpl->fetch( "design:collectivereportsadmin/view.tpl" );
$Result['path'] = array( array( 'url' => false,
                                'text' => ezpI18n::tr('design/standard/collectivereportsadmin', 'Collective Reports Admin') ),
                         array( 'url' => false,
                                'text' => ezpI18n::tr('design/standard/collectivereportsadmin', 'Reports') )
                        );

$Result['left_menu'] = 'design:collectivereportsadmin/menu.tpl';

?>