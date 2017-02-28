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
class DataEntityInterfaceTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Verify no parse or fatal errors with DataEntityInterface
     *
     * @return null
     */
    public function testImplementation()
    {
        $this->assertInstanceOf(
            DataEntityInterface::class,
            new DummyDataEntity(),
            'Fails if DataEntityInterface not implemented correctly'
        );
    }

}

/**
 * Test implementation of DataEntityInterface
 *
 * @category Library
 * @package  ApplicationArchitecture
 * @author   Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
 * @license  MIT ../LICENSE
 * @version  Release: $Id$ In Development.
 * @link     https://github.com/emeraldinspirations/lib-applicationArchitecture
 */
class DummyDataEntity implements DataEntityInterface
{

    /**
     * Dummy Implementation
     *
     * @return AssocStringTreeInterface
     */
    function toAssocArray() : AssocStringTreeInterface
    {

    }

    /**
     * Dummy Implementation
     *
     * @param AssocStringTreeInterface $Data Data to populate new entity
     *
     * @return self New data entity
     */
    function withAssocArray(
        AssocStringTreeInterface $Data
    ) : DataEntityInterface {

    }
}
