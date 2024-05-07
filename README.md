
# Classement de Jeu Symfony

Ce projet est un système de classement de jeu développé avec Symfony.

## Fonctionnalités

- Enregistrement des utilisateurs
- Ajout de jeux au classement
- Classement des jeux par popularité
- Système de commentaires sur les jeux

## Prérequis

- PHP >= 7.4
- Composer
- MySQL ou tout autre système de gestion de base de données pris en charge par Symfony

## Installation

1. Cloner le dépôt :

```
git clone https://github.com/votre-utilisateur/classement-jeu-symfony.git
```

2. Installer les dépendances avec Composer :

```
composer install
```

3. Configurer les variables d'environnement en créant un fichier `.env.local` à la racine du projet et en configurant les variables d'environnement nécessaires, comme la connexion à la base de données.

4. Créer la base de données et exécuter les migrations :

```
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
```

5. Lancer le serveur de développement Symfony :

```
symfony server:start
```

6. Accéder à l'application dans votre navigateur à l'adresse `http://localhost:8000`.

## Contributeurs

Ce projet a été réalisé avec amour par Zitoune et Zitoune & Co.

## License

Ce projet est sous licence [MIT License](LICENSE).

---

![forthebadge](https://forthebadge.com/images/badges/built-with-love.svg) ![forthebadge](https://forthebadge.com/images/badges/open-source.svg) ![forthebadge](https://forthebadge.com/images/badges/made-with-html.svg) ![forthebadge](https://forthebadge.com/images/badges/approved-by-my-mom.svg)

![Horty_rainbow_derriere_lent_dance_v3](https://github.com/Bili-and-sheep/topscores/assets/70603677/97917f69-fcc5-4b73-8463-c74288491c76)
