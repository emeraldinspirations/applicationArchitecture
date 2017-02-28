<?php

/**
 * Container for DataEntityInterface
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
 * An object that contains the data to be manipulated by the application
 *
 * @category  Library
 * @package   ApplicationArchitecture
 * @author    Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
 * @copyright 2017 Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
 * @license   MIT ../LICENSE.md
 * @version   GIT: $Id$ In Development.
 * @link      http://github.com/emeraldinspirations/lib-applicationArchitecture
 */
interface DataEntityInterface
{
    function toAssocArray() : AssocStringTreeInterface;
}
