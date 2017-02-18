<?php

namespace emeraldinspirations\library\applicationArchitecture;

/**
 * @author Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
 */
class ResponseDataTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ResponseData
     */
    protected $object;

    public function testConstruct() {
        $Data = ['Key'=>microtime()];
        $this->object = new ResponseData($Data);

        $this->assertInstanceOf(
            ResponseData::class,
            $this->object,
            'Fails when class doesn\'t exist'
        );

        $this->assertInstanceOf(
            ResponseDataInterface::class,
            $this->object,
            'Fails when class doesn\'t implement interface'
        );

        $this->assertEquals(
            $Data,
            $this->object->toArray(),
            'Fails when class doesn\'t set the array to the correct variable'
        );
    }

}
