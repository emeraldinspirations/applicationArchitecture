<?php

namespace emeraldinspirations\library\applicationArchitecture;

// TODO: Move into more appropriate namespace

interface ResponseModelInterface  extends \ArrayAccess
{
    function withData(ResponseDataInterface $Data) : ResponseModelInterface;

}
