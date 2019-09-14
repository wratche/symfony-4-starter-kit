Symfony Skeleton Application
========================

The "Symfony skeleton Application".

Requirements
------------

  * PHP 7.3.1 or higher;
  * PDO-SQLite PHP extension enabled;
  * and the [usual Symfony application requirements][2].

Installation
------------

Install the [Symfony client][4] binary and run this command:


```bash
$ composer create-project wratche/symfony-skeleton my_project
```

Usage
-----

There's no need to configure anything to run the application. If you have
installed the [Symfony client][4] binary, run this command to run the built-in
web server and access the application in your browser at <http://localhost:8000>:

```bash
$ cd my_project/
$ make start
```

If you don't have the Symfony client installed, run `php bin/console server:run`.
Alternatively, you can [configure a web server][3] like Nginx or Apache to run
the application.

Tests
-----

Execute this command to run tests:

```bash
$ cd my_project/
$ make test
```

Makefile
-----
Execute this command to show all make commands
```bash
$ cd my_project/
$ make
```

[1]: https://symfony.com/doc/current/best_practices/index.html
[2]: https://symfony.com/doc/current/reference/requirements.html
[3]: https://symfony.com/doc/current/cookbook/configuration/web_server_configuration.html
[4]: https://symfony.com/download
[5]: https://github.com/symfony/webpack-encore
