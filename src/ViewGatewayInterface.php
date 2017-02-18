<?php

namespace emeraldinspirations\library\applicationArchitecture;

interface ViewGatewayInterface
{

    function render(ViewModelInterface $ViewModel);

}
