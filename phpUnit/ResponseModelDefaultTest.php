<?php

/**
 * Containter for unit tests for default Response Model object
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
 * Unit tests for default Response Model object
 *
 * @category Library
 * @package  ApplicationArchitecture
 * @author   Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
 * @license  MIT ../LICENSE
 * @version  GIT: $Id$ In Development.
 * @link     https://github.com/emeraldinspirations/lib-applicationArchitecture
 */
class ResponseModelDefaultTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Verify new object is constructable and extends \ArrayObject
     *
     * @return void
     */
    public function testConstruct()
    {

        $this->assertInstanceOf(
            ResponseModelDefault::class,
            $Object = new ResponseModelDefault([]),
            'Fails if class not defined'
        );

        $this->assertInstanceOf(
            ImmutableArrayObject::class,
            $Object,
            'Fails if class does not extend ImmutableArrayObject'
        );

        $this->assertInstanceOf(
            ResponseModelInterface::class,
            $Object,
            'Fails if class does not implement ResponseModelInterface'
        );

    }

}
