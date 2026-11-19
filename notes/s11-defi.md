# Session 11 - Défi

/mes-articles ne montre que mes articles, brouillons compris : oui
Un visiteur qui ouvre /mes-articles arrive sur /connexion : oui
Le cookie remember*web* apparaît quand la case est cochée : oui
Les deux nouveaux tests passent et php artisan test est vert : oui

Pourquoi partir de $request->user()->posts() plutôt que de Post::where('user_id', $request->user()->id) ?
Parce que la relation posts() récupère directement les articles de l'utilisateur connecté. Elle garantit que seuls ses articles sont affichés, sans utiliser un identifiant fourni par le formulaire ou l'URL.

Pourquoi la case remember ne doit-elle pas être dans le tableau passé à Auth::attempt() ?
Parce que Auth::attempt() utilise les clés du tableau pour rechercher l'utilisateur dans la base de données, sauf le mot de passe. La colonne remember n'existe pas dans la table users, donc cela provoquerait une erreur SQL. La case doit être passée séparément comme deuxième argument de Auth::attempt().
