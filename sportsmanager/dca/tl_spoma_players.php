<?php

/**
 * @copyright  2015 Thomas Unterbusch
 * @author     Thomas Unterbusch
 * @package    SportsManager - Clubs
 * @license    GNU/LGPL
 */


/**
 * Table tl_spoma_players
 */
$GLOBALS['TL_DCA']['tl_spoma_players'] = array
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
			'fields'                  => array('name','firstname','shortname'),
			'format'                  => '%s, %s (%s)'
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
				'label'               => &$GLOBALS['TL_LANG']['tl_spoma_players']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.gif'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_spoma_players']['copy'],
				'href'                => 'act=copy',
				'icon'                => 'copy.gif'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_spoma_players']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_spoma_players']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif'
			),
			'assign_teams' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_spoma_players']['assign_teams'],
				'href'                => 'table=tl_spoma_players_to_team',
				'icon'                => 'edit.gif'
			)

		)
	),

	// Palettes
	'palettes' => array
	(
		'__selector__'                => 	array('hasinternal_page'),
		'default'                     => 	'firstname,name,shortname,nickname,sortstring,picture;
											{player_info}, birthday, diedday, birthplace, nationality, endofcareer;
											{player_detail}, height, weight, position, foot, playinghand, throwinghand, punchhand;
											{add_information}, information;
											{internal_page}, hasinternal_page;'
	),

	// Subpalettes
	'subpalettes' => array
	(
		'hasinternal_page'            => 'internal_page'
	),

	// Fields
	'fields' => array
	(

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
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_players']['name'],
			'exclude'                 => false,
			'filter'				  => true,
			'inputType'               => 'text',
			'eval'                    => array(
											'mandatory'=>true,
											'rgxp'=>'alnum',
											'maxlength'=>255,
											'tl_class'=>'w50'
												),
			'sql'					  => "varchar(255) NOT NULL default ''"
		),
		'firstname' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_players']['firstname'],
			'exclude'                 => false,
			'filter'				  => true,
			'inputType'               => 'text',
			'eval'                    => array(
											'mandatory'=>true,
											'rgxp'=>'alnum',
											'maxlength'=>255,
											'tl_class'=>'w50'
												),
			'sql'					  => "varchar(255) NOT NULL default ''"
		),
		'shortname' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_players']['shortname'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array(
											'mandatory'=>false,
											'maxlength'=>10,
											'rgxp'=>'alnum',
											'unique'=>true,
											'tl_class'=>'w50'
												),
			'sql'					  => "varchar(255) NOT NULL default ''"
		),
		'nickname' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_players']['nickname'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array(
											'mandatory'=>false,
											'maxlength'=>25,
											'rgxp'=>'alnum',
											'unique'=>true,
											'tl_class'=>'w50'
												),
			'sql'					  => "varchar(255) NOT NULL default ''"
		),
		'sortstring' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_players']['sortstring'],
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

		'website' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_players']['website'],
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
		'hasinternal_page'=>array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_players']['hasinternal_page'],
			'exclude'                 => false,
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true),
			'sql'					  => "char(1) NOT NULL default ''"
		),
		'internal_page' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_players']['internal_page'],
			'exclude'                 => false,
			'inputType'               => 'pageTree',
			'eval'                    => array('mandatory'=>false,'fieldType'=>'radio', 'tl_class'=>'clr'),
			'sql'					  => "int(10) NOT NULL default '0'"
		),
		'picture' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_players']['picture'],
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
		'position' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_players']['position'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array(
											'mandatory'=>false,
											'maxlength'=>25,
											'rgxp'=>'alnum',
											'unique'=>true,
											'tl_class'=>'w50'
												),
			'sql'					  => "varchar(255) NOT NULL default ''"
		),
		'foot' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_players']['foot'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array(
											'mandatory'=>false,
											'maxlength'=>25,
											'rgxp'=>'alnum',
											'unique'=>true,
											'tl_class'=>'w50'
												),
			'sql'					  => "varchar(255) NOT NULL default ''"
		),
		'playinghand' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_players']['playinghand'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array(
											'mandatory'=>false,
											'maxlength'=>25,
											'rgxp'=>'alnum',
											'unique'=>true,
											'tl_class'=>'w50'
												),
			'sql'					  => "varchar(255) NOT NULL default ''"
		),
		'throwinghand' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_players']['throwinghand'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array(
											'mandatory'=>false,
											'maxlength'=>25,
											'rgxp'=>'alnum',
											'unique'=>true,
											'tl_class'=>'w50'
												),
			'sql'					  => "varchar(255) NOT NULL default ''"
		),
		'punchhand' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_players']['punchhand'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array(
											'mandatory'=>false,
											'maxlength'=>25,
											'rgxp'=>'alnum',
											'unique'=>true,
											'tl_class'=>'w50'
												),
			'sql'					  => "varchar(255) NOT NULL default ''"
		),
		'information' => array
		(
			'label' 				  => &$GLOBALS['TL_LANG']['tl_spoma_players']['information'],
		    'exclude' 				  => false,
		    'inputType' 			  => 'textarea',
		    'eval' 					  => array(
		    'rte' 					  => 'tinyMCE'
		            							),
		    'sql' 					  => "text NULL"
        ),

		'birthday' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_players']['birthday'],
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
		'diedday' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_players']['diedday'],
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
		'endofcareer' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_players']['endofcareer'],
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
		'birthplace' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_players']['birthplace'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array(
											'mandatory'=>false,
											'maxlength'=>25,
											'rgxp'=>'alnum',
											'unique'=>true,
											'tl_class'=>'w50'
												),
			'sql'					  => "varchar(255) NOT NULL default ''"
		),
		'nationality' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_players']['nationality'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array(
											'mandatory'=>false,
											'maxlength'=>255,
											'tl_class'=>'w50'
												),
			'sql'					  => "varchar(255) NOT NULL default ''"
		),

		'height' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_players']['height'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array(
											'mandatory'=>false,
											'maxlength'=>255,
											'rgxp'=>'digit',
											'tl_class'=>'w50'
												),
			'sql'					  => "varchar(255) NOT NULL default ''"
		),
		'weight' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_players']['weight'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'eval'                    => array(
											'mandatory'=>false,
											'maxlength'=>255,
											'rgxp'=>'digit',
											'tl_class'=>'w50'
												),
			'sql'					  => "varchar(255) NOT NULL default ''"
		)

	)
);


class tl_spoma_players extends Backend
{
	public function editHeader($row, $href, $label, $title, $icon, $attributes)
	{
		return  '<a href="'.$this->addToUrl($href.'&amp;id='.$row['id']).'" title="'.specialchars($title).'"'.$attributes.'>'.$this->generateImage($icon, $label).'</a> ';
	}
}