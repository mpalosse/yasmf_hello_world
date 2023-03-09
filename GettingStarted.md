# Steps

1. Install Php version 8 or superior (8.0.28 works Larogon with Laragon).
2. Activate openssl and curl extension in the `php.ini`file.
3. Set the `PATH` variable to point to the folder of fresh installed version of Php.
4. In VSCode : install the official `composer` extension
5. Set the proxy variables (see https://gist.github.com/ozh/9751639, https://stackoverflow.com/questions/17307600/php-composer-behind-http-proxy).
5. Launch `composer update` from the `composer.json`.