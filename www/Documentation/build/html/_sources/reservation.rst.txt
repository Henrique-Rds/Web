============
Réservations
============

.. note::
    Nous allons voir ici la page la plus complexe de tout le site, il est conseillé d'utiliser une recherche navigateur (ctrl+f) pour
    retrouver plus facilement les informations qui vous sont nécéssaires.

Events
======

Ce fichier permet de récupérer les événements (réservations) en fonction de différentes options.
Ce fichier est utilisé dans *afficherjournee.php*, *calendrier.php*, *getCalendrier.php*, *getTableau.php*, *GetMoyen.php*, *mesReservation.php*, *supprimerReservation.php*, *tableauReservation.php* et *voirReservation.php*.
Ce fichier import *GestionBdd.php* qui va permettre d’envoyer les requêtes.

**getEventsBetween** : Récupère les évènements qui sont entre deux dates.

**getEventsBetweenByDay** : Récupère les évènements qui sont entre 2 dates indexé par jour.
Il appelle la fonction getEventsBetween contenu dans Events.php.
Pour chaque événement entre les deux dates, on récupère la date de début de l’événement et la date de fin et toutes les autres dates entre date de début et de fin que l’on renvoie.

**getEventsBetweenByDayByMoyen** : Récupère les évènements qui sont entre 2 dates indexé par jour et par moyen.
Il appelle la fonction dateDansUnMoisParMoyen contenu dans GestionBdd.php.
Pour chaque événement entre les deux dates, on récupère la date de début de l’événement et la date de fin et toutes les autres dates entre date de début et de fin que l’on renvoie.

**getEventByDayandCategorie** :Cherche un événement en fonction du jour et d’une catégorie donné.
Il appelle la fonction getParJourEtCategorie contenu dans GestionBdd.php renvoie le résultat.

**getEventByDayandMoyen** :Cherche un événement en fonction du jour et d’un moyen donné.
Il appelle la fonction getParJourEtMoyen contenu dans GestionBdd.php et renvoie le résultat.

**getEventById** :Cherche un événement par son Id .
Il appelle la fonction getRéservationById contenu dans GestionBdd.php renvoie le résultat.

**getMoyenByCategorie** :Cherche tous les moyens de la catégorie.
Il appelle la fonction getMoyenCategorie contenu dans GestionBdd.php renvoie le résultat.

**getResponsable** :Cherche tous les responsables d’un moyen.
Il appelle la fonction getResponsableParMoyen contenu dans GestionBdd.php renvoie le résultat.

**deleteEventById** :Supprimer une réservation par son ID.
Il appelle la fonction deleteReservationById contenu dans GestionBdd.php renvoie le résultat.

**getEventByName** :Cherche tous les événements en fonction de son titre.
Il appelle la fonction getReservationByNom contenu dans GestionBdd.php renvoie le résultat.

**getEventByName** :Cherche tous les événements en fonction de son titre.
Il appelle la fonction getReservationByNom contenu dans GestionBdd.php renvoie le résultat.

**getEventsByCategorie** :Cherche tous les événements en fonction de la catégorie du moyen.
Il appelle la fonction getReservationParCatégorie contenu dans GestionBdd.php renvoie le résultat.

**getEventsByCategorieAndUser** :Cherche tous les événements en fonction de la catégorie du moyen et l’utilisateur.
Il appelle la fonction getReservationParCatégorieEtUtilisateur contenu dans GestionBdd.php renvoie le résultat.

**getEventsByMoyen** :Cherche tous les événements en fonction du moyen.
Il appelle la fonction getReservationParMoyen contenu dans GestionBdd.php renvoie le résultat.

**getEventsByMoyenAndUser** :Cherche tous les événements en fonction du moyen.
Il appelle la fonction getReservationParMoyenEtUtilisateur contenu dans GestionBdd.php renvoie le résultat.

**afficherLesCategorie** :Cherche toutes les catégorie.
Il appelle la fonction getCategorie contenu dans GestionBdd.php renvoie le résultat.

**getUtiEventsByMoyen** :Cherche tous les utilisateurs qui ont réservés le moyen donné.
Il appelle la fonction getUtiReservationParMoyen contenu dans GestionBdd.php renvoie le résultat.

**getUtiEventsByCategorie**:Cherche tous les utilisateurs qui ont réservé un moyen de la catégorie donné. 
Il appelle la fonction getUtiReservationParCatégorie contenu dans GestionBdd.php renvoie le résultat.
