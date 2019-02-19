# 🦄 Application LeGermoir Friterie

Une application de prise de commande, pour moderniser une friterie

##  🦄 Pour Commencer

Le projet est en laravel 5 et Vue Js 3

### 🦄🦄 Prérequis

Vous aurez besoin de NodeJs, MySql, Composer


### 🦄🦄🦄 Installer

- Copiez le fichier dans un dossier

- Ouvrer le terminal, allez dans le dossier et installez composer dans le dossier :


```
composer install
```

En suite on installe les librarys NodeJs

```
npm install
npm install vue-router
```

Dans le projet, renomez le fichier .env.exemple en .env, et on genere une clef :

```
php artisan key:generate
```

### 🦄🦄🦄🦄 Installation de la base de donnée

Créez une base de donnée. 
Dans le fichier .env modifiez ces elements :

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```
Pour créer les tables :


```
php artisan migrate
php artisan db:seed
```

### 🦄🦄🦄 Lancer la machine de guerre 🦄🦄🦄

Pour lancer le projet il suffit de taper ces commandes :

```
npm run watch
php artisan serv
```

## Auteurs

* **Cyriaque DIEVART** 
* **🦄🦄 Cécile CROCHON**

