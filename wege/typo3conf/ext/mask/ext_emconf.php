<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "mask".
 *
 * Auto generated 10-05-2016 09:09
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Mask',
  'description' => 'Create your own content elements and page templates. Easy to use, even without programming skills because of the comfortable drag&drop system. Stored in structured database tables. Style your frontend with Fluid tags. Ideal, if you want to switch from Templavoila.',
  'category' => 'plugin',
  'author' => 'WEBprofil - Gernot Ploiner e.U.',
  'author_email' => 'office@webprofil.at',
  'author_company' => 'WEBprofil - Gernot Ploiner e.U.',
  'state' => 'stable',
  'uploadfolder' => false,
  'createDirs' => '',
  'clearCacheOnLoad' => 1,
  'version' => '1.1.4',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '6.2.0-7.6.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
      'gridelements' => '',
    ),
  ),
  'autoload' => 
  array (
    'psr-4' => 
    array (
      'MASK\\Mask\\' => 'Classes/',
    ),
  ),
  'clearcacheonload' => true,
);

