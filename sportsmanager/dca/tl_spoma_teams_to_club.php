<?php

/**
 * @copyright  2015 Thomas Unterbusch
 * @author     Thomas Unterbusch
 * @package    SportsManager - Clubs
 * @license    GNU/LGPL
 */


/**
 * Table tl_spoma_teams_to_club
 */
$GLOBALS['TL_DCA']['tl_spoma_teams_to_club'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'               => 'Table',
		'enableVersioning'            => true,
		'ptable'                      => 'tl_spoma_clubs',
		'sql' => array (
							'keys' => array ('id' => 'primary'),
							'KEY' => array ('pid' => 'pid'),
						)
	),



	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 4,
			'fields'                  => array('team'),
			'flag'                    => 11,
			'panelLayout'             => 'filter;search,limit',
			'headerFields'            => array('name'),
			'disableGrouping'		  => true,
			'child_record_callback'   => array('tl_spoma_teams_to_club', 'listTeams')
		),
		'label' => array
		(

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
				'label'               => &$GLOBALS['TL_LANG']['tl_spoma_teams_to_club']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.gif'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_spoma_teams_to_club']['copy'],
				'href'                => 'act=copy',
				'icon'                => 'copy.gif'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_spoma_teams_to_club']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_spoma_teams_to_club']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif'
			)
		)
	),

	// Palettes
	'palettes' => array
	(
		'__selector__'                => array(''),
		'default'                     => 'team;{dates},date_from,date_to;'
	),

	// Subpalettes
	'subpalettes' => array
	(
		''                            => ''
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

		'team' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_teams_to_club']['team'],
			'exclude'                 => false,
			'filter'				  => true,
			'inputType'               => 'select',
			'includeBlankOption'	  => true,
			'options_callback'        => array('tl_spoma_teams_to_club', 'getTeams'),
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255),
		 	'sql'					  => "int(10) NOT NULL default '0'"
		),
		'date_from' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_teams_to_club']['date_from'],
			'exclude'                 => false,
			'filter'				  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'rgxp'=>'date', 'datepicker'=>$this->getDatePickerString(), 'tl_class'=>'w50'),
		 	'sql'					  => "varchar(10) NOT NULL default ''"

		),
		'date_to' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_spoma_teams_to_club']['date_to'],
			'exclude'                 => false,
			'filter'				  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'rgxp'=>'date', 'datepicker'=>$this->getDatePickerString(), 'tl_class'=>'w50'),
		 	'sql'					  => "varchar(10) NOT NULL default ''"

		)
	)
);


class tl_spoma_teams_to_club extends Backend
{
	public function listTeams($arrRow)
	{
		$objTeam = $this->Database->prepare("SELECT * FROM tl_spoma_teams WHERE id=? ORDER BY name ASC")->execute($arrRow['team']);
		return $objTeam->name;
	}

	public function getTeams($dc)
	{
		$return = array();
		$objTeams = $this->Database->prepare("SELECT * FROM tl_spoma_teams ORDER BY name ASC")->execute();

			if ($objTeams->numRows < 1)
			{
				return array();
			}



			while ($objTeams->next())
			{
				if($objTeams->sortstring=="")
				{
					$return[$GLOBALS['TL_LANG']['league-manager']['misc']['nosortstring']][$objTeams->id] = $objTeams->name;
				}
				else
				{
					$return[$objTeams->sortstring][$objTeams->id] = $objTeams->name;
				}
			}
		return $return;
	}
}
