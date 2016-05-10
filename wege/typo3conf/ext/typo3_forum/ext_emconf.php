<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "typo3_forum".
 *
 * Auto generated 19-04-2016 08:38
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'typo3_forum',
  'description' => 'Forum extension',
  'category' => 'plugin',
  'author' => 'Mittwald CM Service',
  'author_email' => 'support@mittwald.de',
  'author_company' => 'Mittwald CM Service',
  'state' => 'stable',
  'uploadfolder' => false,
  'createDirs' => 'typo3temp/typo3_forum,typo3temp/typo3_forum/gravatar',
  'clearCacheOnLoad' => 0,
  'version' => '1.0.1',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '6.2.0-7.6.99',
      'static_info_tables' => '',
      'php' => '5.4',
    ),
    'suggests' => 
    array (
      'sr_feuser_register' => '',
    ),
    'conflicts' => 
    array (
    ),
  ),
  'clearcacheonload' => false,
);

