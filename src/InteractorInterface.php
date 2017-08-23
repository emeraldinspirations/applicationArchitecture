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
 * Interactor interface
 *
 * An interactor is an action taken by the application.  Interactors accept as
 * constructors the necessary EntityGatewayInterface objects.  Once
 * constructed, the interactor is invoked by passing a
 * RequestModelInterface.  The interactor performs the specified action and
 * returns a ResponseModelInterface.
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
     * Preform the required action, then return a ResponseModelInterface
     *
     * @param RequestModelInterface The parameters for the requested action
     *
     * @return return ResponseModelInterface
     */
    function __invoke(
        RequestModelInterface $RequestModel
    ) : ResponseModelInterface;
    
}
