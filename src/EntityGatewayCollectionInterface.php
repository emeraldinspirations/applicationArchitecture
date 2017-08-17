<?php

/**
 * Container for collection of EntityGateway interfaces interface
 *
 * PHP Version 7
 *
 * @category  Library
 * @package   ApplicationArchitecture
 * @author    Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
 * @copyright 2017 Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
 * @license   MIT ../LICENSE.md
 * @link      http://github.com/emeraldinspirations/lib-applicationArchitecture
 */

namespace emeraldinspirations\library\applicationArchitecture;

/**
 * Collection of EntityGateway interfaces interface
 *
 * @category  Library
 * @package   ApplicationArchitecture
 * @author    Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
 * @copyright 2017 Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
 * @license   MIT ../LICENSE.md
 * @version   GIT: $Id$ In Development.
 * @link      http://github.com/emeraldinspirations/lib-applicationArchitecture
 */
interface EntityGatewayCollectionInterface
{

    /**
     * Return object implementing EntryGateway interface per interface name
     *
     * @param string $GatewayName Interface Name of the EntryGateway
     *
     * @return EntityGatewayInterface
     */
    function getGateway(string $GatewayName) : EntityGatewayInterface;

}
