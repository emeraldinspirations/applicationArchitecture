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
 * Request to the application
 *
 * A Request Model is an array object containing all the parameters for the
 * request to the application.  It is "delivery mechanism agnostic" i.e. it
 * contains absolutely no information about the web or the command line or
 * whatever interface is being used.  It is also locale and language agnostic,
 * containing only value objects and strings.  
 *
 * @category  Library
 * @package   ApplicationArchitecture
 * @author    Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
 * @copyright 2017 Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
 * @license   MIT ../LICENSE
 * @version   GIT: $Id:$ In Development.
 * @link      http://github.com/emeraldinspirations/lib-applicationArchitecture
 */
interface RequestModelInterface extends ArrayInterface
{

}
