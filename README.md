# TP1 - Formulaire de Connexion Sécurisé
**Master 1 Big Data - Université Paris 8**

##  Technologies utilisées
- **Framework** : Symfony 5.16 (PHP 8.5.2)
- **Moteur de template** : Twig
- **ORM** : Doctrine
- **Base de données** : SQLite 
- **Gestionnaire de dépendances** : Composer
- **Sécurité** : Symfony Security Bundle + Rate Limiter

## Installation 
1. **Cloner le projet** : `git clone https://github.com/czsoup/tp1-securite-formulaire.git`
2. **Installer les librairies** : `composer install`
3. **Initialiser la base** : 
   - `touch var/data.db`
   - `php bin/console doctrine:migrations:migrate --no-interaction`
4. **Lancer le serveur** : `php -S 127.0.0.1:8000 -t public/`
