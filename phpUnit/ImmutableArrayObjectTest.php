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

    /**
     * Verify offset is settable through WITH function (immutable pattern)
     *
     * @return void
     */
    public function testWithOffsetSet()
    {
        $KeyChanged    = 'KeyChanged';
        $KeyMaintained = 'KeyMaintained';
        $ValueUpdated  = 'NewValue';
        $Object        = new ImmutableArrayObject(
            [
                $KeyMaintained=>'ValueMaintained',
                $KeyChanged=>'OriginalValue',
            ]
        );

        $ObjectClone = $Object->withOffsetSet($KeyChanged, $ValueUpdated);
        // Fails if function not defined

        $this->assertInstanceOf(
            ImmutableArrayObject::class,
            $ObjectClone,
            'Fails if non ImmutableArrayObject returned'
        );

        $this->assertTrue(
            $ObjectClone->offsetExists($KeyMaintained),
            'Fails if data not maintained'
        );

        $this->assertNotSame(
            $Object,
            $ObjectClone,
            'Fails if object not cloned'
        );

        $this->assertEquals(
            $ValueUpdated,
            $ObjectClone->offsetGet($KeyChanged),
            'Fails if offset not updated'
        );

    }

}
