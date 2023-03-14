# Steps

1. Install Php version 8.1 or superior (8.1.16 works with Laragon). see https://windows.php.net/download/ and download the thread safe version.
2. Activate openssl and curl extension in the `php.ini`file.
3. Set the `PATH` variable to point to the folder of fresh installed version of Php.
`%USERPROFILE%\AppData\Local\Microsoft\WindowsApps;D:\php-R4.02\php-8.0.28;`
4. In VSCode : install the official `composer` extension
5. Set the proxy variables (see https://gist.github.com/ozh/9751639, https://stackoverflow.com/questions/17307600/php-composer-behind-http-proxy).
Reminder proxy iut: `http://cache.iut-rodez.fr:8080`
5. Launch `composer update` from the `composer.json`.