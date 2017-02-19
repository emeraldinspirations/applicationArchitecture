<?php

namespace emeraldinspirations\library\applicationArchitecture;

/**
 * @author Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
 */
class ResponseModelTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ResponseModel
     */
    protected $object;

    const KEY1 = 'Key1';
    const KEY2 = 'Key2';
    protected $child1;
    protected $child2;

    public function setUp()
    {
        $this->child1 = $this->gererateDummyResponseData();
        $this->child2 = $this->gererateDummyResponseData();
        $this->object = new ResponseModel([self::KEY1 => $this->child1]);
    }

    public function testConstruct()
    {

        $this->assertInstanceOf(
            ResponseModel::class,
            $this->object,
            'Fails when class not established'
        );

        $this->assertInstanceOf(
            ResponseModelInterface::class,
            $this->object,
            'Fails when interface not set'
        );

        $this->assertSame(
            $this->child1,
            $this->object[self::KEY1],
            'Fails when constructor not implemented'
        );

    }

    public function gererateDummyResponseData() : ResponseDataInterface
    {
        return new class implements ResponseDataInterface {
            public function toArray() : array {}
            public function offsetExists ( $offset ) {}
            public function offsetGet ( $offset ) {}
            public function offsetSet ( $offset, $value ) {}
            public function offsetUnset ( $offset ) {}
        };
    }

    public function testDummyConstuctor() {

        $this->assertInstanceOf(
            ResponseDataInterface::class,
            $this->gererateDummyResponseData(),
            'Fails when dummy constructor not established'
        );

    }

    public function testWithData() {
        $Control = $this->object;

        $this->object = $this->object->withData($this->child2, self::KEY2);

        $this->assertNotSame(
            $Control,
            $this->object,
            'Fails if mutable'
        );

        $this->assertSame(
            $this->child1,
            $this->object[self::KEY1],
            'Fails if if data not preserved'
        );

        $this->assertSame(
            $this->child2,
            $this->object[self::KEY2],
            'Fails if new data not applied'
        );

    }

}
