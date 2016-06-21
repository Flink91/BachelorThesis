﻿.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../Includes.txt


.. _installation:

Installation
------------

Installing this extension does nothing in and of itself. You still
need to extend the TCA definition of some tables with the appropriate
syntax and create specific connectors for the application you want to
connect to.

Automating the imports requires system extension "scheduler".

TYPO3 CMS 4.5 or above is required, as well as system extensions
"extbase" and "fluid".


.. _installation-compatibility:

Compatibility issues
^^^^^^^^^^^^^^^^^^^^


.. _installation-upgrade-200:

Upgrade to 2.0.0
""""""""""""""""

The column configuration "excludedOperations" has been renamed to
"disabledOperations", for consistency with the table configuration
option. The "excludedOperations" is preserved for now and will log an
entry into the deprecation log. You are advised to change the naming
of this configuration if you use it, support will be dropped at some
point in the future.


Other requirements
^^^^^^^^^^^^^^^^^^

As was mentioned in the introduction, this extension makes heavy use
of an extended syntax for the TCA. If you are not familiar with the
TCA, you are strongly advised to read up on it in the
:ref:`TCA Reference manual <t3tca:start>`.
