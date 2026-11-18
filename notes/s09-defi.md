# Session 09 - Défi

Le bandeau s'affiche sur toutes les pages quand SITE_READ_ONLY=true : oui
Le bandeau disparaît quand SITE_READ_ONLY=false : oui
La page Article introuvable propose au plus trois articles publiés, sans brouillon : oui / non
Aucune LazyLoadingViolationException sur /posts/999 : oui
Les deux nouveaux tests passent et php artisan test est vert : oui

Pourquoi le bandeau est-il dans le layout et pas dans chaque vue ?
Parce que le layout est commun à toutes les pages. Un seul bloc suffit pour afficher le bandeau partout.

Pourquoi le test du bandeau n'a-t-il pas besoin de modifier .env ?
arce que config(['site.read_only' => true]) modifie la configuration uniquement pour le test concerné.
