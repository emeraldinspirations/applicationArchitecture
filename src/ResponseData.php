<?php

namespace emeraldinspirations\library\applicationArchitecture;

class ResponseData implements ResponseDataInterface
{
    use ImmutableAssocArrayTrait;

    public function __construct(array $Data)
    {
        $this->ImmutableAssocArray = $Data;
    }

}
