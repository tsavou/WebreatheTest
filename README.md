
# Test informatique WeBreathe

Ce projet est un site web de monitoring de modules IOT, développé dans le cadre d'un test de compétences en programmation informatique.


## Installation

Cloner le projet

```bash
 https://github.com/tsavou/WebreatheTest.git

```
Installer les dépendances
```bash
   cd WebreatheTest
   composer install

```

## Configuration  & Base de données
Copiez 	le fichier *.env.example*, le renommer en *.env* et générez une clé d'application
```bash
 cp .env.example .env
 php artisan key:generate

```

Créer une nouvelle base de données dans MySQL pour le projet.

```sql
CREATE DATABASE IF NOT EXISTS testdb; 
```

Modifier les variables d'environnement dans le fichier .env pour configurer la connexion à votre base de données MySQL.

Exemple pour une base de données *testdb* :

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=testdb
DB_USERNAME=root
DB_PASSWORD=root
```

Exécuter les migrations:
```
php artisan migrate
```

*Facultatif* : Alimenter la Base de Données avec des modules préexistants :

```
php artisan db:seed --class=ModulesSeeder

```
    
## Lancement du projet & Utilisation

Lancer le serveur

```bash
  php artisan serve
```

Exécuter le script pour générer l'état des modules et leurs mesures :

```bash
  php artisan schedule:work

```
Notez que le script commencera à la prochaine minute. Toutes les secondes, il simulera aléatoirement l'état des modules et génerera des mesures pour chaque module actif.

Une fois le serveur lancé, vous pouvez accéder à l'application dans votre navigateur à l'adresse http://localhost:8000.

Vous pourrez alors ajouter un module via un formulaire, visualiser la liste des modules ainsi que leur état et voir pour chaque module leurs détails et leurs données. N'hésitez pas à actualiser pour visualiser leurs évolutions. 


