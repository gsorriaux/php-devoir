# Devoir n°1 sur PHP
## Consignes :
```
Vous allez devoir monter une application web de présentation de livres.

Votre projet devra contenir au moins :
- un menu de navigation. Attention, vous n'avez pas besoin de faire un menu déroulant ici. Faites déjà au plus simple et fonctionnel.
- une page d’accueil de votre site
- une page avec un listing de livre (une description, une image et un titre). Ce listing devra provenir d'un array contenant toutes ces informations (4-5 livres suffiront). Ce dernier peut être directement sur la page, ou vous pourrez inclure un fichier qui le contient pour plus de clarté.
- un système de connexion (avec tout ce que ça implique)
- une page de profil qui sert de présentation de l'utilisateur courant, en dur. Pour les infos à afficher, faites preuve d'imagination (nom, photos, quelques infos comme on peut en trouver sur ce genre de pages). Bien entendu, cette page ne doit pas apparaître dans le menu si vous n'êtes pas connecté, ni son contenu accessible via l'url. C'est aussi dans cette page-la que vous devrez pouvoir gérer les options d'affichage de la page suivante.
- Cette page affichera les infos détaillés d'un (et un seul, en dur) livre. Vous pourrez mettre, au minimum : titre, image, résumé, genre*, année de parution*, cible* (âge). Ici, les informations avec des * pourront ou non être afficher, suivant nos préférences de la page précédente.
- Enfin, bien entendu, un petit readme.md afin de préciser votre thème d'application, les logs corrects pour se connecter et tout autres éléments que vous jugerez utiles.

Le tout devra bien entendu avoir une esthétique agréable à parcourir.
Attention, bien que vous pouissiez vous "inspirer" de ce que nous avons déjà faits, je n'en veux pas une copie!

Les technologies à utiliser sont : HTML, CSS et PHP. Vous organiserez vous fichiers via un système simplifié MVC du type que nous avons vu en cours.

Vous me rendrez, directement dans Classroom, un lien vers votre repo. Vous avez jusqu'à 13h.

Bonne chance!
```
## A propos du devoir :

Le devoir est basé sur du php5 avec une arborescence en "MVC". Un fichier CSS vient embellir l'application.

Login de l'application :
- Login : johnny
- Mot de passe : root

Ajout supplémentaire :
- Garde en mémoire les préférences de l'utilisateur au niveau des boutons
- La première lettre du nom de l'utilisateur est mise en majuscule
- Ajout de ma signature dans le footer
