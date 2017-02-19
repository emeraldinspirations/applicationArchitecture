<?php

namespace emeraldinspirations\library\applicationArchitecture;

/**
 * @author Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
 */
class ResponseModel implements ResponseModelInterface
{
    use ImmutableAssocArrayTrait;

    public function withData(
        ResponseDataInterface $Data,
        string $Key
    ) : ResponseModelInterface {
        $Return = clone $this;
        $Return->ImmutableAssocArray[$Key] = $Data;
        return $Return;
    }

    public function __construct(array $Data)
    {
        $this->ImmutableAssocArray = $Data;
    }
}
