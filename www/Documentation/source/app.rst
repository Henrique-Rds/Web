===
App
===

Les dossier Public et Intranet
==============================

Ces deux dossiers seront décrits dans le reste de la documentation.
La principale chose à savoir c'est que tous les fichiers présents dans le dossier App 
sont pour la plus part réutilisés dans la majorité des pages du site.

Le fichier database
===================

Ce fichier à une utilité très simple, il permet la connexion avec la base de donnée.
On peut y retrouver l'id du serveur auquel on souhaite se connecter, le nom du serveur, le pseudo de connexion
ainsi que le mot de passe pour se connecter.
Ces identifiants de connexion sont définis dans des variables réutilisables.

.. note::
    Ce fichier est utilisé dans le fichier *GestionBdd* que nous verrons ci-dessous.

Le fichier GestionBdd
=====================

Le fichier GestionBDD est divisé en deux grandes parties.

La connexion GestionBdd
-----------------------
La première n'est autre que la connexion à la base de donnée grâce à la fonction : fonction __construct()
Les variables **DB_SERVEUR**, **DB_NAME**, **DB_USERNAME** et **DB_PASSWORD** sont définis dans le fichier *database*

Les requêtes SQL
----------------
La deuxième partie contient toutes les requêtes SQL du site ICA.
La plus part de ces requêtes sont commentées pour une compréhension plus simple.
La méthode utilisée pour faire ces requêtes est très simple, elle utilise une base répétitive.

.. code-block:: PHP
    :caption: Code 
        public function getTheses($id){
            $req = $this->bdd->prepare('SELECT th.id, th.date_debut, th.date_soutenance FROM wp_pods_these th, wp_podsrel rel WHERE rel.pod_id = 862 AND rel.field_id = 1380 AND rel.item_id = th.id AND rel.related_item_id = ?');
            $req->execute(array($id));
            return $req;
        }

Dans l'exemple ci-dessus on peut voir que nous préparons la requete en faisant : 
    *$req = $this->bdd->prepare*(**REQUETE**)

Enfin on execute la requete, avec le array les '?' dans la requete seront remplacés par le paramètre de notre fonction.
Si nous avons plusieurs paramètres ils seront remplacés dans l'ordre du array.

Le fichier lang-en
==================
Le fichier lang-fr
==================
Le fichier redirect-admin-user
==============================
Le fichier redirect-user
========================