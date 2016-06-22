<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "svconnector_csv".
 *
 * Auto generated 22-06-2016 14:04
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Connector service - CSV',
  'description' => 'Connector service for reading a CSV or similar flat file',
  'category' => 'services',
  'version' => '2.0.0',
  'state' => 'stable',
  'uploadfolder' => true,
  'createDirs' => '',
  'clearcacheonload' => false,
  'author' => 'Francois Suter (Cobweb)',
  'author_email' => 'typo3@cobweb.ch',
  'author_company' => '',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '7.6.0-7.99.99',
      'svconnector' => '3.0.0-0.0.0',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
);

