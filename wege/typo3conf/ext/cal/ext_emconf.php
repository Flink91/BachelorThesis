<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "cal".
 *
 * Auto generated 16-06-2016 16:38
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Calendar Base',
  'description' => 'A calendar combining all the functions of the existing calendar extensions plus adding some new features. It is based on the ical standard',
  'category' => 'plugin',
  'version' => '1.10.3',
  'state' => 'stable',
  'uploadfolder' => false,
  'createDirs' => 'uploads/tx_cal/pics,uploads/tx_cal/ics,uploads/tx_cal/media',
  'clearCacheOnLoad' => 0,
  'author' => 'Mario Matzulla, Jeff Segars, Franz Koch, Thomas Kowtsch',
  'author_email' => 'mario@matzullas.de, jeff@webempoweredchurch.org, franz.koch@elements-net.de, typo3@thomas-kowtsch.de',
  'author_company' => '',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '6.1.0-7.9.99',
    ),
    'suggests' => 
    array (
      'css_styled_content' => '6.1.0-7.9.99',
    ),
    'conflicts' => 
    array (
    ),
  ),
  'clearcacheonload' => false,
);

