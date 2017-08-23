<?php

/**
 * Containter for Array interface
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
 * Array interface
 *
 * In order to use `for` ... `each`, `count`, or `ArrayObject[Offset]` in PHP
 * an object must implement `\IteratorAggregate` (which covers `\Traversable`),
 * `\Countable`, and `\ArrayAccess` respectively.  This interface condenses
 * these requirements into 1 implements statement.
 *
 * The \ArrayObject class also implements \Serializable, however there is no
 * need to implement this in this interface as it is not used in
 * emeraldinspirations/lib-applicationarchitecture
 *
 * @category Library
 * @package  ApplicationArchitecture
 * @author   Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
 * @license  MIT ../LICENSE
 * @version  GIT: $Id$ In Development.
 * @link     https://github.com/emeraldinspirations/lib-applicationArchitecture
 */
interface ArrayInterface extends \IteratorAggregate, \Countable, \ArrayAccess
{

}
