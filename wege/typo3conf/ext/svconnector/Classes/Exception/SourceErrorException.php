<?php
namespace Cobweb\Svconnector\Exception;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * Exception to throw when an error occurs when trying to access a source of data
 * (e.g. a file is not found, a database cannot be accessed, etc.).
 *
 * @package Cobweb\Svconnector\Exception
 */
class SourceErrorException extends ConnectorException
{
}