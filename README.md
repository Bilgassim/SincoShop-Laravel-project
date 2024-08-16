# Sinco Shop

Sinco Shop est une application de gestion de stocks et de commandes développée en Laravel avec une interface utilisateur moderne et intuitive. Ce projet est conçu pour aider les petites entreprises à gérer efficacement leurs stocks, commandes, fournisseurs, et à générer des rapports analytiques.

## Interfaces
![Sinco Shop _ Accueil et 1 page supplémentaire - Personnel – Microsoft​ Edge 16_08_2024 02_06_31 (1)](https://github.com/user-attachments/assets/a1bda729-73f7-421c-8da1-283d8d99e5a6)
![Sinco Shop _ Accueil et 1 page supplémentaire - Personnel – Microsoft​ Edge 16_08_2024 02_06_43](https://github.com/user-attachments/assets/936f87b4-5d13-4870-b03d-9dc7d55f73b8)
![Sinco Shop _ Accueil et 1 page supplémentaire - Personnel – Microsoft​ Edge 16_08_2024 02_06_53](https://github.com/user-attachments/assets/11fbed7e-9b56-4277-86e4-cb16946b9384)
![Sinco Shop _ Accueil et 1 page supplémentaire - Personnel – Microsoft​ Edge 16_08_2024 02_07_08](https://github.com/user-attachments/assets/fbcf5b80-bc9d-4841-b2b8-4ed030296545)
![Sinco Shop _ Accueil et 1 page supplémentaire - Personnel – Microsoft​ Edge 16_08_2024 02_05_59](https://github.com/user-attachments/assets/31b24df8-58ae-4598-a746-0bccf5789d45)
![Sinco Shop _ Accueil et 1 page supplémentaire - Personnel – Microsoft​ Edge 16_08_2024 02_06_15](https://github.com/user-attachments/assets/0f958ede-950e-4b97-b9dd-993d43705a9a)


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
