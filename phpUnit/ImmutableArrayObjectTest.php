<?php

/**
 * Containter for unit tests for Immutable ArrayObject
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
 * Unit tests for Immutable ArrayObject
 *
 * @category Library
 * @package  ApplicationArchitecture
 * @author   Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
 * @license  MIT ../LICENSE
 * @version  GIT: $Id$ In Development.
 * @link     https://github.com/emeraldinspirations/lib-applicationArchitecture
 */
class ImmutableArrayObjectTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Verify new object is constructable and extends \ArrayObject
     *
     * @return void
     */
    public function testConstruct()
    {

        $Object = new ImmutableArrayObject([]);

        $this->assertInstanceOf(
            ImmutableArrayObject::class,
            $Object,
            'Fails if class missing or not created'
        );

        $this->assertInstanceOf(
            \ArrayObject::class,
            $Object,
            'Fails if class does not extend ArrayObject'
        );

    }

}
