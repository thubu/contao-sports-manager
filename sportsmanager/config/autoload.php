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
	'spoma_clubreader_basic' 	=> 'system/modules/sportsmanager/classes/spoma_clubreader_basic.php',
	'spoma_teamreader_basic'    => 'system/modules/sportsmanager/classes/spoma_teamreader_basic.php',
	'spoma_lm_playerreader_basic'    => 'system/modules/sportsmanager/classes/spoma_lm_playerreader_basic.php',
	'spoma_lm_coachreader_basic'    => 'system/modules/sportsmanager/classes/spoma_lm_coachreader_basic.php',

));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'spoma_clubreader_basic'   	=> 'system/modules/sportsmanager/templates',
	'spoma_teamreader_basic'    => 'system/modules/sportsmanager/templates',
	'spoma_playerreader_basic'    => 'system/modules/sportsmanager/templates',
	'spoma_coachreader_basic'    => 'system/modules/sportsmanager/templates',


));
