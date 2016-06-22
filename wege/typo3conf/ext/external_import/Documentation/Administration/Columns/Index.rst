﻿.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt


.. _administration-columns:

Columns configuration
^^^^^^^^^^^^^^^^^^^^^

You also need an "external" syntax for each column to define
which external data goes into that column and any handling that might
apply. This is also an indexed array. Obviously indices used for each
column must relate to the indices used in the "ctrl" section. In its
simplest form this is just a reference to the external data's name:

.. code-block:: php

	'code' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:externalimport_tut/locallang_db.xml:tx_externalimporttut_departments.code',
		'config' => array(
			'type' => 'input',
			'size' => '10',
			'max' => '4',
			'eval' => 'required,trim',
		),
		'external' => array(
			0 => array(
				'field' => 'code'
			)
		)
	),

The properties for the columns configuration are described below.


.. _administration-columns-properties:

Properties
""""""""""

.. container:: ts-properties

	========================= ===================================================== =================
	Property                  Data type                                             Scope
	========================= ===================================================== =================
	attribute_                string                                                Handle data (XML)
	attributeNS_              string                                                Handle data (XML)
	disabledOperations_       string                                                Store data
	field_                    string                                                Handle data
	fieldNS_                  string                                                Handle data (XML)
	mapping_                  :ref:`Mapping configuration <administration-mapping>` Transform data
	MM_                       :ref:`MM configuration <administration-mm>`           Transform data
	rteEnabled_               boolean                                               Transform data
	trim_                     boolean                                               Transform data
	userFunc_                 array                                                 Transform data
	value_                    simple type (string, integer, boolean)                Transform data
	xmlValue_                 boolean                                               Handle data (XML)
	xpath_                    string                                                Handle data (XML)
	========================= ===================================================== =================


.. _administration-columns-properties-field:

field
~~~~~

Type
  string

Description
  Name or index of the field (or node, in the case of XML data) that
  contains the data in the external source.

  For array-type data, this information is mandatory. For XML-type data,
  it can be left out. In such a case, the value of the current node
  itself will be used, or an attribute of said node, if the
  :ref:`attribute <administration-columns-properties-attribute>`
  property is also defined.

Scope
  Handle data


.. _administration-columns-properties-attribute:

attribute
~~~~~~~~~

Type
  string

Description
   If the data is of type XML, use this property to retrieve the value
   from an attribute of the node rather than the value of the node itself.

   This applies to the node selected with the :ref:`field <administration-columns-properties-field>`
   property or to the current node if :ref:`field <administration-columns-properties-field>`
   is not defined.

Scope
  Handle data (XML)


.. _administration-columns-properties-xpath:

xpath
~~~~~

Type
  string

Description
  This property can be used to execute a XPath query relative to the
  node selected with the :ref:`field <administration-columns-properties-field>`
  property or (since version 2.3.0) directly on the current node
  if :ref:`field <administration-columns-properties-field>`
  is not defined.

  The value will be taken from the first node returned by the query.
  If the :ref:`attribute <administration-columns-properties-attribute>` property is
  also defined, it will be applied to the node returned by the XPath query.

  Please see the :ref:`namespaces <administration-general-tca-properties-namespaces>`
  property for declaring namespaces to use in a XPath query.

Scope
  Handle data (XML)


.. _administration-columns-properties-fieldns:

fieldNS
~~~~~~~

Type
  string

Description
   Namespace for the given field. Use the full URI for the namespace, not
   a prefix.

Scope
  Handle data (XML)


.. _administration-columns-properties-attributens:

attributeNS
~~~~~~~~~~~

Type
  string

Description
   Namespace for the given attribute. Use the full URI for the namespace,
   not a prefix.

Scope
  Handle data (XML)


.. _administration-columns-properties-mm:

MM
~~

Type
  :ref:`MM configuration <administration-mm>`

Description
   Definition of MM-relations, see :ref:`specific reference <administration-mm>`
   for more details.

Scope
  Transform data


.. _administration-columns-properties-mapping:

mapping
~~~~~~~

Type
  :ref:`Mapping configuration <administration-mapping>`

Description
  This property can be used to map values from the external data to
  values coming from some internal table. A typical example might be to
  match 2-letter country ISO codes to the uid of the "static\_countries"
  table.

Scope
  Transform data


.. _administration-columns-properties-value:

value
~~~~~

Type
  Simple type (string, integer, boolean)

Description
  With this property, it is possible to set a fixed value for a given
  field. For example, this might be used to set a flag for all imported
  records.

Scope
  Transform data


.. _administration-columns-properties-trim:

trim
~~~~

Type
  boolean

Description
  If set to :code:`TRUE`, every value for this column will be trimmed during the
  transformation step.

Scope
  Transform data


.. _administration-columns-properties-xmlvalue:

xmlValue
~~~~~~~~

Type
  boolean

Description
  When taking the value of a node inside a XML structure, the default behaviour
  is to retrieve this value as a string. If the node contained a XML sub-structure,
  its tags will be stripped. When setting this value to :code:`TRUE`, the XML
  structure of the child nodes is preserved.

Scope
  Handle data (XML)


.. _administration-columns-properties-rteenabled:

rteEnabled
~~~~~~~~~~

Type
  boolean

Description
  If set to :code:`TRUE` when importing HTML data into a RTE-enable field, the
  imported data will go through the usual RTE transformation process on
  the way to the database.

Scope
  Transform data


.. _administration-columns-properties-userfunc:

userFunc
~~~~~~~~

Type
  array

Description
  This property can be used to define a function that will be called on
  each record to transform the data from the given field. See example
  below.

  .. important::

     The user function is called **after** the mapping.

  **Example**

  Here is a sample setup referencing a user function:

  .. code-block:: php

		$GLOBALS['TCA']['fe_users']['columns']['starttime']['external'] = array(
				0 => array(
						'field' => 'start_date',
						'userFunc' => array(
								'class' => \Cobweb\ExternalImport\Task\DateTimeTransformation::class,
								'method' => 'parseDate'
						)
				)
		);

  A user function requires three parameters:

  class
    *(string)* Name of the class to be instantiated.

  method
    *(string)* Defines which method of the class should be called.

  params
    *(array)* Optional. Can contain any number of data, which will be passed
    to the method.

  In the example above we are using a sample class provided by
  External Import that can be used to parse a date and either return it
  as a timestamp or format it using either of the PHP functions
  :code:`date()` or :code:`strftime()` .

  For more details about creating a user function, please refer to the
  :ref:`Developer's Guide <developer>`.

Scope
  Transform data


.. _administration-columns-properties-disabledoperations:

disabledOperations
~~~~~~~~~~~~~~~~~~

Type
  array

Description
  Comma-separated list of database operations from which the column
  should be excluded. Possible values are "insert" and "update".

  See also the general property
  :ref:`disabledOperations <administration-general-tca-properties-disabledoperations>`.

Scope
  Store data
