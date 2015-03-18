<?php

/**
 * TYPOlight Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 *
 * @copyright  2015 Thomas Unterbusch
 * @author     Thomas Unterbusch
 * @package    sportsmanager
 * @license
 * @filesource
 */


/**
 * Add palette
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'spoma_useredirectmatch';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'spoma_useredirectplayer';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'spoma_useredirectteam';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'spoma_useredirectclub';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'spoma_useredirectcontest';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'spoma_useredirectstadium';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'spoma_usefixedteam';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'spoma_usefixedclub';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'spoma_usefixedcontest';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'spoma_usefixedmatch';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'spoma_usefixedplayer';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'spoma_usefixedstadium';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'spoma_linktype_player';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'spoma_linktype_team';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'spoma_linktype_club';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'spoma_linktype_match';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'spoma_linktype_contest';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'spoma_linktype_stadium';



$GLOBALS['TL_DCA']['tl_content']['palettes']['spoma_contestreader_teams'] = '{type_legend},type,headline;{spoma_settings},spoma_usefixedcontest,spoma_showlogo;{spoma_redirect},spoma_linktype_team;{spoma_selecttemplate},spoma_template;{expert_legend:hide},cssID,space';
$GLOBALS['TL_DCA']['tl_content']['palettes']['spoma_contestreader_basic'] = '{type_legend},type,headline;{spoma_settings},spoma_usefixedcontest;{expert_legend:hide},cssID,space';
$GLOBALS['TL_DCA']['tl_content']['palettes']['spoma_contestreader_rounds'] = '{type_legend},type,headline;{spoma_settings},spoma_usefixedcontest;{expert_legend:hide},cssID,space';
$GLOBALS['TL_DCA']['tl_content']['palettes']['spoma_contestreader_matches'] = '{type_legend},type,headline;{spoma_settings},spoma_usefixedcontest;{spoma_redirect},spoma_useredirectmatch;{spoma_selecttemplate},spoma_template;{expert_legend:hide},cssID,space';
$GLOBALS['TL_DCA']['tl_content']['palettes']['spoma_contestreader_crosstable'] = '{type_legend},type,headline;{spoma_settings},spoma_usefixedcontest;{spoma_redirect},spoma_useredirectmatch;{expert_legend:hide},cssID,space';
$GLOBALS['TL_DCA']['tl_content']['palettes']['spoma_contestreader_table'] = '{type_legend},type,headline;{spoma_settings},spoma_usefixedcontest;{spoma_redirect},spoma_linktype_team;{spoma_selectfields},spoma_tablefields;{expert_legend:hide},cssID,space';
$GLOBALS['TL_DCA']['tl_content']['palettes']['spoma_contestreader_hometable'] = '{type_legend},type,headline;{spoma_settings},spoma_usefixedcontest;{spoma_redirect},spoma_linktype_team;{spoma_selectfields},spoma_tablefields;{expert_legend:hide},cssID,space';
$GLOBALS['TL_DCA']['tl_content']['palettes']['spoma_contestreader_awaytable'] = '{type_legend},type,headline;{spoma_settings},spoma_usefixedcontest;{spoma_redirect},spoma_linktype_team;{spoma_selectfields},spoma_tablefields;{expert_legend:hide},cssID,space';
$GLOBALS['TL_DCA']['tl_content']['palettes']['spoma_contestreader_basic'] = '{type_legend},type,headline;{spoma_settings},spoma_usefixedcontest,spoma_se_friendly;{expert_legend:hide},cssID,space';
$GLOBALS['TL_DCA']['tl_content']['palettes']['spoma_matchreader_events'] = '{type_legend},type,headline;{spoma_settings},spoma_usefixedmatch;{spoma_redirect},spoma_linktype_player,spoma_linktype_team;{spoma_selecttemplate},spoma_template;{expert_legend:hide},cssID,space';
$GLOBALS['TL_DCA']['tl_content']['palettes']['spoma_matchreader_basic'] = '{type_legend},type,headline;{spoma_settings},spoma_usefixedmatch,spoma_se_friendly;{expert_legend:hide},cssID,space';
$GLOBALS['TL_DCA']['tl_content']['palettes']['spoma_matchreader_reports'] = '{type_legend},type,headline;{spoma_settings},spoma_usefixedmatch,spoma_reporttype;{expert_legend:hide},cssID,space';
$GLOBALS['TL_DCA']['tl_content']['palettes']['spoma_teamreader_basic'] = '{type_legend},type,headline;{spoma_settings},spoma_usefixedteam,spoma_showlogo,spoma_se_friendly;{expert_legend:hide},cssID,space';
$GLOBALS['TL_DCA']['tl_content']['palettes']['spoma_teamreader_lastmatch'] = '{type_legend},type,headline;{spoma_settings},spoma_usefixedteam,spoma_showlogo;{spoma_redirect},spoma_useredirectmatch,spoma_useredirectteam;{spoma_selecttemplate},spoma_template;{expert_legend:hide},cssID,space';
$GLOBALS['TL_DCA']['tl_content']['palettes']['spoma_teamreader_lastmatch_short'] = '{type_legend},type,headline;{spoma_settings},spoma_usefixedteam,spoma_showlogo;{spoma_redirect},spoma_useredirectmatch,spoma_useredirectteam;{spoma_selecttemplate},spoma_template;{expert_legend:hide},cssID,space';
$GLOBALS['TL_DCA']['tl_content']['palettes']['spoma_teamreader_nextmatch'] = '{type_legend},type,headline;{spoma_settings},spoma_usefixedteam,spoma_showlogo;{spoma_redirect},spoma_useredirectmatch,spoma_useredirectteam;{spoma_selecttemplate},spoma_template;{expert_legend:hide},cssID,space';
$GLOBALS['TL_DCA']['tl_content']['palettes']['spoma_teamreader_nextmatch_short'] = '{type_legend},type,headline;{spoma_settings},spoma_usefixedteam,spoma_showlogo;{spoma_redirect},spoma_useredirectmatch,spoma_useredirectteam;{spoma_selecttemplate},spoma_template;{expert_legend:hide},cssID,space';
$GLOBALS['TL_DCA']['tl_content']['palettes']['spoma_teamreader_matches'] = '{type_legend},type,headline;{spoma_settings},spoma_usefixedteam,spoma_usefixedcontest,spoma_showlogo;{spoma_redirect},spoma_useredirectmatch;{spoma_selecttemplate},spoma_template;{expert_legend:hide},cssID,space';
$GLOBALS['TL_DCA']['tl_content']['palettes']['spoma_playerreader_basic'] = '{type_legend},type,headline;{spoma_settings},spoma_usefixedplayer,spoma_se_friendly;{expert_legend:hide},cssID,space';
$GLOBALS['TL_DCA']['tl_content']['palettes']['spoma_resultform'] = '{type_legend},type,headline{spoma_settings},spoma_usefixedcontest;{expert_legend:hide},cssID,space';
$GLOBALS['TL_DCA']['tl_content']['palettes']['spoma_clubreader_basic'] = '{type_legend},type,headline;{spoma_settings},spoma_usefixedclub,spoma_showlogo,spoma_se_friendly;{spoma_redirect},spoma_useredirectteam;{expert_legend:hide},cssID,space';



$GLOBALS['TL_DCA']['tl_content']['subpalettes']['spoma_useredirectplayer'] = 'spoma_redirectplayer';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['spoma_useredirectteam'] = 'spoma_redirectteam';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['spoma_useredirectclub'] = 'spoma_redirectclub';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['spoma_useredirectmatch'] = 'spoma_redirectmatch';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['spoma_useredirectcontest'] = 'spoma_redirectcontest';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['spoma_useredirectstadium'] = 'spoma_redirectstadium';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['spoma_usefixedcontest'] = 'spoma_contest';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['spoma_usefixedclub'] = 'spoma_club';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['spoma_usefixedteam'] = 'spoma_team';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['spoma_usefixedmatch'] = 'spoma_match';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['spoma_usefixedplayer'] = 'spoma_player';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['spoma_usefixedstadium'] = 'spoma_stadium';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['spoma_linktype_player_NOL']='';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['spoma_linktype_player_INT']='spoma_link_player_new_window';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['spoma_linktype_player_EXT']='spoma_link_player_new_window';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['spoma_linktype_player_FIX']='spoma_redirectplayer,spoma_link_player_new_window';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['spoma_linktype_team_NOL']='';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['spoma_linktype_team_INT']='spoma_link_team_new_window';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['spoma_linktype_team_EXT']='spoma_link_team_new_window';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['spoma_linktype_team_FIX']='spoma_redirectteam,spoma_link_team_new_window';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['spoma_linktype_club_NOL']='';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['spoma_linktype_club_INT']='spoma_link_club_new_window';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['spoma_linktype_club_EXT']='spoma_link_club_new_window';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['spoma_linktype_club_FIX']='spoma_redirectclub,spoma_link_club_new_window';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['spoma_linktype_match_NOL']='';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['spoma_linktype_match_INT']='spoma_link_match_new_window';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['spoma_linktype_match_EXT']='spoma_link_match_new_window';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['spoma_linktype_match_FIX']='spoma_redirectmatch,spoma_link_match_new_window';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['spoma_linktype_contest_NOL']='';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['spoma_linktype_contest_INT']='spoma_link_contest_new_window';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['spoma_linktype_contest_EXT']='spoma_link_contest_new_window';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['spoma_linktype_contest_FIX']='spoma_redirectcontest,spoma_link_contest_new_window';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['spoma_linktype_stadium_NOL']='';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['spoma_linktype_stadium_INT']='spoma_link_stadium_new_window';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['spoma_linktype_stadium_EXT']='spoma_link_stadium_new_window';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['spoma_linktype_stadium_FIX']='spoma_redirectstadium,spoma_link_stadium_new_window';


/**
 * Add fields
 */

