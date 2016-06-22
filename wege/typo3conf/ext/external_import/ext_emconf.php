<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "external_import".
 *
 * Auto generated 22-06-2016 13:43
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'External Data Import',
  'description' => 'Tool for importing data from external sources into the TYPO3 database, using an extended TCA syntax. Provides a BE module, a Scheduler task and an API.',
  'category' => 'module',
  'version' => '3.0.0',
  'state' => 'stable',
  'uploadfolder' => true,
  'createDirs' => '',
  'clearcacheonload' => true,
  'author' => 'Francois Suter (Cobweb)',
  'author_email' => 'typo3@cobweb.ch',
  'author_company' => '',
  'constraints' => 
  array (
    'depends' => 
    array (
      'svconnector' => '3.0.0-0.0.0',
      'typo3' => '7.6.0-7.99.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
);

