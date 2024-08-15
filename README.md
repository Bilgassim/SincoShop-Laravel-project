# Sinco Shop

Sinco Shop est une application de gestion de stocks et de commandes développée en Laravel avec une interface utilisateur moderne et intuitive. Ce projet est conçu pour aider les petites entreprises à gérer efficacement leurs stocks, commandes, fournisseurs, et à générer des rapports analytiques.

## Fonctionnalités

- **Gestion des Stocks** : Suivi des produits avec une interface pour ajouter, modifier et supprimer des produits. Affichage des stocks faibles pour éviter les ruptures.
- **Gestion des Commandes** : Création et gestion des commandes avec un suivi des articles commandés.
- **Gestion des Fournisseurs** : Ajout et gestion des informations des fournisseurs pour faciliter les achats.
- **Tableau de Bord** : Vue d'ensemble des principaux indicateurs de performance avec des graphiques interactifs.
- **Rapports Analytiques** : Génération de rapports basés sur des périodes spécifiques avec des visualisations des stocks et des ventes.

## Technologies Utilisées

- **Backend** : Laravel 11
- **Frontend** : TailwindCSS pour le style
- **Base de Données** : MySQL
- **Graphiques** : Chart.js pour les visualisations

## Installation

Pour cloner et installer ce projet localement, suivez les étapes ci-dessous :

1. **Cloner le Dépôt** :
   ```bash
   git clone https://github.com/ton-utilisateur/sinco-shop.git
   cd sinco-shop
2. **Installer les Dépendances :** :
   ```bash
   composer install
   npm install
3. **Configurer l'Environnement :**
Copiez le fichier .env.example en .env et mettez à jour les paramètres de connexion à la base de données.
    ```bash
    cp .env.example .env
4. **Générer la Clé d'Application :**
    ```bash
   php artisan key:generate
5. **Exécuter les Migrations :**
     ```bash
       php artisan migrate
6. **Démarrer le Serveur de Développement :**
    ```bash
       php artisan serve
    
## Utilisation

- **Tableau de Bord** : Accédez à la vue d'ensemble des stocks et des ventes.
- **Rapports** : Filtrez et générez des rapports sur les stocks et les ventes.
- **Produits** : Gérez vos produits, y compris l'ajout, la modification, et la suppression.
- **Commandes** : Créez et gérez les commandes clients.
- **Fournisseurs** : Ajoutez et gérez les informations des fournisseurs.

## Contributions

Les contributions sont les bienvenues ! Pour contribuer à ce projet :

1. Forkez le dépôt.
2. Créez une branche pour votre fonctionnalité (`git checkout -b feature/NomdDeLaFonctionnalité`).
3. Faites des commits de vos changements (`git commit -am 'Ajoute une nouvelle fonctionnalité'`).
4. Poussez vos changements (`git push origin feature/NomdDeLaFonctionnalité`).
5. Créez une Pull Request.

## License

Ce projet est sous la licence MIT - voir le fichier [LICENSE](LICENSE) pour plus de détails.
