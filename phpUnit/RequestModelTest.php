<?php

/**
 * Container for Request Model unit tests
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
use emeraldinspirations\library\applicationArchitecture\RequestModelInterface;
// use emeraldinspirations\library\applicationArchitecture\RequestModelInterface;

/**
 * Request Model unit tests
 *
 * @category  Library
 * @package   ApplicationArchitecture
 * @author    Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
 * @copyright 2017 Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
 * @license   MIT ../LICENSE
 * @version   GIT: $Id:$ In Development.
 * @link      http://github.com/emeraldinspirations/lib-applicationArchitecture
 */
class RequestModelTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Verify object constructs
     *
     * @return void
     */
    public function testConstruct()
    {
        $object = new RequestModel();

        $this->assertInstanceOf(
            RequestModel::class,
            $object,
            'Fails if class doesn\'t exist'
        );

        $this->assertInstanceOf(
            RequestModelInterface::class,
            $object,
            'Fails if class doesn\'t implement ResponseModelInterface'
        );

    }

}
