<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "bootstrap_package".
 *
 * Auto generated 03-02-2016 11:34
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Bootstrap Package',
  'description' => 'Bootstrap Package delivers a full configured frontend theme for TYPO3, based on the Bootstrap CSS Framework.',
  'category' => 'templates',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '6.2.14-7.99.99',
      'css_styled_content' => '6.2.0-7.99.99',
    ),
    'conflicts' => 
    array (
      'themes' => '*',
      'fluidpages' => '*',
      'dyncss' => '*',
    ),
    'suggests' => 
    array (
    ),
  ),
  'state' => 'stable',
  'uploadfolder' => false,
  'createDirs' => '',
  'clearCacheOnLoad' => 1,
  'author' => 'Benjamin Kott',
  'author_email' => 'info@bk2k.info',
  'author_company' => 'private',
  'version' => '6.2.15',
  'clearcacheonload' => true,
);

