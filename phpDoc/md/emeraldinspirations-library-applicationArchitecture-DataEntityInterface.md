emeraldinspirations\library\applicationArchitecture\DataEntityInterface
===============

An object that contains the data to be manipulated by the application




* Interface name: DataEntityInterface
* Namespace: emeraldinspirations\library\applicationArchitecture
* This is an **interface**






Methods
-------


### toAssocArray

    \emeraldinspirations\library\applicationArchitecture\AssocStringTreeInterface emeraldinspirations\library\applicationArchitecture\DataEntityInterface::toAssocArray()

Extract data into associative array



* Visibility: **public**




### withAssocArray

    \emeraldinspirations\library\applicationArchitecture\DataEntityInterface emeraldinspirations\library\applicationArchitecture\DataEntityInterface::withAssocArray(\emeraldinspirations\library\applicationArchitecture\AssocStringTreeInterface $Data)

Create new entity with data from associative array

PHP does not yet allow static functions in interfaces.  If it did, this
function would be fromAssocArray.  "With" follows the immutable model
and is the closest implementation that can be done in an interface.

* Visibility: **public**


#### Arguments
* $Data **emeraldinspirations\library\applicationArchitecture\AssocStringTreeInterface** - &lt;p&gt;Data to populate new entity&lt;/p&gt;


