emeraldinspirations\library\applicationArchitecture\ImmutableArrayObject
===============

Immutable ArrayObject




* Class name: ImmutableArrayObject
* Namespace: emeraldinspirations\library\applicationArchitecture
* This class implements: [emeraldinspirations\library\applicationArchitecture\ArrayInterface](emeraldinspirations-library-applicationArchitecture-ArrayInterface.md)




Properties
----------


### $ArrayObject

    protected mixed $ArrayObject





* Visibility: **protected**


Methods
-------


### offsetSet

    void emeraldinspirations\library\applicationArchitecture\ImmutableArrayObject::offsetSet(string $Offset, mixed $Value)

Override offsetSet to throw exception, array is immutable

This function violates the Liskov substitution principle because PHP
currently does not have an Immutable version of `\ArrayObject` or the
`\ArrayAccess` interface.  It is a language construct that using
`ArrayObject[Offset] = Value` requires implementation of
`\ArrayAccess`.  Therefore, this function is a "hack" until PHP
implements a respective class.

Also, `\ArrayAccess` is pre PHP 7 and does not use type hinting.

* Visibility: **public**


#### Arguments
* $Offset **string** - &lt;p&gt;The key to be updated&lt;/p&gt;
* $Value **mixed** - &lt;p&gt;The value to set it to&lt;/p&gt;



### offsetUnset

    void emeraldinspirations\library\applicationArchitecture\ImmutableArrayObject::offsetUnset(string $Offset)

Override offsetUnset to throw exception, array is immutable

This function violates the Liskov substitution principle because PHP
currently does not have an Immutable version of `\ArrayObject` or the
`\ArrayAccess` interface.  It is a language construct that using
`unset()` requires implementation of `\ArrayAccess`.  Therefore, this
function is a "hack" until PHP implements a respective class.

Also, `\ArrayAccess` is pre PHP 7 and does not use type hinting.

* Visibility: **public**


#### Arguments
* $Offset **string** - &lt;p&gt;The key to be removed&lt;/p&gt;



### withOffsetSet

    \emeraldinspirations\library\applicationArchitecture\ImmutableArrayObject emeraldinspirations\library\applicationArchitecture\ImmutableArrayObject::withOffsetSet(string $Offset, mixed $Value)

Return clone with offset set (immutable version of offsetSet)



* Visibility: **public**


#### Arguments
* $Offset **string** - &lt;p&gt;The key to be updated&lt;/p&gt;
* $Value **mixed** - &lt;p&gt;The value to set it to&lt;/p&gt;



### withOffsetUnset

    \emeraldinspirations\library\applicationArchitecture\ImmutableArrayObject emeraldinspirations\library\applicationArchitecture\ImmutableArrayObject::withOffsetUnset(string $Offset)

Return clone with offset unset (immutable version of offsetUnset)



* Visibility: **public**


#### Arguments
* $Offset **string** - &lt;p&gt;The key to be removed&lt;/p&gt;



### getIterator

    \Traversable emeraldinspirations\library\applicationArchitecture\ImmutableArrayObject::getIterator()

Return iterator

Function not covered in Unit Test because it is a pass-through function

* Visibility: **public**




### count

    integer emeraldinspirations\library\applicationArchitecture\ImmutableArrayObject::count()

Return count of contents



* Visibility: **public**




### offsetExists

    boolean emeraldinspirations\library\applicationArchitecture\ImmutableArrayObject::offsetExists(string $Offset)

Return count of contents



* Visibility: **public**


#### Arguments
* $Offset **string** - &lt;p&gt;The key to verify exists&lt;/p&gt;



### offsetGet

    mixed emeraldinspirations\library\applicationArchitecture\ImmutableArrayObject::offsetGet(string $Offset)

Return the value at the spesified offset



* Visibility: **public**


#### Arguments
* $Offset **string** - &lt;p&gt;The key to retrueve&lt;/p&gt;



### __construct

    void emeraldinspirations\library\applicationArchitecture\ImmutableArrayObject::__construct(array $Array)

Create a new ImmutableArrayObject



* Visibility: **public**


#### Arguments
* $Array **array** - &lt;p&gt;Array of data to contain&lt;/p&gt;



### __clone

    void emeraldinspirations\library\applicationArchitecture\ImmutableArrayObject::__clone()

Clone child elements when ImmutableArrayObject is cloned



* Visibility: **public**



