<?php
namespace PunktDe\PtExtbase\Utility\GenericShellCommandWrapper;

/***************************************************************
 *  Copyright (C) 2015 punkt.de GmbH
 *  Authors: el_equipo <opiuqe_le@punkt.de>
 *
 *  This script is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Lesser General Public License as published
 *  by the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Lesser General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

/**
 * Result
 *
 * @package PunktDe\PtExtbase\Utility\GenericShellCommandWrapper
 */
class ResultObjectStorage extends ObjectStorage implements ComponentInterface
{
    /**
     * @return array
     */
    public function toArray()
    {
        $array = array();
        $storage = array_values($this->storage);
        foreach ($storage as $item) {
            $object =  $item['obj'];  /** @var ComponentInterface $object */
            $array[] = $object->toArray();
        }
        return $array;
    }
}
