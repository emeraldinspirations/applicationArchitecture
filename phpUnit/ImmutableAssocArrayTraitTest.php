<?php

namespace emeraldinspirations\library\applicationArchitecture;

/**
 * @author Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
 */
class ImmutableAssocArrayTraitTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var DemoImmutableAssocArray
     */
    protected $object;
    const KEY1 = 'Key1';
    const KEY2 = 'Key2';
    protected $Array;

    protected function setUp()
    {
        $this->Array = [self::KEY1=>microtime()];
        $this->object = new DemoImmutableAssocArray($this->Array);
    }

    protected function tearDown()
    {
    }

    public function testConstruct() {

        $this->assertInstanceOf(
            DemoImmutableAssocArray::class,
            $this->object,
            'Fails when demo class doesn\'t load'
        );

        $this->assertInstanceOf(
            \ArrayAccess::class,
            $this->object,
            'Fails when demo class doesn\'t implement \\ArrayAccess'
        );

    }

    public function testCanBePreFilled()
    {

        $this->assertEquals(
            $this->Array,
            $this->object->toArray(),
            'Fails when demo class can not be passed an array as a constructor'
        );
    }


    public function testOffsetGetPass()
    {
        $this->assertEquals(
            $this->Array[self::KEY1],
            $this->object[self::KEY1],
            'Fails when offsetGet does not return the correct value'
        );
    }

    /**
     * Verifies offsetGet throws an exception when an invalid index is passed
     *
     * @expectedException     \OutOfBoundsException
     * @expectedExceptionCode 1487838058
     *
     * @return void
     */
    public function testOffsetGetFailInvalidIndex()
    {
        $this->object->offsetGet((string) microtime());
    }

    public function testIsSet()
    {

        $this->assertTrue(
            isset($this->object[self::KEY1]),
            'Fails when offsetExists does not return a value'
        );

        $this->assertFalse(
            isset($this->object[self::KEY2]),
            'Fails when offsetExists does not return the correct value'
        );

    }

    /**
     * @expectedException \LogicException
     * @expectedExceptionCode 1487415175
     */
    public function testIsReadOnly1()
    {

        $this->object[self::KEY2] = microtime();

    }

    /**
     * @expectedException \LogicException
     * @expectedExceptionCode 1487415510
     */
    public function testIsReadOnly2()
    {

        unset($this->object[self::KEY1]);

    }

}


class DemoImmutableAssocArray implements \ArrayAccess {
    use ImmutableAssocArrayTrait;

    public function __construct(array $Data)
    {
        $this->ImmutableAssocArray = $Data;
    }

}
