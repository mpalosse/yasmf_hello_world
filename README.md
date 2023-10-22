## Sample "Hello World"

A very simple project without database connection.

### To launch the application

```
$ docker-compose up -d 
$ docker-compose exec hello_world composer update
```

Open your favorite browser and use this URL to test the web app:

`http://localhost:8080/hello_world/`


### To launch some actions

First, you have to open a terminal to access the container after it's launched.

`$ docker-compose exec hello_world bash`


- PHPStan 

    `php ./hello_world/lib/vendor/bin/phpstan --xdebug analyse -c ./phpstan.neon`

- tests (without coverage)

    `php ./hello_world/lib/vendor/bin/phpunit`

- tests with coverage

    `php -d xdebug.mode=coverage ./hello_world/lib/vendor/bin/phpunit  --coverage-html='reports/coverage'`