$GLOBALS['TL_DCA']['tl_content']['fields']['spoma_css_classes'] = array
(
	'sql'					  => "blob NULL"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['spoma_contest'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['spoma_contest'],
	'exclude'                 => false,
	'inputType'               => 'select',
	'eval'                    => array('mandatory'=>true),
	'options_callback'        => array('tl_content_lm', 'getContests'),
	'sql'					  => "int(10) NOT NULL default '0'"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['spoma_showlogo'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['spoma_showlogo'],
	'exclude'                 => false,
	'inputType'               => 'checkbox',
	'eval'                    => array('mandatory'=>false),
	'sql'					  => "char(1) NOT NULL default '1'"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['spoma_team'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['spoma_team'],
	'exclude'                 => false,
	'inputType'               => 'select',
	'eval'                    => array('mandatory'=>true),
	'options_callback'        => array('tl_content_lm', 'getTeams'),
	'sql'					  => "int(10) NOT NULL default '0'"

);
$GLOBALS['TL_DCA']['tl_content']['fields']['spoma_club'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['spoma_club'],
	'exclude'                 => false,
	'inputType'               => 'select',
	'eval'                    => array('mandatory'=>true),
	'options_callback'        => array('tl_content_lm', 'getClubs'),
	'sql'					  => "int(10) NOT NULL default '0'"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['spoma_stadium'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['spoma_stadium'],
	'exclude'                 => false,
	'inputType'               => 'select',
	'eval'                    => array('mandatory'=>true),
	'options_callback'        => array('tl_content_lm', 'getStadium'),
	'sql'					  => "int(10) NOT NULL default '0'"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['spoma_redirectplayer'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['spoma_redirectplayer'],
	'exclude'                 => false,
	'inputType'               => 'pageTree',
	'eval'                    => array('mandatory'=>true,'fieldType'=>'radio', 'tl_class'=>'clr'),
	'sql'					  => "int(10) NOT NULL default '0'"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['spoma_redirectteam'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['spoma_redirectteam'],
	'exclude'                 => false,
	'inputType'               => 'pageTree',
	'eval'                    => array('mandatory'=>true,'fieldType'=>'radio', 'tl_class'=>'clr'),
	'sql'					  => "int(10) NOT NULL default '0'"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['spoma_redirectclub'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['spoma_redirectclub'],
	'exclude'                 => false,
	'inputType'               => 'pageTree',
	'eval'                    => array('mandatory'=>true,'fieldType'=>'radio', 'tl_class'=>'clr'),
	'sql'					  => "int(10) NOT NULL default '0'"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['spoma_redirectmatch'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['spoma_redirectmatch'],
	'exclude'                 => false,
	'inputType'               => 'pageTree',
	'eval'                    => array('mandatory'=>true,'fieldType'=>'radio', 'tl_class'=>'clr'),
	'sql'					  => "int(10) NOT NULL default '0'"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['spoma_redirectcontest'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['spoma_redirectcontest'],
	'exclude'                 => false,
	'inputType'               => 'pageTree',
	'eval'                    => array('mandatory'=>true,'fieldType'=>'radio', 'tl_class'=>'clr'),
	'sql'					  => "int(10) NOT NULL default '0'"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['spoma_redirectstadium'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['spoma_redirectstadium'],
	'exclude'                 => false,
	'inputType'               => 'pageTree',
	'eval'                    => array('mandatory'=>true,'fieldType'=>'radio', 'tl_class'=>'clr'),
	'sql'					  => "int(10) NOT NULL default '0'"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['spoma_useredirectplayer'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['spoma_useredirectplayer'],
	'exclude'                 => false,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true),
	'sql'					  => "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['spoma_useredirectmatch'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['spoma_useredirectmatch'],
	'exclude'                 => false,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true),
	'sql'					  => "char(1) NOT NULL default ''"
	);
$GLOBALS['TL_DCA']['tl_content']['fields']['spoma_useredirectteam'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['spoma_useredirectteam'],
	'exclude'                 => false,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true),
	'sql'					  => "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['spoma_useredirectclub'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['spoma_useredirectclub'],
	'exclude'                 => false,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true),
	'sql'					  => "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['spoma_useredirectcontest'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['spoma_useredirectcontest'],
	'exclude'                 => false,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true),
	'sql'					  => "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['spoma_useredirectstadium'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['spoma_useredirectstadium'],
	'exclude'                 => false,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true),
	'sql'					  => "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['spoma_template'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['spoma_template'],
	'exclude'                 => false,
	'inputType'               => 'select',
	'eval'                    => array('mandatory'=>true),
	'options'				  => array('div','table'),
	'reference'				  => &$GLOBALS['TL_LANG']['tl_content']['spoma_template']['reference'],
	'sql'					  => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['spoma_tablefields'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['spoma_tablefields'],
	'exclude'                 => false,
	'inputType'               => 'checkboxWizard',
	'eval'                    => array('mandatory'=>true,'multiple'=>true),
	'options'				  => array('special','place','logo','name','shortname','matches','w','d','l','rp','rm','rd','pp','pm','pd','pt','pen'),
	'reference'				  => &$GLOBALS['TL_LANG']['tl_content']['spoma_tablefields']['reference'],
	'sql'					  => "blob NULL"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['spoma_usefixedteam'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['spoma_usefixedteam'],
	'exclude'                 => false,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true),
	'sql'					  => "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['spoma_usefixedclub'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['spoma_usefixedclub'],
	'exclude'                 => false,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true),
	'sql'					  => "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['spoma_usefixedcontest'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['spoma_usefixedcontest'],
	'exclude'                 => false,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true),
	'sql'					  => "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['spoma_usefixedmatch'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['spoma_usefixedmatch'],
	'exclude'                 => false,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true),
	'sql'					  => "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['spoma_match'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['spoma_match'],
	'exclude'                 => false,
	'inputType'               => 'select',
	'eval'                    => array('mandatory'=>true),
	'options_callback'        => array('tl_content_lm', 'getMatches'),
	'sql'					  => "int(10) NOT NULL default '0'"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['spoma_usefixedplayer'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['spoma_usefixedplayer'],
	'exclude'                 => false,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true),
	'sql'					  => "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['spoma_player'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['spoma_player'],
	'exclude'                 => false,
	'inputType'               => 'select',
	'eval'                    => array('mandatory'=>true),
	'options_callback'        => array('tl_content_lm', 'getPlayers'),
	'sql'					  => "int(10) NOT NULL default '0'"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['spoma_usefixedstadium'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['spoma_usefixedstadium'],
	'exclude'                 => false,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true),
	'sql'					  => "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['spoma_stadium'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['spoma_stadium'],
	'exclude'                 => false,
	'inputType'               => 'select',
	'eval'                    => array('mandatory'=>true),
	'options_callback'        => array('tl_content_lm', 'getStadium'),
	'sql'					  => "int(10) NOT NULL default '0'"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['spoma_se_friendly'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['spoma_se_friendly'],
	'exclude'                 => false,
	'inputType'               => 'checkbox',
	'eval'                    => array('mandatory'=>false),
	'sql'					  => "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['spoma_reporttype'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['spoma_reporttype'],
	'exclude'                 => false,
	'inputType'               => 'select',
	'eval'                    => array('mandatory'=>true),
	'options'				  => array('P','G','A'),
	'reference'				  => &$GLOBALS['TL_LANG']['tl_content']['spoma_reporttype']['reference'],
	'sql'					  => "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['spoma_datefrom'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['spoma_datefrom'],
	'exclude'                 => false,
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>false, 'rgxp'=>'date', 'datepicker'=>$this->getDatePickerString()),
	'sql'					  => "int(10) NOT NULL default '0'"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['spoma_dateto'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['spoma_dateto'],
	'exclude'                 => false,
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>false, 'rgxp'=>'date', 'datepicker'=>$this->getDatePickerString()),
	'sql'					  => "int(10) NOT NULL default '0'"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['spoma_linktype_player'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['spoma_linktype_player'],
	'exclude'                 => false,
	'inputType'               => 'select',
	'eval'                    => array('mandatory'=>true,'submitOnChange'=>true),
	'options'				  => array('NOL','FIX','INT','EXT'),
	'reference'				  => &$GLOBALS['TL_LANG']['tl_content']['spoma_linktypes']['reference'],
	'sql'					  => "char(3) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['spoma_linktype_team'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['spoma_linktype_team'],
	'exclude'                 => false,
	'inputType'               => 'select',
	'eval'                    => array('mandatory'=>true,'submitOnChange'=>true),
	'options'				  => array('NOL','FIX'/**,'INT'*/,'EXT'),
	'reference'				  => &$GLOBALS['TL_LANG']['tl_content']['spoma_linktypes']['reference'],
	'sql'					  => "char(3) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['spoma_linktype_club'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['spoma_linktype_club'],
	'exclude'                 => false,
	'inputType'               => 'select',
	'eval'                    => array('mandatory'=>true,'submitOnChange'=>true),
	'options'				  => array('NOL','FIX'/**,'INT'*/,'EXT'),
	'reference'				  => &$GLOBALS['TL_LANG']['tl_content']['spoma_linktypes']['reference'],
	'sql'					  => "char(3) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['spoma_linktype_match'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['spoma_linktype_match'],
	'exclude'                 => false,
	'inputType'               => 'select',
	'eval'                    => array('mandatory'=>true,'submitOnChange'=>true),
	'options'				  => array('NOL','FIX','INT','EXT'),
	'reference'				  => &$GLOBALS['TL_LANG']['tl_content']['spoma_linktypes']['reference'],
	'sql'					  => "char(3) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['spoma_linktype_contest'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['spoma_linktype_contest'],
	'exclude'                 => false,
	'inputType'               => 'select',
	'eval'                    => array('mandatory'=>true,'submitOnChange'=>true),
	'options'				  => array('NOL','FIX','INT','EXT'),
	'reference'				  => &$GLOBALS['TL_LANG']['tl_content']['spoma_linktypes']['reference'],
	'sql'					  => "char(3) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['spoma_linktype_stadium'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['spoma_linktype_stadium'],
	'exclude'                 => false,
	'inputType'               => 'select',
	'eval'                    => array('mandatory'=>true,'submitOnChange'=>true),
	'options'				  => array('NOL','FIX','INT','EXT'),
	'reference'				  => &$GLOBALS['TL_LANG']['tl_content']['spoma_linktypes']['reference'],
	'sql'					  => "char(3) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['spoma_link_player_new_window'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['spoma_link_new_window'],
	'exclude'                 => false,
	'inputType'               => 'checkbox',
	'eval'                    => array(),
	'sql'					  => "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['spoma_link_team_new_window'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['spoma_link_new_window'],
	'exclude'                 => false,
	'inputType'               => 'checkbox',
	'eval'                    => array(),
	'sql'					  => "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['spoma_link_club_new_window'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['spoma_link_new_window'],
	'exclude'                 => false,
	'inputType'               => 'checkbox',
	'eval'                    => array(),
	'sql'					  => "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['spoma_link_match_new_window'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['spoma_link_new_window'],
	'exclude'                 => false,
	'inputType'               => 'checkbox',
	'eval'                    => array(),
	'sql'					  => "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['spoma_link_contest_new_window'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['spoma_link_new_window'],
	'exclude'                 => false,
	'inputType'               => 'checkbox',
	'eval'                    => array(),
	'sql'					  => "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['spoma_link_stadium_new_window'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['spoma_link_new_window'],
	'exclude'                 => false,
	'inputType'               => 'checkbox',
	'eval'                    => array(),
	'sql'					  => "char(1) NOT NULL default ''"
);
class tl_content_lm extends Backend
{
	//Lists the contests in the database
	public function getContests()
	{
		$objContests = $this->Database->prepare("SELECT id, name, sortstring FROM tl_spoma_contests")->execute();

		if ($objContests->numRows < 1)
		{
			return array();
		}

		$return = array();

		while ($objContests->next())
		{
			if($objContests->sortstring=="")
			{
				$return[$GLOBALS['TL_LANG']['sportsmanager']['misc']['nosortstring']][$objContests->id] = $objContests->name;
			}
			else
			{
				$return[$objContests->sortstring][$objContests->id] = $objContests->name;
			}
		}

		return $return;
	}

	//Lists the teams in the database
	public function getTeams()
	{
		$objTeams = $this->Database->prepare("SELECT id, name, sortstring, gender FROM tl_spoma_teams ORDER BY name ASC")->execute();

		if ($objTeams->numRows < 1)
		{
			return array();
		}

		$return = array();

		while ($objTeams->next())
		{
			if($objTeams->sortstring=="")
			{
				$return[$GLOBALS['TL_LANG']['sportsmanager']['misc']['nosortstring']][$objTeams->id] = $objTeams->name;
			}
			else
			{
				$return[$objTeams->sortstring][$objTeams->id] = $objTeams->name;
			}
		}

		return $return;
	}
	//Lists the matches in the database
	public function getMatches()
	{
		$return=array();
		$teams=array();
		$objTeams = $this->Database->prepare("SELECT id, name, sortstring FROM tl_spoma_teams ORDER BY name ASC")->execute();
		while($objTeams->next())
		{
			$teams[$objTeams->id]=$objTeams->name;
		}

		$arrContests = $this->Database->prepare("SELECT id, name from tl_spoma_contests ORDER BY name ASC")->execute();
		while($arrContests->next())
		{
			$arrRounds=$this->Database->prepare("SELECT id, name from tl_spoma_rounds WHERE pid=? ORDER BY round_no ASC")->execute($arrContests->id);
			while($arrRounds->next())
			{
				$arrMatches = $this->Database->prepare("SELECT id, team_home, team_away FROM tl_spoma_matches WHERE pid=?")->execute($arrRounds->id);
				while($arrMatches->next())
				{

					$return[$arrContests->name][$arrMatches->id] = "[" . $arrRounds->name . "] " . $teams[$arrMatches->team_home] . " : " . $teams[$arrMatches->team_away];
				}
			}
		}
		return $return;
	}

	public function getPlayers()
	{
		//Generate list of players
		$objPlayers = $this->Database->prepare("SELECT id, name, sortstring FROM tl_spoma_players ORDER BY name ASC")->execute();

		if ($objPlayers->numRows < 1)
		{
			return array();
		}

		$return = array();

		while ($objPlayers->next())
		{
			if($objPlayers->sortstring=="")
			{
				$return[$GLOBALS['TL_LANG']['sportsmanager']['misc']['nosortstring']][$objPlayers->id] = $objPlayers->name;
			}
			else
			{
				$return[$objPlayers->sortstring][$objPlayers->id] = $objPlayers->name;
			}
		}

		return $return;
	}
		//Lists the clubs in the database
		public function getClubs()
		{
			$objClubs = $this->Database->prepare("SELECT id, name, sortstring FROM tl_spoma_clubs ORDER BY name ASC")->execute();

			if ($objClubs->numRows < 1)
			{
				return array();
			}

			$return = array();

			while ($objClubs->next())
			{
				if($objClubs->sortstring=="")
				{
					$return[$GLOBALS['TL_LANG']['sportsmanager']['misc']['nosortstring']][$objClubs->id] = $objClubs->name;
				}
				else
				{
					$return[$objClubs->sortstring][$objClubs->id] = $objClubs->name;
				}
			}

			return $return;
		}

		//Lists the stadium in the database
		public function getStadium()
		{
			$objStadium = $this->Database->prepare("SELECT id, name, sortstring FROM tl_spoma_stadium ORDER BY name ASC")->execute();

			if ($objStadium->numRows < 1)
			{
				return array();
			}

			$return = array();

			while ($objStadium->next())
			{
				if($objStadium->sortstring=="")
				{
					$return[$GLOBALS['TL_LANG']['sportsmanager']['misc']['nosortstring']][$objStadium->id] = $objStadium->name;
				}
				else
				{
					$return[$objStadium->sortstring][$objStadium->id] = $objStadium->name;
				}
			}

			return $return;
		}


}
