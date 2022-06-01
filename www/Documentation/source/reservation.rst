============
Réservations
============

.. note::
    Nous allons voir ici la page la plus complexe de tout le site, il est conseillé d'utiliser une recherche navigateur (ctrl+f) pour
    retrouver plus facilement les informations qui vous sont nécéssaires.

Events
======

Ce fichier permet de récupérer les événements (réservations) en fonction de différentes options.
Ce fichier est utilisé dans *afficherjournee.php* , *calendrier.php* , *getCalendrier.php* , *getTableau.php* , *GetMoyen.php* , *mesReservation.php* , *supprimerReservation.php* , *tableauReservation.php* et *voirReservation.php* .
Ce fichier import *GestionBdd.php* qui va permettre d’envoyer les requêtes.

Les fonctions
-------------

**getEventsBetween** : Récupère les évènements qui sont entre deux dates.

**getEventsBetweenByDay** : Récupère les évènements qui sont entre 2 dates indexé par jour.
Il appelle la fonction **getEventsBetween** contenu dans *Events.php* .
Pour chaque événement entre les deux dates, on récupère la date de début de l’événement et la date de fin et toutes les autres dates entre date de début et de fin que l’on renvoie.

**getEventsBetweenByDayByMoyen** : Récupère les évènements qui sont entre 2 dates indexé par jour et par moyen.
Il appelle la fonction **dateDansUnMoisParMoyen** contenu dans *GestionBdd.php*.
Pour chaque événement entre les deux dates, on récupère la date de début de l’événement et la date de fin et toutes les autres dates entre date de début et de fin que l’on renvoie.

**getEventByDayandCategorie** :Cherche un événement en fonction du jour et d’une catégorie donné.
Il appelle la fonction **getParJourEtCategorie** contenu dans *GestionBdd.php* renvoie le résultat.

**getEventByDayandMoyen** :Cherche un événement en fonction du jour et d’un moyen donné.
Il appelle la fonction **getParJourEtMoyen** contenu dans *GestionBdd.php* et renvoie le résultat.

**getEventById** :Cherche un événement par son Id .
Il appelle la fonction **getRéservationById** contenu dans *GestionBdd.php* renvoie le résultat.

**getMoyenByCategorie** :Cherche tous les moyens de la catégorie.
Il appelle la fonction **getMoyenCategorie** contenu dans *GestionBdd.php* renvoie le résultat.

**getResponsable** :Cherche tous les responsables d’un moyen.
Il appelle la fonction **getResponsableParMoyen** contenu dans *GestionBdd.php* renvoie le résultat.

**deleteEventById** :Supprimer une réservation par son ID.
Il appelle la fonction **deleteReservationById** contenu dans *GestionBdd.php* renvoie le résultat.

**getEventByName** :Cherche tous les événements en fonction de son titre.
Il appelle la fonction **getReservationByNom** contenu dans *GestionBdd.php* renvoie le résultat.

**getEventByName** :Cherche tous les événements en fonction de son titre.
Il appelle la fonction **getReservationByNom** contenu dans *GestionBdd.php* renvoie le résultat.

**getEventsByCategorie** :Cherche tous les événements en fonction de la catégorie du moyen.
Il appelle la fonction **getReservationParCatégorie** contenu dans *GestionBdd.php* renvoie le résultat.

**getEventsByCategorieAndUser** :Cherche tous les événements en fonction de la catégorie du moyen et l’utilisateur.
Il appelle la fonction **getReservationParCatégorieEtUtilisateur** contenu dans *GestionBdd.php* renvoie le résultat.

**getEventsByMoyen** :Cherche tous les événements en fonction du moyen.
Il appelle la fonction **getReservationParMoyen** contenu dans *GestionBdd.php* renvoie le résultat.

**getEventsByMoyenAndUser** :Cherche tous les événements en fonction du moyen.
Il appelle la fonction *getReservationParMoyenEtUtilisateur* contenu dans *GestionBdd.php* renvoie le résultat.

**afficherLesCategorie** :Cherche toutes les catégorie.
Il appelle la fonction **getCategorie** contenu dans *GestionBdd.php* renvoie le résultat.

**getUtiEventsByMoyen** :Cherche tous les utilisateurs qui ont réservés le moyen donné.
Il appelle la fonction **getUtiReservationParMoyen** contenu dans *GestionBdd.php* renvoie le résultat.

**getUtiEventsByCategorie** :Cherche tous les utilisateurs qui ont réservé un moyen de la catégorie donné. 
Il appelle la fonction **getUtiReservationParCatégorie** contenu dans *GestionBdd.php* renvoie le résultat.

Month
=====

Ce fichier permet de récupérer le mois, de connaitre son nombre de semaines et de jours.
Ce fichier est utilisé dans *calendrier.php* .
Ce fichier import lang-fr ou lang-en en fonction de la langue sélectionner qui va permettre de changer la langue grâce aux variables TXT.
Cette classe à 4 attributs.

- *$days* qui corresponds au jours de la semaine. 
- *$months* représente les mois de l’année.
- *$month* le mois sélectionner.
- *$year* l’année sélectionner.

**Constructeur** : à en paramètre le numéro du mois et l’année pour déterminer le nombre de jour dans le mois.

**getDays** : récupère *$days*.

**getMonth** : récupère *$month*.

**getYear** : récupère *$year*.

