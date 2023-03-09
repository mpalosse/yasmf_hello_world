# Steps

1. Installer si nécessaire avec Laragon la version 8.0.28 de PHP
2. Modifier la variable PATH pour pointer vers le dossier PHP 8.0.28
3. Dans VSCode : installer l'extension `composer` officielle
3. Activer les extensions openssl et curl dans le fichier php.ini
4. Lancer composer update depuis le fichier composer.json

    PB : proxy pour composer access to Internet => voir https://gist.github.com/ozh/9751639, https://stackoverflow.com/questions/17307600/php-composer-behind-http-proxy 