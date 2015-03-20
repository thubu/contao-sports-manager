<?php

/**
 * @copyright  2015 Thomas Unterbusch
 * @author     Thomas Unterbusch
 * @package    SportsManager - Clubs
 * @license    GNU/LGPL
 */


/**
 * Table tl_spoma_coach
 */
$GLOBALS['TL_DCA']['tl_spoma_coach'] = array
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
				'label'               => &$GLOBALS['TL_LANG']['tl_spoma_coach']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.gif'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_spoma_coach']['copy'],
				'href'                => 'act=copy',
				'icon'                => 'copy.gif'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_spoma_coach']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_spoma_coach']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif'
			),
			'assign_teams' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_spoma_coach']['assign_teams'],
				'href'                => 'table=tl_spoma_coach_to_team',
				'icon'                => 'edit.gif'
			)

		)
	),

	// Palettes
	'palettes' => array
	(
		'__selector__'                => 	array('hasinternal_page'),
		'default'                     => 	'firstname,name,shortname,nickname,sortstring,picture;
							{coach_info}, birthday, diedday, birthplace, nationality, endofcareer;
							{coach_detail}, height, weight;
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
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_coach']['name'],
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
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_coach']['firstname'],
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
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_coach']['shortname'],
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
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_coach']['nickname'],
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
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_coach']['sortstring'],
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
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_coach']['website'],
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
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_coach']['hasinternal_page'],
			'exclude'                 => false,
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true),
			'sql'					  => "char(1) NOT NULL default ''"
		),
		'internal_page' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_coach']['internal_page'],
			'exclude'                 => false,
			'inputType'               => 'pageTree',
			'eval'                    => array('mandatory'=>false,'fieldType'=>'radio', 'tl_class'=>'clr'),
			'sql'					  => "int(10) NOT NULL default '0'"
		),
		'picture' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_coach']['picture'],
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
			'label' 				  => &$GLOBALS['TL_LANG']['tl_spoma_coach']['information'],
		    'exclude' 				  => false,
		    'inputType' 			  => 'textarea',
		    'eval' 					  => array(
		    'rte' 					  => 'tinyMCE'
		            							),
		    'sql' 					  => "text NULL"
        ),

		'birthday' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_coach']['birthday'],
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
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_coach']['diedday'],
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
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_coach']['endofcareer'],
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
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_coach']['birthplace'],
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
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_coach']['nationality'],
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
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_coach']['height'],
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
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_coach']['weight'],
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


class tl_spoma_coach extends Backend
{
	public function editHeader($row, $href, $label, $title, $icon, $attributes)
	{
		return  '<a href="'.$this->addToUrl($href.'&amp;id='.$row['id']).'" title="'.specialchars($title).'"'.$attributes.'>'.$this->generateImage($icon, $label).'</a> ';
	}
}