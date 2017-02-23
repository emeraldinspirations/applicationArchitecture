<?php

/**
 * Containter for AssocStringTreeTest
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
 * Test for AssocStringTree
 *
 * @category Library
 * @package  ApplicationArchitecture
 * @author   Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
 * @license  MIT ../LICENSE
 * @version  Release: $Id$ In Development.
 * @link     https://github.com/emeraldinspirations/lib-applicationArchitecture
 */
class AssocStringTreeTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Container for object to be tested
     *
     * @var AssocStringTree
     */
    protected $object;

    /**
     * Code ran before each test
     *
     * @return void
     */
    public function setUp()
    {
        $this->object = new AssocStringTree();
    }

    /**
     * Verify new object is creatable and inherits / implements as required
     *
     * @return void
     */
    public function testConstruct()
    {

        $this->assertInstanceOf(
            AssocStringTree::class,
            $this->object,
            'Fails if class missing or not created'
        );

        $this->assertInstanceOf(
            AssocStringTreeInterface::class,
            $this->object,
            'Fails if class does not implement AssocStringTreeInterface'
        );

        $this->assertInstanceOf(
            GenericAssocArrayInterface::class,
            $this->object,
            'Fails if class does not implement GenericAssocArrayInterface'
        );

    }

    /**
     * Verify class cannot assign element
     *
     * @return                void
     * @expectedException     \LogicException
     * @expectedExceptionCode 1487415175
     */
    public function testIsImmutableAssign()
    {
        $this->object['Key'] = 'Value';
    }


    /**
     * Verify class cannot assign element
     *
     * @expectedException     \LogicException
     * @expectedExceptionCode 1487415510
     *
     * @return void
     */
    public function testIsImmutableUnset()
    {
        unset($this->object['Key']);
    }

    const KEY_STRING = 'Key1';
    const KEY_OBJECT = 'Key2';

    /**
     * Generate a sample array to run through various tests
     *
     * @return array
     */
    protected function getTestData() : array
    {
        return [
            self::KEY_STRING=>(string) microtime(),
            self::KEY_OBJECT=>new AssocStringTree()
        ];
    }

    /**
     * Verify class can accept an array of strings and AssocStringTreeInterface
     * objects as a constructor
     *
     * @return void
     */
    public function testCanAcceptArray()
    {
        $TestData1 = $this->getTestData();

        $this->object = new AssocStringTree($TestData1);

        $this->assertSame(
            $TestData1[self::KEY_OBJECT],
            $this->object[self::KEY_OBJECT],
            'Fails if unable to pass array as constructor'
        );
    }


    /**
     * Verify class does not accept an array containing elements that are not
     * of the type of string or AssocStringTreeInterface.
     *
     * @expectedException     \InvalidArgumentException
     * @expectedExceptionCode 1487834592
     *
     * @return void
     */
    public function testCatchInvalidConstructor()
    {
        $TestData1 = [
            1
        ];

        $this->object = new AssocStringTree($TestData1);
    }

    /**
     * Verifies offsetGetString returns a string on a valid request
     *
     * @return void
     */
    public function testOffsetGetStringPass()
    {

        $TestData1 = $this->getTestData();

        $this->object = new AssocStringTree($TestData1);

        $this->assertEquals(
            $TestData1[self::KEY_STRING],
            $this->object->offsetGetString(self::KEY_STRING),
            'Fails if function doesn\'t exist, returns nothing or returns wrong'
            .' element'
        );
    }

    /**
     * Verifies offsetGetString throws an exception when an index of the wrong
     * type is requested.
     *
     * @expectedException \TypeError
     *
     * @return void
     */
    public function testOffsetGetStringFailWrongType()
    {

        $TestData1 = $this->getTestData();

        $this->object = new AssocStringTree($TestData1);

        $this->object->offsetGetString(self::KEY_OBJECT);
    }

    /**
     * Verifies offsetGet throws an exception when an invalid index is passed
     *
     * @expectedException     \OutOfBoundsException
     * @expectedExceptionCode 1487838058
     *
     * @return void
     */
    public function testOffsetGetStringFailInvalidIndex()
    {

        $TestData1 = $this->getTestData();

        $this->object = new AssocStringTree($TestData1);

        $this->object->offsetGetString((string) microtime());
    }

    /**
     * Verifies offsetIsString returns a valid value
     *
     * @return void
     */
    public function testOffsetIsString()
    {

        $TestData1 = $this->getTestData();

        $this->object = new AssocStringTree($TestData1);

        $this->assertTrue(
            $this->object->offsetIsString(self::KEY_STRING),
            'Fails if function not implemented'
        );

        $this->assertFalse(
            $this->object->offsetIsString(self::KEY_OBJECT),
            'Fails if function always returns TRUE'
        );

        $this->assertFalse(
            $this->object->offsetIsString((string) microtime()),
            'Fails if function errors when index not found'
        );
    }

    /**
     * Verifies offsetGetTree returns a AssocStringTreeInterface on a valid
     * request
     *
     * @return void
     */
    public function testOffsetGetTreePass()
    {

        $TestData1 = $this->getTestData();

        $this->object = new AssocStringTree($TestData1);

        $this->assertSame(
            $TestData1[self::KEY_OBJECT],
            $this->object->offsetGetTree(self::KEY_OBJECT),
            'Fails if function doesn\'t exist, returns nothing or returns wrong'
            .' element'
        );

    }

    /**
     * Verifies offsetGetString throws an exception when an index of the wrong
     * type is requested.
     *
     * @expectedException \TypeError
     *
     * @return void
     */
    public function testOffsetGetTreeFailWrongType()
    {

        $TestData1 = $this->getTestData();

        $this->object = new AssocStringTree($TestData1);

        $this->object->offsetGetTree(self::KEY_STRING);
    }

    /**
     * Verifies offsetGet throws an exception when an invalid index is passed
     *
     * @expectedException     \OutOfBoundsException
     * @expectedExceptionCode 1487838058
     *
     * @return void
     */
    public function testOffsetGetTreeFailInvalidIndex()
    {

        $TestData1 = $this->getTestData();

        $this->object = new AssocStringTree($TestData1);

        $this->object->offsetGetTree((string) microtime());
    }

    /**
     * Verifies offsetIsTree returns a valid value
     *
     * @return void
     */
    public function testOffsetIsTree()
    {

        $TestData1 = $this->getTestData();

        $this->object = new AssocStringTree($TestData1);

        $this->assertTrue(
            $this->object->offsetIsTree(self::KEY_OBJECT),
            'Fails if function not implemented'
        );

        $this->assertFalse(
            $this->object->offsetIsTree(self::KEY_STRING),
            'Fails if function always returns TRUE'
        );

        $this->assertFalse(
            $this->object->offsetIsTree((string) microtime()),
            'Fails if function errors when index not found'
        );
    }

    /**
     * Verifies that the toArray function is overridden to explode child
     * AssocStringTreeInterface objects.
     *
     * @return void
     */
    public function testToArray()
    {

        $TestData1 = $this->getTestData();

        $this->object = new AssocStringTree($TestData1);

        $this->assertEquals(
            [
                self::KEY_STRING=>$TestData1[self::KEY_STRING],
                self::KEY_OBJECT=>[]
            ],
            $this->object->toArray(),
            'Fails if function does not explode child AssocStringTreeInterface'
            .' objects.'
        );
    }
}
