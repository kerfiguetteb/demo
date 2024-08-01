Ce guide liste les principales étapes à suivre lors du développement d'un projet Symfony, de l'installation au déploiement. Bien sûr vous pouvez changer l'ordre de certaines étapes, en supprimer ou en rajouter.

## Etapes

 1. création du projet avec la commande `symfony new [nom du projet] --version=lts --webapp`
 2. création du fichier local des variables d'environnement `.env.local`
 3. création de la BDD avec la commande `php bin/console doctrine:database:create`
 4. création d'entités avec la commande `php bin/console make:entity`
 5. création d'un fichier de migration avec la commande `php bin/console doctrine:migrations:diff` ou `php bin/console make:migration`
 6. installation du package doctrine fixtures bundle avec la commande `composer require --dev orm-fixtures`
 7. installation de faker `composer require fakerphp/faker`
 8. création de fixtures
 9. chargement des fixtures avec la commande  `php bin/console doctrine:fixtures:load`
