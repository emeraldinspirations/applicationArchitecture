<?php

/**
 * Containter for AssocStringTreeInterface
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
 * In compliance with the Open/Closed principle of SOLID, classes that require
 * an associative array of strings in a hierarchical data structure should
 * require this interface as opposed to the supplied default implementation of
 * AssocStringTree.
 *
 * Unfortunately, there is no way in PHP 7 to provide a type-hint of more than
 * one type (ex: node/container).  So this interface is unable to enforce this 
 * requirement.
 *
 * @category Library
 * @package  ApplicationArchitecture
 * @author   Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
 * @license  MIT ../LICENSE
 * @version  Release: $Id$ In Development.
 * @link     https://github.com/emeraldinspirations/lib-applicationArchitecture
 */
interface AssocStringTreeInterface extends GenericAssocArrayInterface
{

    /**
     * Return the value of the supplied key, if type string
     *
     * @param string $Key The index requested
     *
     * @return string The value at the supplied index
     */
    function offsetGetString(string $Key) : string;

    /**
     * Return the value of the supplied key, if type AssocStringTreeInterface
     *
     * @param string $Key The index requested
     *
     * @return AssocStringTreeInterface The value at the supplied index
     */
    function offsetGetTree(string $Key) : AssocStringTreeInterface;

    /**
     * Return if the type value of the supplied key is string
     *
     * @param string $Key The index requested
     *
     * @return bool The value matches type string
     */
    function offsetIsString(string $Key) : bool;

    /**
     * Return if the type value of the supplied key is AssocStringTreeInterface
     *
     * @param string $Key The index requested
     *
     * @return bool The value matches type AssocStringTreeInterface
     */
    function offsetIsTree(string $Key) : bool;
}
