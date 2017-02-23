<?php

/**
 * Container for AssocStringTree
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
 * An immutable array that contains only strings and other
 * AssocStringTreeInterface objects.
 *
 * @category Library
 * @package  ApplicationArchitecture
 * @author   Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
 * @license  MIT ../LICENSE
 * @version  Release: $Id$ In Development.
 * @link     http://github.com/emeraldinspirations/lib-applicationArchitecture
 * @see      GenericAssocArrayInterface Interface class implements
 */
class AssocStringTree implements AssocStringTreeInterface
{
    use ImmutableAssocArrayTrait;

    /**
     * Create new AssocStringTree object
     *
     * @param array $Data Assoc array of data for new object to contain.  MUST
     *                    be an associative array containing ONLY elements of
     *                    the datatypes string or AssocStringTreeInterface.
     */
    public function __construct(array $Data = [])
    {
        foreach ($Data as $Datum) {
            if (! $Datum instanceof AssocStringTreeInterface
                and ! is_string($Datum)
            ) {
                throw new \InvalidArgumentException(
                    'All elements of the supplied array MUST be of type string'
                    . ' or implement AssocStringTreeInterface',
                    1487834592
                );
            }
        }
        $this->ImmutableAssocArray = $Data;
    }

    /**
     * Return the value of the supplied key, if type string
     *
     * @param string $Key The index requested
     *
     * @return string The value at the supplied index
     */
    public function offsetGetString(string $Key) : string
    {
        return $this->offsetGet($Key);
    }

    /**
     * Return the value of the supplied key, if type AssocStringTreeInterface
     *
     * @param string $Key The index requested
     *
     * @return AssocStringTreeInterface The value at the supplied index
     */
    public function offsetGetTree(string $Key) : AssocStringTreeInterface
    {
        return $this->offsetGet($Key);
    }

    /**
     * Return if the type value of the supplied key is string
     *
     * @param string $Key The index requested
     *
     * @return bool The value matches type string
     */
    public function offsetIsString(string $Key) : bool
    {
        return isset($this->ImmutableAssocArray[$Key])
            ? is_string($this->ImmutableAssocArray[$Key])
            : false;
    }

    /**
     * Return if the type value of the supplied key is AssocStringTreeInterface
     *
     * @param string $Key The index requested
     *
     * @return bool The value matches type AssocStringTreeInterface
     */
    public function offsetIsTree(string $Key) : bool
    {
        return isset($this->ImmutableAssocArray[$Key])
            ? $this->ImmutableAssocArray[$Key]
                instanceof AssocStringTreeInterface
            : false;
    }

}
