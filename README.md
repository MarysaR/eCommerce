# php8.3, Symfony 7 et mySQL

## Mathieu HEITZMANN & Marysa RÉGENT

- Créer un nouveau projet : symfony new --webapp eCommerce
- Lancer le server php : php -S 127.0.0.1:8000 -t public/ 
- Lancer le server symfony en fond : symfony server:start -d
- Arrêter le server : symfony server:stop

#### https://symfony.com/doc/current/setup/symfony_server.html#getting-started


### AssetMapper
En mode production, lancer la commande suivante pour copier tout le contenu du dossier assets dans le dossier public :

php bin/console asset-map:compile 

#### https://symfony.com/doc/current/frontend/asset_mapper.html

### mySQL : 
Géré avec phpMyAdmin 
#### http://localhost/phpmyadmin

### Bootstrap:
php bin/console importmap:require bootstrap

Dans le fichier assets/app.js et ajouter les lignes suivantes :
- import 'bootstrap/dist/css/bootstrap.min.css';
- import 'bootstrap';

### Tailwind : 
#### Installation 
composer require symfonycasts/tailwind-bundle
php bin/console tailwind:init
php bin/console tailwind:build (--watch, optionnel)

#### https://symfony.com/bundles/TailwindBundle/current/index.html
