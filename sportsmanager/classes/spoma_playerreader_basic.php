<?php

/**
 * @package   SportmanagerCore
 * @author    Thomas Unterbusch
 * @license   GNU/LGPL
 * @copyright Thomas Unterbusch
 */


/**
 * Class spoma_playerreader_basic
 *
 * @copyright  2010 Andreas Koob
 * @author     Andreas Koob
 * @package    Controller
 */
class spoma_playerreader_basic extends ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'spoma_playerreader_basic';


	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$return = "Player reader - Basic information<br />";
			if($this->spoma_usefixedplayer=="1"){
				$objPlayer =$this->Database->prepare("SELECT * FROM tl_spoma_players WHERE id=?")->execute($this->spoma_player);
				$return.="Fixed player: " . $objPlayer->surname;
			}
			else
			{
				$return.="Variable player";
			}
			return $return;
		}
		return parent::generate();
	}

	/**
	 * Generate module
	 */
	protected function compile()
	{
		//Get player id from get variable or from content element settings
		if($this->spoma_usefixedplayer=="1"){
			$playerid = $this->spoma_player;
		}
		else
		{
			$playerid = $this->Input->get('spoma_player');
		}


		if($playerid)
		{
			$objPlayer=$this->Database->prepare("SELECT * FROM tl_spoma_players WHERE id=?")->execute($playerid);

			$arrPlayer=array(
				'surname'=>$objPlayer->name,
				'picture'=>$objPlayer->picture,
				'position'=>$objPlayer->position,
				'nickname'=>$objPlayer->nickname,
				'website'=>$objPlayer->website,
				'birthday'=>$objPlayer->birthday,
				'addinfo'=>$objPlayer->addinfo
			);
			$this->Template->player=$arrPlayer;
			$this->Template->hasPlayerid=$playerid;
			$this->Template->se_friendly_tags=$this->spoma_se_friendly;
		}
	}
}
