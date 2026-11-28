# Session 14 - Défi

Connexion enregistre le jeton toute seule : oui
Créer un article répond 201 sans copier le jeton : non
Le fichier exporté ne contient aucun jeton : oui

Le dépôt est public. Que risquez-vous si le fichier exporté contient un jeton, et comment l'annuler ?
Si le fichier exporté contient un jeton, n'importe qui peut l'utiliser pour accéder à l'API et agir en mon nom tant que le jeton n'est pas révoqué. Par défaut, il n'expire jamais. Pour l'annuler, je peux envoyer une requête POST /api/logout avec ce jeton ou supprimer sa ligne dans la table personal_access_tokens.

Pourquoi les écritures de l'API passent-elles par les Form Requests et PostPolicy plutôt que par des règles écrites dans Api\PostController ?
Pour centraliser la validation et les autorisations, éviter de répéter les règles et garantir que le site web et l'API utilisent les mêmes règles. Ainsi, une modification dans la Policy s'applique aux deux parties et évite les contradictions.
