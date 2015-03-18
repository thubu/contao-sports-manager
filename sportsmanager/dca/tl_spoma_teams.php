<?php

/**
 * @copyright  2015 Thomas Unterbusch
 * @author     Thomas Unterbusch
 * @package    SportsManager - Clubs
 * @license    GNU/LGPL
 */


/**
 * Table tl_spoma_teams
 */
$GLOBALS['TL_DCA']['tl_spoma_teams'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'               => 'Table',
		'enableVersioning'            => true,
'sql' => array (
						'keys' => array (
								'id' => 'primary'
						) )
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 1,
			'fields'                  => array('name'),
			'flag'                    => 1,
			'panelLayout'             => 'filter;search,limit',
			'headerFields'            => array('name'),
		),
		'label' => array
		(
			'fields'                  => array('name','shortname','gender','sortstring'),
			'format'                  => '%s (%s - %s - %s)'
		),
		'global_operations' => array
		(
			'all' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
				'href'                => 'act=select',
				'class'               => 'header_edit_all',
				'attributes'          => 'onclick="Backend.getScrollOffset();" accesskey="e"'
			)
		),
		'operations' => array
		(
			'edit' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_spoma_teams']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.gif',
				'attributes'          => 'class="contextmenu"'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_spoma_teams']['copy'],
				'href'                => 'act=copy',
				'icon'                => 'copy.gif'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_spoma_teams']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_spoma_ts']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif'
			)
		)
	),

	// Palettes
	'palettes' => array
	(
		'__selector__'                => array(''),
		'default'                     => 'name, shortname, sortstring, gender, logo;
										ownteam;
										{team_adress}, street, street_number, zipcode, city, state, country;
										{contact_info}, phone, fax, email, website;
										{add_info}, founded, resolved, colour;
										{team_location}, location_stadion, street_stadion, street_number_stadion, zipcode_stadion, city_stadion, state_stadion, country_stadion;
										{team_training}, location_training, street_training, street_number_training, zipcode_training, city_training, state_training, country_training;
										{add_information},information;'
	),

