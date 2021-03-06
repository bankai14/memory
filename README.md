# Projet
Il s'agit du jeu Memory.

![image](https://user-images.githubusercontent.com/12949266/163209337-9b30bea8-24a0-48ff-a05a-8abb35795426.png)

# Fonctionnalités

● Au commencement du jeu, des cartes sont disposées face cachée à l'écran.

● Le joueur doit cliquer sur deux cartes. Si celles-ci sont identiques, la paire est
validée. Sinon, les cartes sont retournées face cachée, et le joueur doit sélectionner
une nouvelle paire de cartes.

● Une compteur de temps, avec une barre de progression, s’affiche en dessous du
plateau.

● Le joueur gagne s'il arrive à découvrir toutes les paires avant la fin du temps imparti.

● Chaque temps de partie effectuée doit être sauvegardée en base de données.
Avant le début du jeu, les meilleurs temps s’affichent à l’écran.

![image](https://user-images.githubusercontent.com/12949266/163209616-14837ac2-81f0-45e4-a582-8205cc90d68c.png)

# Installation

1. Cloner le projet.
2. Avoir un wamp (« Windows » « Apache » « MySQL » « PHP ») ou lamp pour Linux
3. Récupérer le fichier .sql dans : vendor/sql/memory.sql et rajouter les tables.
4. Paramétrer l'authentification avec la BDD dans : application/config/database.php :

```
'hostname' => 'localhost',
	'username' => 'root',
	'password' => 'root',
	'database' => 'oclock',
```
5. L'installation est terminé se rendre sur : http://localhost/memory/

