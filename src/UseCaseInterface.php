<?php

namespace emeraldinspirations\library\applicationArchitecture;

// Indicated as Boundary (IN) on diagram
interface UseCaseInterface {
    
    function run(
        RequestModelInterface $RequestModel,
        ResponseModelInterface $ResponseModel
    ) : ResponseModelInterface;

}
