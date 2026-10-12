# Session 03 - Routes, contrôleurs et layout

## Défi

URL produite par route('about') :
/a-propos

URL produite par route('posts.show', 'routes-et-controleurs') :
/posts/routes-et-controleurs

URL produite par route('posts.archive', 2025) :
/posts/archive/2025

Pourquoi /posts/archive/abc et /posts/article-inconnu répondent toutes deux 404, et quelle ligne de code en est responsable dans chaque cas ?
/posts/archive/abc : la contrainte whereNumber('year') dans routes/web.php rejette la valeur abc.
/posts/article-inconnu : abort(404) dans la méthode show() de PostController, car le slug n'existe pas.

Que se passe-t-il si une vue appelle route('posts.show') sans paramètre ?
Laravel affiche une erreur Missing required parameter, car le paramètre slug est obligatoire.
