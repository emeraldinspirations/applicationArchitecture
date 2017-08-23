emeraldinspirations\library\applicationArchitecture\ArrayInterface
===============

Array interface

In order to use `for` ... `each`, `count`, or `ArrayObject[Offset]` in PHP
an object must implement `\IteratorAggregate` (which covers `\Traversable`),
`\Countable`, and `\ArrayAccess` respectively.  This interface condenses
these requirements into 1 implements statement.

The \ArrayObject class also implements \Serializable, however there is no
need to implement this in this interface as it is not used in
emeraldinspirations/lib-applicationarchitecture


* Interface name: ArrayInterface
* Namespace: emeraldinspirations\library\applicationArchitecture
* This is an **interface**
* This interface extends: IteratorAggregate, Countable, ArrayAccess






