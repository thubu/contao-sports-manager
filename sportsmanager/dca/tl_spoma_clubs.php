<?php

/**
 * @copyright  2015 Thomas Unterbusch
 * @author     Thomas Unterbusch
 * @package    SportsManager - Clubs
 * @license    GNU/LGPL
 */


/**
 * Table tl_spoma_clubs
 */
$GLOBALS['TL_DCA']['tl_spoma_clubs'] = array
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
			'panelLayout'             => 'filter;search,limit'
		),
		'label' => array
		(
			'fields'                  => array('name','shortname'),
			'format'                  => '%s (%s)'
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
				'label'               => &$GLOBALS['TL_LANG']['tl_spoma_clubs']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.gif',
				'attributes'          => 'class="contextmenu"'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_spoma_clubs']['copy'],
				'href'                => 'act=copy',
				'icon'                => 'copy.gif'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_spoma_clubs']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_spoma_clubs']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif'
			),
			'assignteams' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_spoma_clubs']['assignteams'],
				'href'                => 'table=tl_spoma_teams_to_club',
				'icon'                => 'edit.gif',
				'attributes'          => 'class="contextmenu"'
			)
		)
	),

	// Palettes
	'palettes' => array
	(
		'__selector__'                => array(''),
		'default'                     => 	'name, shortname, sortstring, logo;
											ownclub;
											{club_adress}, street, street_number, zipcode, city, state, country;
											{contact_info}, phone, fax, email, website;
											{add_info},founded, resolved, members, colour, information; '

	),

/**	// Subpalettes
	'subpalettes' => array
	(
		'hasinternal_page'            => 'internal_page'
	),*/

	// Fields

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
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_clubs']['name'],
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
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_clubs']['shortname'],
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
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_clubs']['sortstring'],
			'exclude'                 => false,
			'filter'				  => true,
			'inputType'               => 'text',
			'eval'                    => array(
											'mandatory'=>false,
											'maxlength'=>255,
											'tl_class'=>'clr'
												),
			'sql'					  => "varchar(255) NOT NULL default ''"
		),
		'zipcode' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_clubs']['zipcode'],
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
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_clubs']['city'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array(
											'mandatory'=>false,
											'maxlength'=>255,
											'tl_class'=>'w50'
												),
			'sql'					  => "varchar(255) NOT NULL default ''"
		),
		'street' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_clubs']['street'],
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
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_clubs']['street_number'],
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
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_clubs']['state'],
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
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_clubs']['country'],
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
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_clubs']['website'],
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
		'email' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_clubs']['email'],
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
		'phone' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_clubs']['phone'],
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
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_clubs']['fax'],
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
		'colour' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_clubs']['colour'],
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
		'founded' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_clubs']['founded'],
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
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_clubs']['resolved'],
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
		'logo' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_clubs']['logo'],
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
		'members' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_clubs']['members'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array(
											'mandatory'=>false,
											'maxlength'=>255,
											'rgxp'=>'digit',
											'tl_class'=>'w50'
												),
			'sql' 					  => "varchar(255) NOT NULL default ''"
		),
		'information' => array
		(
			'label' 				  => &$GLOBALS['TL_LANG']['tl_spoma_clubs']['information'],
		    'exclude' 				  => false,
		    'inputType' 			  => 'textarea',
		    'eval' 					  => array(
		    'rte' 					  => 'tinyMCE'
		            							),
		    'sql' 					  => "text NULL"
        ),
		'ownclub' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_clubs']['ownclub'],
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

class tl_spoma_clubs extends Backend
{
	public function editHeader($row, $href, $label, $title, $icon, $attributes)
	{
		return  '<a href="'.$this->addToUrl($href.'&amp;id='.$row['id']).'" title="'.specialchars($title).'"'.$attributes.'>'.$this->generateImage($icon, $label).'</a> ';
	}

}