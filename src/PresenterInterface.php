<?php

namespace emeraldinspirations\library\applicationArchitecture;

interface PresenterInterface {

    function apply(
        ResponseModelInterface $ResponseModel,
        array $ToFields = []
    ) : ResponseModelInterface;

}
