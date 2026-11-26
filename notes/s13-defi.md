# Session 13 - Défi

/api/posts/3 affiche tags avec des noms : oui
/api/posts ne contient aucun body, /api/posts/3 en contient un : oui
Aucune LazyLoadingViolationException : oui

Pourquoi ne pas envoyer body dans la liste, et qui en profite ?
On ne met pas le body dans la liste parce que le contenu complet de chaque article n'est pas nécessaire pour afficher une liste. Cela évite d'envoyer trop de données et rend l'API plus rapide. Les utilisateurs et les applications qui utilisent l'API en profitent.

Un brouillon renvoie 403. Quel avantage aurait un 404 pour un brouillon ?
Un code 404 permet de cacher l'existence d'un brouillon. Un visiteur ne peut donc pas savoir si l'article existe réellement ou s'il est simplement inaccessible. Cela améliore la confidentialité et la sécurité.