/**	// Subpalettes
	'subpalettes' => array
	(
		'hasinternal_page'            => 'internal_page'
	),*/

	'fields' => array 	(

		'id' => array (
			'sql' 					  => "int(10) unsigned NOT NULL auto_increment"
		),
		'pid' => array (
			'sql'					  => "int(10) unsigned NOT NULL default '0'"
		),
		'tstamp' => array (
			'sql' 					  => "int(10) unsigned NOT NULL default '0'"
		),
		'name' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_teams']['name'],
			'exclude'                 => false,
			'filter'				  => true,
			'inputType'               => 'text',
			'eval'                    => array (
											'mandatory'=>true,
											'rgxp'=>'alnum',
											'maxlength'=>255,
											'tl_class'=>'w50'
												),
			'sql'					  => "varchar(255) NOT NULL default ''"
		),
		'shortname' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_teams']['shortname'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array(
											'mandatory'=>true,
											'maxlength'=>255,
											'rgxp'=>'alnum',
											'unique'=>true,
											'tl_class'=>'w50'
												),
			'sql'					  => "varchar(255) NOT NULL default ''"
		),
		'sortstring' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_teams']['sortstring'],
			'exclude'                 => false,
			'filter'				  => true,
			'inputType'               => 'text',
			'eval'                    => array(
											'mandatory'=>false,
											'maxlength'=>255,
											'tl_class'=>'w50'
												),
			'sql'					  => "varchar(255) NOT NULL default ''"
		),
		'gender' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_teams']['gender'],
			'inputType'               => 'text',
			'eval'                    => array(
											'mandatory'=>true,
											'maxlength'=>255,
											'rgxp'=>'alnum',
											'unique'=>true,
											'tl_class'=>'w50'
												),
			'sql'					  => "varchar(255) NOT NULL default ''"
		),
		'founded' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_teams']['founded'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array(
											'mandatory'=>false,
											'maxlength'=>10,

											'tl_class'=>'w50'
												),
			'sql' 					  => "varchar(255) NOT NULL default ''"
		),
		'resolved' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_teams']['resolved'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array(
											'mandatory'=>false,
											'maxlength'=>10,
											'rgxp'=>'date',
											'datepicker'=>$this->getDatePickerString(),
											'tl_class'=>'w50'
												),
			'sql' 					  => "varchar(255) NOT NULL default ''"
		),


		'street' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_teams']['street'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array(
											'mandatory'=>false,
											'maxlength'=>255,
											'tl_class'=>'w50'
												),
			'sql'					  => "varchar(255) NOT NULL default ''"
		),
		'street_number' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_teams']['street_number'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array(
											'mandatory'=>false,
											'maxlength'=>255,
											'tl_class'=>'w50'
												),
			'sql'					  => "varchar(255) NOT NULL default ''"
		),
		'zipcode' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_teams']['zipcode'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array(
											'mandatory'=>false,
											'maxlength'=>8,
											'rgxp'=>'digit',
											'tl_class'=>'w50'
												),
			'sql'					  => "varchar(8) NOT NULL default ''"
		),
		'city' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_teams']['city'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array(
											'mandatory'=>false,
											'maxlength'=>255,
											'tl_class'=>'w50'
												),
			'sql'					  => "varchar(255) NOT NULL default ''"
		),
		'state' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_teams']['state'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array(
											'mandatory'=>false,
											'maxlength'=>255,
											'tl_class'=>'w50'),
			'sql'					  => "varchar(255) NOT NULL default ''"
		),
		'country' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_teams']['country'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array(
											'mandatory'=>false,
											'maxlength'=>255,
											'tl_class'=>'w50'
												),
			'sql'					  => "varchar(255) NOT NULL default ''"
		),



		'location_stadion' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_teams']['location_stadion'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array(
											'mandatory'=>false,
											'maxlength'=>255,
											'rgxp'=>'alnum',
											'unique'=>true,
											'tl_class'=>'clr'
												),
			'sql'					  => "varchar(255) NOT NULL default ''"
		),
		'street_stadion' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_teams']['street_stadion'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array(
											'mandatory'=>false,
											'maxlength'=>255,
											'tl_class'=>'w50'
												),
			'sql'					  => "varchar(255) NOT NULL default ''"
		),
		'street_number_stadion' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_teams']['street_number_stadion'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array(
											'mandatory'=>false,
											'maxlength'=>255,
											'tl_class'=>'w50'
												),
			'sql'					  => "varchar(255) NOT NULL default ''"
		),
		'zipcode_stadion' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_teams']['zipcode_stadion'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array(
											'mandatory'=>false,
											'maxlength'=>8,
											'rgxp'=>'digit',
											'tl_class'=>'w50'
												),
			'sql'					  => "varchar(8) NOT NULL default ''"
		),
		'city_stadion' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_teams']['city_stadion'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array(
											'mandatory'=>false,
											'maxlength'=>255,
											'tl_class'=>'w50'
												),
			'sql'					  => "varchar(255) NOT NULL default ''"
		),
		'state_stadion' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_teams']['state_stadion'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array(
											'mandatory'=>false,
											'maxlength'=>255,
											'tl_class'=>'w50'),
			'sql'					  => "varchar(255) NOT NULL default ''"
		),
		'country_stadion' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_teams']['country_stadion'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array(
											'mandatory'=>false,
											'maxlength'=>255,
											'tl_class'=>'w50'
												),
			'sql'					  => "varchar(255) NOT NULL default ''"
		),
		'location_training' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_teams']['location_training'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array(
											'mandatory'=>false,
											'maxlength'=>255,
											'rgxp'=>'alnum',
											'unique'=>true,
											'tl_class'=>'clr'
												),
			'sql'					  => "varchar(255) NOT NULL default ''"
		),
		'street_training' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_teams']['street_training'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array(
											'mandatory'=>false,
											'maxlength'=>255,
											'tl_class'=>'w50'
												),
			'sql'					  => "varchar(255) NOT NULL default ''"
		),
		'street_number_training' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_teams']['street_number_training'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array(
											'mandatory'=>false,
											'maxlength'=>255,
											'tl_class'=>'w50'
												),
			'sql'					  => "varchar(255) NOT NULL default ''"
		),
		'zipcode_training' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_teams']['zipcode_training'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array(
											'mandatory'=>false,
											'maxlength'=>8,
											'rgxp'=>'digit',
											'tl_class'=>'w50'
												),
			'sql'					  => "varchar(8) NOT NULL default ''"
		),
		'city_training' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_teams']['city_training'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array(
											'mandatory'=>false,
											'maxlength'=>255,
											'tl_class'=>'w50'
												),
			'sql'					  => "varchar(255) NOT NULL default ''"
		),
		'state_training' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_teams']['state_training'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array(
											'mandatory'=>false,
											'maxlength'=>255,
											'tl_class'=>'w50'),
			'sql'					  => "varchar(255) NOT NULL default ''"
		),
		'country_training' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_teams']['country_training'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array(
											'mandatory'=>false,
											'maxlength'=>255,
											'tl_class'=>'w50'
												),
			'sql'					  => "varchar(255) NOT NULL default ''"
		),
		'website' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_teams']['website'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array(
											'mandatory'=>false,
											'maxlength'=>255,
											'tl_class'=>'w50',
											'rgxp'=>'url'
												),
			'sql'					  => "varchar(255) NOT NULL default ''"
		),
		'logo' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_teams']['logo'],
			'exclude'                 => false,
			'inputType' 			  => 'fileTree',
			'eval' 					  => array (
											'filesOnly' => true,
											'fieldType' => 'radio',
											'tl_class' => 'clr',
											'extensions' =>'jpg, jpeg, png, gif'
												),
			'sql' 					  => "binary(16) NULL"
		),
		'information' => array
		(
			'label' 				  => &$GLOBALS['TL_LANG']['tl_spoma_teams']['information'],
		    'exclude' 				  => false,
		    'inputType' 			  => 'textarea',
		    'eval' 					  => array(
		    'rte' 					  => 'tinyMCE'
		            							),
		    'sql' 					  => "text NULL"
        ),
		'colour' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_teams']['colour'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array(
											'mandatory'=>false,
											'maxlength'=>255,
											'rgxp'=>'extnd',
											'tl_class'=>'w50'
												),
			'sql' 					  => "varchar(255) NOT NULL default ''"
		),
		'phone' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_teams']['phone'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array(
											'mandatory'=>false,
											'maxlength'=>255,
											'rgxp'=>'phone',
											'tl_class'=>'w50'
												),
			'sql' 					  => "varchar(255) NOT NULL default ''"

		),
		'fax' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_teams']['fax'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array(
											'mandatory'=>false,
											'maxlength'=>255,
											'rgxp'=>'phone',
											'tl_class'=>'w50'
												),
			'sql' 					  => "varchar(255) NOT NULL default ''"
		),
		'email' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_teams']['email'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array(
											'mandatory' => false,
											'maxlength' => 255,
											'rgxp' => 'email',
											'tl_class' => 'w50'
												),
			'sql'					  => "varchar(255) NOT NULL default ''"
		),
		'ownteam' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_teams']['ownteam'],
			'exclude'                 => false,
			'filter'				  => true,
			'inputType'               => 'checkbox',
			'eval'                    => array(
											'mandatory'=>false
												),
			'sql' 					  => "char(1) NOT NULL default ''"
		)
	)

);

class tl_spoma_teams extends Backend
{
}
