emeraldinspirations\library\applicationArchitecture\InteractorInterface
===============

Interactor interface

An interactor is an action taken by the application.  Interactors accept as
constructors the necessary EntityGatewayInterface objects.  Once
constructed, the interactor is invoked by passing a
RequestModelInterface.  The interactor performs the specified action and
returns a ResponseModelInterface.


* Interface name: InteractorInterface
* Namespace: emeraldinspirations\library\applicationArchitecture
* This is an **interface**






Methods
-------


### __invoke

    \emeraldinspirations\library\applicationArchitecture\return emeraldinspirations\library\applicationArchitecture\InteractorInterface::__invoke(\emeraldinspirations\library\applicationArchitecture\RequestModelInterface $RequestModel)

Preform the required action, then return a ResponseModelInterface



* Visibility: **public**


#### Arguments
* $RequestModel **[emeraldinspirations\library\applicationArchitecture\RequestModelInterface](emeraldinspirations-library-applicationArchitecture-RequestModelInterface.md)** - &lt;p&gt;The parameters for the requested action&lt;/p&gt;


