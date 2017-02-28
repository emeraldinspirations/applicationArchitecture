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

    /**
     * Extract data into associative array
     *
     * @return AssocStringTreeInterface
     */
    function toAssocArray() : AssocStringTreeInterface;

    /**
     * Create new entity with data from associative array
     *
     * PHP does not yet allow static functions in interfaces.  If it did, this
     * function would be fromAssocArray.  "With" follows the immutable model
     * and is the closest implementation that can be done in an interface.
     *
     * @param AssocStringTreeInterface $Data Data to populate new entity
     *
     * @return self New data entity
     */
    function withAssocArray(AssocStringTreeInterface $Data) : self;

}
