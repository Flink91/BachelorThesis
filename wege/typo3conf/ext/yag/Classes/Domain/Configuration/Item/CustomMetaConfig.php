<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2010-2013 Daniel Lienert <typo3@lienert.cc>, Michael Knoll <mimi@kaktsuteam.de>
*  All rights reserved
*
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * Configuration for custom item meta data
 *
 * @package Domain
 * @subpackage Configuration\Item
 * @author Daniel Lienert <typo3@lienert.cc>
 */
class Tx_Yag_Domain_Configuration_Item_CustomMetaConfig extends Tx_PtExtbase_Configuration_AbstractConfiguration
{
    /**
     * Name of this named resolution
     * 
     * @var string
     */
    protected $key;


    /**
     * @var string
     */
    protected $type = 'string';


    /**
     * @var string
     */
    protected $title;


    
    /**
     * Initializes properties
     */
    protected function init()
    {
        $this->setRequiredValue('key', 'No key was given for this item meta configuration! 1383693718');
        $this->setValueIfExistsAndNotNothing('title');
        $this->setValueIfExistsAndNotNothing('type');
    }



    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }



    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
}