**getStartDay** : retourne le premier jour du mois .

**toString** : retourne le mois et l’année sous forme de chaine de caractère. 

**getWeeks** : retourne le nombre de semaine. 

**withinMouth** : récupère les jours qui ne sont pas dans le mois mais dans les même semaine que le premier jour et le dernière jour du mois.

**nextMonth** : passe au mois suivant $month prend +1 et si $month = 12 alors il retourne à 1.

**previousMonth** : passe au mois précédent $month prend -1 et si $month = 1 alors il retourne à 12.

Nouvelle Réservation
====================

Ce fichier permet de vérifier les différentes exceptions pour la création ou la modification d’une réservation.
Ce fichier est utilisé dans *ajouterReservation.php* et *ModifierReservation.php* .
Ce fichier import *GestionBdd.php* qui va permettre d’envoyer les requêtes.

**Chevauchement2jours** : Vérifie si la date de début de la réservation est supérieure à la date de fin.
Si la date de début et supérieur à la date de fin la fonction renvoie true.
Sinon renvoie false.

**Chevauchement2heures** : Vérifie si l’heure de début de la réservation est supérieure à l’heure de fin.
Si l’heure de début et supérieur à l’heure de fin la fonction renvoie true.
Sinon renvoie false.

**CreationReservation** : créer la réservation dans la bdd.
Récupère toutes les infos pour créer une réservation.
Appel la fonction **fusionDateEtHeure** de *NouvelleReservation.php* .
Appel la fonction **creerReservation** de *GestionBdd.php* .
Renvoie true si tout est bon.

**chevauchementMemeMoyen** : vérifie si le moyen de la réservation n’est pas déjà réserver pendant l’intervalle.
Appel la fonction **fusionDateEtHeure** de *NouvelleReservation.php* .
Récupère la date de début et on ajoute 1 minute.
Récupère la date de fin et on enlève 1 minute.
Appel la fonction **verificationChevauchementMemeMoyen** de *GestionBdd.php* et la renvoie.

chevauchementMemeUtilisateur : vérifie si l’utilisateur de la réservation n’a pas déjà réserver pendant l’intervalle.
Appel la fonction **fusionDateEtHeure** de NouvelleReservation.php.
Récupère la date de début et on ajoute 1 minute.
Récupère la date de fin et on enlève 1 minute.
Appel la fonction **verificationChevauchementMemeUtilisateur** de *GestionBdd.php* et la renvoie.

**fusionDateEtHeure** : fusionne la date et l’heure pour faire un type DATETIME et renvoie le datetime.

**separeDateEtHeure** :  sépare la date et l’heure pour avoir un type Date et l’autre Time et renvoie les deux type dans un tableau.

**getMoyenParCategorie** : Recherche les moyens en fonction de leur catégorie.
Appel la fonction **getMoyensCategorie** de *GestionBdd.php* et la renvoie.

**afficherLesEncadrant** : Recherche les encadrants possible.
Appel la fonction getEncadrantPossible de *GestionBdd.php* et la renvoie.

**getEventById** : Recherche une réservation en fonction de son Id.
Appel la fonction getReservationById de *GestionBdd.php* et la renvoie.

**modifierReservation** : modifie la réservation dans la bdd.
Récupère toutes les infos pour créer une réservation.
Appel la fonction **fusionDateEtHeure** de *NouvelleReservation.php* .
Appel la fonction **updateReservationById** de *GestionBdd.php* et la renvoie.

**chevauchementMemeMoyenIdDifferent** : vérifie si le moyen de la réservation n’est pas déjà réserver pendant l’intervalle sans compter les réservations qui ont le même Id.
Appel la fonction **fusionDateEtHeure** de *NouvelleReservation.php* .
Récupère la date de début et on ajoute 1 minute.
Récupère la date de fin et on enlève 1 minute.
Appel la fonction **verificationChevauchementMemeMoyenIdDifferent** de *GestionBdd.php* et la renvoie.

**chevauchementMemeUtilisateur** : vérifie si l’utilisateur de la réservation n’a pas déjà réserver pendant l’intervalle sans compter les réservations qui ont le même Id.
Appel la fonction **fusionDateEtHeure** de *NouvelleReservation.php* .
Récupère la date de début et on ajoute 1 minute.
Récupère la date de fin et on enlève 1 minute.
Appel la fonction **verificationChevauchementMemeUtilisateurIdDifferent** de *GestionBdd.php* et la renvoie.

**envoieMailAjout** : Envoie un mail au responsable pour chaque ajout d’une réservation.
Récupère toutes les infos de la réservation.
Appel la fonction **getResponsableParMoyen** de *GestionBdd.php*.
Appel la fonction **RechercheMailResponsable** de *GestionBdd.php*. 
Envoie le mail au différent responsable récupérer via RechercheMailResponsable.

**afficherLesCategorie** :Cherche toutes les catégorie.
Il appelle la fonction **getCategorie** contenu dans *GestionBdd.php* renvoie le résultat.

**envoieMailModif** : Envoie un mail au responsable pour chaque modification d’une réservation.
Récupère toutes les infos de la réservation.
Appel la fonction **getResponsableParMoyen** de *GestionBdd.php*.
Appel la fonction **rechercheMailResponsable** de *GestionBdd.php*. 
Envoie le mail au différent responsable récupérer via RechercheMailResponsable.

