<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "external_import".
 *
 * Auto generated 21-06-2016 12:57
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'External Data Import',
  'description' => 'Tool for importing data from external sources into the TYPO3 database, using an extended TCA syntax. Provides a BE module, a Scheduler task and an API.',
  'category' => 'module',
  'version' => '2.5.1',
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
      'svconnector' => '2.0.0-0.0.0',
      'extbase' => '1.3.0-0.0.0',
      'fluid' => '1.3.0-0.0.0',
      'typo3' => '4.5.0-6.2.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
);

