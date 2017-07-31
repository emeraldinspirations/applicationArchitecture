<?php

/**
 * Container for Request Model
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
 * The request data from CLI or HTTP request
 *
 * A Request Model is an object containing all the information about the
 * HTTP or CLI request.  The Request Model is then passed through several
 * stages:
 * * The respective Common Entry Point (cep) script creates the inital Request
 *   Object and populates the Boundry property
 * * The config script populates the various settings and entity gateways
 * * A Request Parser populates the details of the request
 *
 * At each stage above a new derived immutable object is created including the
 * additinal data.  Once fully populated, the Request Model is then used as a
 * parameter of the __invoke() function of the requested Interactor
 *
 * @category  Library
 * @package   ApplicationArchitecture
 * @author    Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
 * @copyright 2017 Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
 * @license   MIT ../LICENSE
 * @version   GIT: $Id:$ In Development.
 * @link      http://github.com/emeraldinspirations/lib-applicationArchitecture
 */
class RequestModel implements RequestModelInterface
{

    /**
     * Build a new request model object
     *
     * @return void
     */
    public function __construct()
    {
    }

}
