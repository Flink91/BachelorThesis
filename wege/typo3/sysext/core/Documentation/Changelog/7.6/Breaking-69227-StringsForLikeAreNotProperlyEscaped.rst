============================================================
Breaking: #69227 - Strings for like are not properly escaped
============================================================

Description
===========

The following constants have been removed:

* ``\TYPO3\CMS\IndexedSearch\Controller\SearchFormController::WILDCARD_LEFT``
* ``\TYPO3\CMS\IndexedSearch\Controller\SearchFormController::WILDCARD_RIGHT``
* ``\TYPO3\CMS\IndexedSearch\Domain\Repository\IndexSearchRepository::WILDCARD_LEFT``
* ``\TYPO3\CMS\IndexedSearch\Domain\Repository\IndexSearchRepository::WILDCARD_RIGHT``


Impact
======

The mentioned constants don't exist anymore.


Affected Installations
======================

Third party code using the mentioned constants.


Migration
=========

Use the new constants:

* ``\TYPO3\CMS\IndexedSearch\Utility\LikeWildcard::LEFT``
* ``\TYPO3\CMS\IndexedSearch\Utility\LikeWildcard::RIGHT``