![Logo of the project](http://vps56132.vps.ovh.ca/logo.gitHub.png)

# applicationArchitecture
> A PHP implementation of the Architecture design by Uncle Bob

[Uncle Bob Martin](http://cleancoder.com) presents a software architecture
pattern which moves the business logic front-and-center; and the framework,
database, and delivery methods as plug-ins.  This project contains both a
diagram of an implementation of this architecture, a sample directory
structure, as well as the interfaces needed to implement this architecture in a
future project.  

[![Diagram](architecture.png)](architecture.png)

## Installing / Getting started

This project has no dependencies, so can be cloned directly from the git repo

### Option 1 - Clone with HTTPS

```shell
git clone https://github.com/emeraldinspirations/lib-applicationArchitecture.git
```

### Option 2 - Clone with SSH

```shell
git clone git@github.com:emeraldinspirations/lib-applicationArchitecture.git
```

### Option 3 - Require with Composer

Add the following lines to your `composer.json` file

```json
    ...
    "repositories" : [
        ...
        {
            "type" : "vcs",
            "url" : "https://github.com/emeraldinspirations/lib-applicationArchitecture.git"
        },
        ...
    ],
    "require": {
        ...
        "emeraldinspirations/lib-applicationarchitecture":"*",
        ...
    },
    ...
```

## Documentation
Further documentation is available thanks to [phpDocumentor2](https://www.phpdoc.org/) and [PHPDocumentor Markdown generator](https://github.com/evert/phpdoc-md):

- [Documentation](phpdoc/md/ApiIndex.md)

## Contributing

If you'd like to contribute, please fork the repository and use a feature branch.

I am also open to feedback about how well I am being compliant with standards
and "best practices."  I have written software solo for years, and am trying to
learn how to work better with others.

## Licensing

The code in this project is licensed under [MIT license](LICENSE).
