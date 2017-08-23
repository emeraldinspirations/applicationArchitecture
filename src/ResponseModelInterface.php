<?php

/**
 * Container for Response Model
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
 * The response from application
 *
 * A Response Model is an array object containing the response from the
 * application.  It is "delivery mechanism agnostic" i.e. it is not specific to
 * the web or the command line or whatever interface is being used.  It is also
 * locale and language agnostic, containing value objects that are later
 * converted into human-readable information.
 *
 * @category  Library
 * @package   ApplicationArchitecture
 * @author    Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
 * @copyright 2017 Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
 * @license   MIT ../LICENSE
 * @version   GIT: $Id:$ In Development.
 * @link      http://github.com/emeraldinspirations/lib-applicationArchitecture
 */
interface ResponseModelInterface extends ArrayInterface
{

}
