<?php

/**
 * @package   SportmanagerCore
 * @author    Thomas Unterbusch
 * @license   GNU/LGPL
 * @copyright Thomas Unterbusch
 */


/**
 * Class spoma_teamreader_basic
 */
class spoma_teamreader_basic extends ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'spoma_teamreader_basic';


	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$return = "Team reader - Basic data<br />";
			if($this->spoma_usefixedteam=="1"){
				$objTeam =$this->Database->prepare("SELECT * FROM tl_spoma_teams WHERE id=?")->execute($this->spoma_team);
				$return.="Fixed team: " . $objTeam->name;
			}
			else
			{
				$return.="Variable team";
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
		//Get team id from get variable or from content element settings
		if($this->spoma_usefixedteam=="1"){
			$teamid = $this->spoma_team;
		}
		else
		{
			$teamid = $this->Input->get('spoma_team');
		}

		if($teamid)
		{
			$contests=array();
			$objteam =$this->Database->prepare("SELECT * FROM tl_spoma_teams WHERE id=?")->execute($teamid);

			if (!is_numeric($objteam->logo))
			{
			    return '<p class="error">'.$GLOBALS['TL_LANG']['ERR']['version2format'].'</p>';
			}
				$objFile = \FilesModel::findByPk($objteam->logo);
			$objteam->logo=$objFile->path;

			if ($objteam->numRows>0){
				$this->Template->team_found=1;
				$this->Template->id=$objteam->id;
				$this->Template->name=$objteam->name;
				$this->Template->shortname=$objteam->shortname;
				if($objteam->website!='')
				{
					if (strtolower(substr($objteam->website, 0, 4))!='http')
					{
						$website='http://' . $objteam->website;
					}
					else
					{
						$website=$objteam->website;
					}
				}
				else
				{
					$website='';
				}

				$this->Template->website=$website;
				$this->Template->location=$objteam->location;
				$this->Template->street=$objteam->street;
				$this->Template->zip=$objteam->zip;
				$this->Template->city=$objteam->city;
				$this->Template->country=$objteam->country;
				$this->Template->locationtraining=$objteam->location_training;
				$this->Template->streettraining=$objteam->street_training;
				$this->Template->ziptraining=$objteam->zipcode_training;
				$this->Template->citytraining=$objteam->city_training;
				$this->Template->countrytraining=$objteam->country_training;
				if($this->spoma_showlogo==1)
				{
					$this->Template->logo=$objFile->path;
				}
				else
				{
					$this->Template->logo='';
				}

			}
			else
			{
				$this->Template->team_found=0;
			}
			$this->Template->hasTeamid=$teamid;
			$this->Template->se_friendly=$this->spoma_se_friendly;
		}//if($teamid)
	}
}

