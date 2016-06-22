<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "externalimport_tut".
 *
 * Auto generated 22-06-2016 15:12
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'External Import Tutorial',
  'description' => 'Tutorial for the External Import extension. Contains the manual and the necessary files.',
  'category' => 'example',
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
      'external_import' => '3.0.0-0.0.0',
      'svconnector_csv' => '2.0.0-0.0.0',
      'svconnector_feed' => '2.0.0-0.0.0',
      'news' => '2.3.0-0.0.0',
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

