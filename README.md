Symfony Minimal Edition
=======================

This is the Symfony Minimal Edition - a minimally-functional Symfony application that you can use as the skeleton for your new applications.

The Symfony Minimal Edition uses the package [**vlucas/phpdotenv**][1] to add [**Twelve Factor app**][2] compatibility, simplyfing configuration. This allows to get rid of the different front controller files based on environment.

Add your application configuration to a `.env` file in the root of your project containing key-value pairs of environment variables :

```
SYMFONY_ENV=dev
SYMFONY_DEBUG=1
SYMFONY__SECRET=ThisTokenIsNotSoSecretChangeIt
SYMFONY__MONOLOG_ACTION_LEVEL=debug
```

> **Note**: Symfony will grab any environment variable prefixed with `SYMFONY__` and set it as a parameter in the service container. For details see [**How to Set external Parameters in the Service Container**][3] chapter of the Symfony Documentation.

What's inside?
--------------

The Symfony Minimal Edition is configured with the following defaults:

  * An AppBundle you can use to start coding;

  * Twig as the only configured template engine;

It comes pre-configured with the following bundles:

  * **FrameworkBundle** - The core Symfony framework bundle

  * [**TwigBundle**][4] - Adds support for the Twig templating engine

  * [**MonologBundle**][5] - Adds support for Monolog, a logging library

  * **WebProfilerBundle** (in `dev`/`test` env) - Adds profiling functionality and
    the web debug toolbar

  * **DebugBundle** (in `dev`/`test` env) - Adds Debug and VarDumper component
    integration

Installation
------------

Use [**Composer**][6] to create a new application:

`composer create-project qb/symfony-minimal-edition path/to/install "v1.0.1"`

Credits
-------

  * [**Packing a Symfony full-stack Framework Application in one File**][7]
  * [**Symfony All The Things (Web)**][8]

[1]: https://github.com/vlucas/phpdotenv
[2]: http://12factor.net
[3]: https://symfony.com/doc/current/cookbook/configuration/external_parameters.html
[4]: https://symfony.com/doc/3.0/book/templating.html
[5]: https://symfony.com/doc/3.0/cookbook/logging/monolog.html
[6]: https://getcomposer.org/
[7]: http://fabien.potencier.org/packing-a-symfony-full-stack-framework-application-in-one-file-bootstrapping.html
[8]: http://www.whitewashing.de/2014/10/26/symfony_all_the_things_web.html
