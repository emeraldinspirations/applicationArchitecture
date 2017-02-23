<?php

namespace emeraldinspirations\library\applicationArchitecture;

trait ImmutableAssocArrayTrait
{

    protected $ImmutableAssocArray;

    public function offsetExists($Offset) : bool {
        return isset($this->ImmutableAssocArray[$Offset]);
    }

    /**
     * Returns the value at the requested index
     *
     * @param string|integer $Offset The index requested
     *
     * @return mixed The value at that index
     */
    public function offsetGet($Offset)
    {
        if (!isset($this->ImmutableAssocArray[$Offset])) {
            throw new \OutOfBoundsException(
                'Unable to locate index "'.$Offset.'"',
                1487838058
            );
        }
        return $this->ImmutableAssocArray[$Offset];
    }

    public function offsetSet($Offset, $Data) {
        throw new \LogicException(
            'Attempting to write to an immutable array',
            1487415175
        );
    }

    public function offsetUnset($Offset) {
        throw new \LogicException(
            'Attempting to write to an immutable array',
            1487415510
        );
    }

    public function toArray() : array {
        return $this->ImmutableAssocArray;
    }

}
