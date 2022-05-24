==========
Equipement
==========

Cette page utilise le fichier (snippet) liste-gestion-equipements qui est presque identique à liste-equipement utilisé dans la page equipement dans le public.
La description sera donc la même 

Composition de la page
======================

Page Equipements
----------------

Si nous observons les widget qui composent cette page nous pouvons observer qu'il y a deux widget des **Insert Snippet** faisant appel à **redirect-admin-user** ainsi qu'a **liste-equipement** .
De plus on peut voir un widget **Pod** faisant appel à moyen.


Le nombre d'equipement et d'offres
==================================

Nombre d'équipements
--------------------

Pour calculer le nombre d'équipements on fait appel à la fonction **nombreEquipement** 
Ensuite on retrouve l'affichage selon le nombre d'équipements.

Nombre d'offres
---------------

Pour calculer le nombre d'offres on fait appel à la fonction **nombreOffresDispo** 
Ensuite on retrouve l'affichage selon le nombre d'équipements.
Le template appelé est : *Tableau des moyens (gestion)*
