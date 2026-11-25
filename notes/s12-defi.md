# Session 12 - Défi

1. Pourquoi role n'est-il pas dans #[Fillable], et comment votre contrôleur le modifie-t-il quand même ?
   Le champ role n'est pas dans #[Fillable] pour protéger les utilisateurs et empêcher qu'une personne puisse modifier son rôle directement avec des données envoyées par un formulaire.

Le contrôleur peut quand même modifier ce champ en affectant directement la valeur à l'attribut du modèle, après avoir vérifié les autorisations et validé la valeur. Ensuite, il utilise save() pour enregistrer la modification dans la base de données.

2. Pourquoi le callback de Gate::before doit-il renvoyer null, et non false, pour un auteur ?
   null signifie que le Gate ne prend pas de décision et laisse Laravel continuer les vérifications avec les autres Gates ou les méthodes de la Policy.

Par contre, false signifie un refus définitif. L'auteur ne pourrait donc plus effectuer les actions autorisées par les autres règles, comme modifier ses propres articles.
