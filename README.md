# Brief 2 Laravel : Gestion d'une bibliothèque de film

L'entreprise FavMovies souhaite pouvoir publier des titres de films sur son site internet en indiquant une évaluation du film. En tant que prestataire, votre mission est de comprendre le besoin de l'entreprise et de mettre en place les fonctionnalités demandées.


## Ressources
- [Doc Laravel 12.x](https://laravel.com/docs/12.x)
- [CRUD avec Laravel](https://medium.com/%40rokisheik/crud-application-in-laravel-12-step-by-step-guide-543f0c24bdd3)
- [CRUD avec Laravel (un autre)](https://www.kritimyantra.com/blogs/laravel-12-blog-crud-image-upload)
- [Les controleurs Lavarel](https://kritimyantra.com/blogs/laravel-12-controllers-a-comprehensive-guide-with-examples)
- [Eloquent](https://laravel.com/docs/12.x/eloquent-relationships)
- [Eloquent (video fr)](https://www.youtube.com/watch?v=vX6kJzjgL2s)


## Contexte du projet
Vous êtes chargés de créer une application web permettant à un utilisateur de lister, ajouter, modifier et supprimer des films.

Le client souhaite pouvoir trier les films par note ou par année.


## Modalités pédagogiques

### Objectifs :
- Reproduire un CRUD avec ajout de tri/filtre
- Utiliser les requêtes Eloquent
- Tri par note
- Filtre pour afficher les films récents
- Filtre pour afficher les films les mieux notés
- Affichage dynamique des données

### Étapes :
1. Créer un projet Laravel
2. Créer une base de données SQLite (touch database/database.sqlite)
3. Modifier le fichier .env pour lui indiquer de travailler avec SQLite
4. Créer modèle + migration + contrôleur (modèle avec titre, année, note, commentaire)
5. Écrire la migration
6. Lancer la migration
7. Gérer les routes
8. Créer les vues Blade (avec filtres et tri)


## Modalités d'évaluation
- Construction d'une application web fonctionnelle
- Revue de code demandée durant le brief par le formateur avec démonstration du fonctionnement.


## Livrables
- Lien vers le code source sur GitHub
- Document Word avec captures d'écran des vues principales


## Critères de performance
- Le CRUD fonctionne parfaitement
- L’affichage est lisible
- Les routes et vues sont cohérentes
- Les données sont bien enregistrées
- Le tri et les filtres fonctionnent
