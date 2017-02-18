<?php

namespace emeraldinspirations\library\applicationArchitecture;

trait ImmutableAssocArrayTrait
{

    protected $ImmutableAssocArray;

    public function offsetExists($Offset) : bool {
        return isset($this->ImmutableAssocArray[$Offset]);
    }

    public function offsetGet($Offset) {
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
