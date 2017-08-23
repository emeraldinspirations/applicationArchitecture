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
        $Return->offsetSet($Offset, $Value);
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
        $Return->offsetUnset($Offset);
        return $Return;
    }

}
