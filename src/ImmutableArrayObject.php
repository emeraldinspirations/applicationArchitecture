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
class ImmutableArrayObject extends \ArrayObject
{

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
        $Return = $this->getArrayCopy();
        $Return[$Offset] = $Value;
        return new self($Return);
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
        $Return = $this->getArrayCopy();
        unset($Return[$Offset]);
        return new self($Return);
    }

}
