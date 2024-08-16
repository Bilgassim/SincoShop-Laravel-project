# Sinco Shop

Sinco Shop est une application de gestion de stocks et de commandes développée en Laravel avec une interface utilisateur moderne et intuitive. Ce projet est conçu pour aider les petites entreprises à gérer efficacement leurs stocks, commandes, fournisseurs, et à générer des rapports analytiques.

## Interfaces
**Page d'accueil**
![Sinco Shop _ Page de ](https://github.com/user-attachments/assets/31b24df8-58ae-4598-a746-0bccf5789d45)

**Footer**
![Sinco Shop _ Accueil et 1 page supplémentaire - Personnel – Microsoft​ Edge 16_08_2024 02_06_15](https://github.com/user-attachments/assets/0f958ede-950e-4b97-b9dd-993d43705a9a)

**Tableau de Bord**
![Sinco Shop _ Page d'accueil](https://github.com/user-attachments/assets/a1bda729-73f7-421c-8da1-283d8d99e5a6)

**Rapports**
![Sinco Shop _ Rapports](https://github.com/user-attachments/assets/6f1774db-2003-4bcb-938f-b8d1ad2f8d90)

**Gestion des Produits**
![Sinco Shop _ Gestion des Produits et 1 page supplémentaire - Personnel – Microsoft​ Edge 16_08_2024 16_32_29](https://github.com/user-attachments/assets/ecad2ce4-69f4-43b0-aa39-c6425362b5c5)

**Gestion des Commandes**
![Sinco Shop _ Gestion des Commandes](https://github.com/user-attachments/assets/885f1924-5930-4a82-841f-99ae6ad79da6)

**Gestion des Fournisseurs**
![Sinco Shop _ Fournisseurs](https://github.com/user-attachments/assets/fbcf5b80-bc9d-4841-b2b8-4ed030296545)




**Base de données**
![base de donnée](https://github.com/user-attachments/assets/5bcac9e8-12ed-4af9-a258-a647451b582f)

## Petite présentation de l'application
[Regarder la vidéo : Presentation des fonctionnalités de l'Application](https://github.com/user-attachments/assets/f03728ac-0d58-41f7-9244-88afdde7f547)

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
   git clone https://github.com/Bilgassim/SincoShop-Laravel-project.git
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

Ce projet est sous la licence MIT - voir le fichier [LICENSE](https://github.com/user-attachments/files/16632129/LICENSE.txt)
) pour plus de détails.
