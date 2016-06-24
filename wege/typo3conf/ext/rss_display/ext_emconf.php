<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "rss_display".
 *
 * Auto generated 23-06-2016 20:27
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'RSS Feed Display',
  'description' => 'Fetch a RSS / Atom Feed and display its content on the Frontend.',
  'category' => 'plugin',
  'version' => '3.0.1',
  'state' => 'stable',
  'author' => 'Fabien Udriot',
  'author_email' => 'fabien.udriot@ecodev.ch',
  'author_company' => 'Ecodev',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '6.2.0-7.99.99',
      'fluid' => '',
      'extbase' => '',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
  'uploadfolder' => true,
  'createDirs' => NULL,
  'clearcacheonload' => true,
);

