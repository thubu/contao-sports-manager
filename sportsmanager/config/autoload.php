<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'spoma_clubreader_basic' => 'system/modules/sportsmanager/classes/spoma_clubreader_basic.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'spoma_clubreader_basic'   => 'system/modules/sportsmanager/templates',

));
