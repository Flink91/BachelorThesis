<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2010-2011 punkt.de GmbH - Karlsruhe, Germany - http://www.punkt.de
 *  Authors: Daniel Lienert, Michael Knoll, Christoph Ehscheidt
 *  All rights reserved
 *
 *  For further information: http://extlist.punkt.de <extlist@punkt.de>
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
 * column config collection
 * @author Daniel Lienert
 * @package 		Domain
 * @subpackage 	Configuration\Columns
 * @see Tx_PtExtlist_Tests_Domain_Configuration_Columns_ColumnConfigCollectionTest
 */
class Tx_PtExtlist_Domain_Configuration_Columns_ColumnConfigCollection extends Tx_PtExtbase_Collection_ObjectCollection
{
    /**
     * @var string
     */
    protected $restrictedClassName = 'Tx_PtExtlist_Domain_Configuration_Columns_ColumnConfig';


    /**
     * @var array
     */
    protected $identifierToIdMap = array();



    /**
     * @param $columnNumber
     * @param Tx_PtExtlist_Domain_Configuration_Columns_ColumnConfig $columnConfig Tx_PtExtlist_Domain_Configuration_Columns_ColumnConfig
     * @return void
     */
    public function addColumnConfig($columnNumber, Tx_PtExtlist_Domain_Configuration_Columns_ColumnConfig $columnConfig)
    {
        $this->addItem($columnConfig, $columnNumber);
        $this->identifierToIdMap[$columnConfig->getColumnIdentifier()] = $columnNumber;
    }



    /**
     * @param integer $id
     * @throws Exception
     * @return Tx_PtExtlist_Domain_Configuration_Columns_ColumnConfig
     */
    public function getColumnConfigById($id)
    {
        if ($this->hasItem($id)) {
            return $this->getItemById($id);
        } else {
            throw new Exception('The column with id ' . $id . ' does not exist! 1280309838');
        }
    }



    /**
     * Checks if an identifier is in the column
     * @param $identifier
     * @return bool
     */
    public function hasIdentifier($identifier)
    {
        return array_key_exists($this->identifierToIdMap[$identifier], $this->itemsArr);
    }



    /**
     * @param string $identifier
     * @throws Exception
     * @return Tx_PtExtlist_Domain_Configuration_Columns_ColumnConfig
     */
    public function getColumnConfigByIdentifier($identifier)
    {
        if (array_key_exists($identifier, $this->identifierToIdMap)) {
            return $this->getColumnConfigById($this->identifierToIdMap[$identifier]);
        } else {
            throw new Exception('The column with identifier ' . $identifier . ' does not exist! 1320052358');
        }
    }
}
