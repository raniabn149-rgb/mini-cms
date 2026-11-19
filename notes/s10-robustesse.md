# Session 10 - Robustesse

TagAdminTest contient 5 tests verts : oui / non
/posts/categorie/inconnue affiche Catégorie introuvable avec le statut 404 : oui / non
php artisan test est vert : oui / non

1. Pourquoi le message de messages() l'emporte-t-il sur celui de lang/fr/validation.php ?
   Parce que Laravel cherche d'abord un message personnalisé pour une règle et un champ précis dans la méthode messages() de la Form Request. Si ce message existe, il est prioritaire sur le message général du fichier de langue.

2. Pourquoi phpunit.xml fixe-t-il APP_LOCALE ?
   Pour garantir que tous les tests utilisent la langue française, quel que soit le contenu du fichier .env. Ainsi, les tests donnent le même résultat sur tous les ordinateurs et sur un nouveau clone du projet.

3. Pourquoi CategoryController n'a-t-il besoin d'aucun try/catch ?
   Parce que Laravel gère automatiquement les erreurs : les Form Requests vérifient les données, le route model binding renvoie une erreur 404 si la catégorie n'existe pas, le middleware renvoie une erreur 503 en lecture seule et le gestionnaire d'exceptions transforme ces erreurs en réponses adaptées. Le contrôleur n'a donc pas besoin de try/catch.
