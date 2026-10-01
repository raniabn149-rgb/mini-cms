# Cycle de vie d'une requête HTTP dans Laravel (/heure)

1. **Navigateur** : Le client envoie une requête HTTP `GET /heure`.
2. **`public/index.php`** : Point d'entrée unique de l'application. Il charge l'autoloader Composer et initialise l'application via `bootstrap/app.php`.
3. **`bootstrap/app.php`** : Instancie l'application et charge les fichiers de routage (notamment `routes/web.php`).
4. **`routes/web.php`** : Le routeur intercepte l'URL `/heure` et exécute la closure associée.
5. **Closure & Vue** : La closure calcule l'heure/date actuelle et appelle `view('heure')`, qui charge `resources/views/heure.blade.php`.
6. **Moteur Blade & Réponse** : La vue Blade est compilée en HTML basique et renvoyée par Laravel au navigateur avec un statut 200 OK.
