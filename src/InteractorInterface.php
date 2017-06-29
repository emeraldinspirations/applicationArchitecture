<?php

/**
 * Container for InteractorInterface
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
 * Interactor
 *
 * An interactor is an action taken by the application.  Interactors accept as
 * constructors an object implementing RequestModelInterface, and an object
 * implementing EntityGatewayInterface.  The Interactor then returns an object
 * implementing ResponseModelInterface.
 *
 * @category  Library
 * @package   ApplicationArchitecture
 * @author    Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
 * @copyright 2017 Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
 * @license   MIT ../LICENSE
 * @version   GIT: $Id:$ In Development.
 * @link      http://github.com/emeraldinspirations/lib-applicationArchitecture
 */
interface InteractorInterface
{
    /**
     * Return Request Model
     *
     * @return return RequestModelInterface
     */
    function getRequestModel() : RequestModelInterface;

    /**
     * Return Entity Gateway
     *
     * @return return EntityGatewayInterface
     */
    function getEntityGateway() : EntityGatewayInterface;

    /**
     * Return Response Model
     *
     * @return return ResponseModelInterface
     */
    function getResponseModel() : ResponseModelInterface;
}
