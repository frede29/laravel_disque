<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

Le projet de gestion des disques a été réalisé avec php laravel 8.

# DEPLOYER

Pour deployer le projet il faudrait utiliser comme IDE phpstorm,sublime ou visual studio code.

les commandes sont:

-cloner ou télécharger le dossier
Dans le terminal:
-composer install 
-copy .env .env.example
-php artisan key:generate
-Modifier le fichier .env en configurant votre base de donnée locale et faire php artisan migrate
Vous trouverez à la racine du projet ma base de donnée au format sql que vous pourrez directement importer dans mysql dans ce cas pas de migration nécessaire
-php artisan serve


Dans le projet se trouve un formulaire de contact réalisé avec mailtrap ci-joint le lien et les coordonnés pour accéder au compte lors des tests:
https://mailtrap.io/signin
email:angela_asere@yahoo.fr
mot de passe: laravel_disque


# contenu

-une partie admin(backoffice)
-une partie front (forum de discussion,formulaire de contact,produit par categories,home page)

