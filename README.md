# TP1 - Système d'Authentification Sécurisé

Projet réalisé dans le cadre du Master Big Data (Module : Théorie de l'information appliquée à la sécurité des systèmes).

## Informations Techniques
* **Framework** : Symfony 5.16.1
* **Langage** : PHP v8.5.2
* **Base de données** : SQLite (`var/data.db`)
* **Sécurité** : 
    * Protection CSRF activée avec jetons dynamiques.
    * Hachage des mots de passe (Hasher Symfony).
    * Validation de l'entropie des mots de passe par Regex.

## Pré-requis pour lancer le projet 
1. **PHP 8.5** : Téléchargez sur [php.net](https://www.php.net/downloads). Vérifier que `extension=pdo_sqlite` est décommentée dans `php.ini`.
2. **Composer** : Téléchargez et installez via [getcomposer.org](https://getcomposer.org/download/).
3. **Symfony CLI** : à installer via :
   ```powershell
   scoop install symfony-cli # Pour Windows (Scoop)
   # OU téléchargez l'exécutable sur [symfony.com/download](https://symfony.com/download)* Vérifiez que le fichier .env contient bien la ligne : DATABASE_URL="sqlite:///%kernel.project_dir%/var/data.db

## Lancer le projet
1. **Installation** : `composer install`
2. **Base de données** : `php bin/console doctrine:migrations:migrate`
3. **Lancement** : `symfony serve -d`
4. **Accès** - Aller sur le lien suivant : `http://localhost:8000/login`
