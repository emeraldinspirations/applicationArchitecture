<?php declare(strict_types=1);

/**
 * Containter for Immutable ArrayObject
 *
 * PHP Version 7
 *
 * @category  Library
 * @package   ApplicationArchitecture
 * @author    Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
 * @copyright 2017 Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
 * @license   MIT ../LICENSE
 * @link      http://github.com/emeraldinspirations/lib-applicationArchitecture
 */
namespace emeraldinspirations\library\applicationArchitecture;

/**
 * Immutable ArrayObject
 *
 * @category Library
 * @package  ApplicationArchitecture
 * @author   Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
 * @license  MIT ../LICENSE
 * @version  GIT: $Id$ In Development.
 * @link     https://github.com/emeraldinspirations/lib-applicationArchitecture
 */
class ImmutableArrayObject implements ArrayInterface
{

    protected $ArrayObject;

    /**
     * Override offsetSet to throw exception, array is immutable
     *
     * This function violates the Liskov substitution principle because PHP
     * currently does not have an Immutable version of `\ArrayObject` or the
     * `\ArrayAccess` interface.  It is a language construct that using
     * `ArrayObject[Offset] = Value` requires implementation of
     * `\ArrayAccess`.  Therefore, this function is a "hack" until PHP
     * implements a respective class.
     *
     * Also, `\ArrayAccess` is pre PHP 7 and does not use type hinting.
     *
     * @param string $Offset The key to be updated
     * @param mixed  $Value  The value to set it to
     *
     * @see \ArrayObject::offsetSet Overriden function
     *
     * @return void
     */
    public function offsetSet($Offset, $Value)
    {
        throw new \LogicException(
            'Unable to write to an immutable array, use withOffsetSet',
            1487415175
        );
    }

    /**
     * Override offsetUnset to throw exception, array is immutable
     *
     * This function violates the Liskov substitution principle because PHP
     * currently does not have an Immutable version of `\ArrayObject` or the
     * `\ArrayAccess` interface.  It is a language construct that using
     * `unset()` requires implementation of `\ArrayAccess`.  Therefore, this
     * function is a "hack" until PHP implements a respective class.
     *
     * Also, `\ArrayAccess` is pre PHP 7 and does not use type hinting.
     *
     * @param string $Offset The key to be removed
     *
     * @see \ArrayObject::offsetUnset Overriden function
     *
     * @return void
     */
    public function offsetUnset($Offset)
    {
        throw new \LogicException(
            'Unable to remove from an immutable array, use withOffsetUnset',
            1487415510
        );
    }

    /**
     * Return clone with offset set (immutable version of offsetSet)
     *
     * @param string $Offset The key to be updated
     * @param mixed  $Value  The value to set it to
     *
     * @see \ArrayObject::offsetSet
     *
     * @return self The updated clone
     */
    public function withOffsetSet(string $Offset, $Value) : self
    {
        $Return = clone $this;
        $Return->ArrayObject[$Offset] = $Value;
        return $Return;
    }

    /**
     * Return clone with offset unset (immutable version of offsetUnset)
     *
     * @param string $Offset The key to be removed
     *
     * @see \ArrayObject::offsetUnset
     *
     * @return self The updated clone
     */
    public function withOffsetUnset(string $Offset) : self
    {
        $Return = clone $this;
        unset($Return->ArrayObject[$Offset]);
        return $Return;
    }

    /**
     * Return iterator
     *
     * Function not covered in Unit Test because it is a pass-through function
     *
     * @codeCoverageIgnore Function not covered in Unit Test because it is a
     *                     pass-through function
     * @see                \ArrayObject::getIterator Pass through
     *
     * @return \Traversable
     */
    public function getIterator()
    {
        return $this->ArrayObject->getIterator();
    }

    /**
     * Return count of contents
     *
     * @return integer
     */
    public function count()
    {
        return $this->ArrayObject->count();
    }

    /**
     * Return count of contents
     *
     * @param string $Offset The key to verify exists
     *
     * @codeCoverageIgnore Function not covered in Unit Test because it is a
     *                     pass-through function
     * @see                \ArrayObject::offsetExists Pass through
     *
     * @return bool
     */
    public function offsetExists($Offset)
    {
        return $this->ArrayObject->offsetExists($Offset);
    }

    /**
     * Return the value at the spesified offset
     *
     * @param string $Offset The key to retrueve
     *
     * @codeCoverageIgnore Function not covered in Unit Test because it is a
     *                     pass-through function
     * @see                \ArrayObject::offsetGet Pass through
     *
     * @return mixed
     */
    public function offsetGet($Offset)
    {
        return $this->ArrayObject->offsetGet($Offset);
    }

    /**
     * Create a new ImmutableArrayObject
     *
     * @param array $Array Array of data to contain
     *
     * @return void
     */
    public function __construct(array $Array)
    {
        $this->ArrayObject = new \ArrayObject($Array);
    }

    /**
     * Clone child elements when ImmutableArrayObject is cloned
     *
     * @return void
     */
    public function __clone()
    {
        $this->ArrayObject = clone $this->ArrayObject;
    }

    /**
     * Return a copy of the ArrayObject as an array
     *
     * @return array
     */
    public function getArrayCopy() : array
    {
        return $this->ArrayObject->getArrayCopy();
    }

}
