# READ ME

Projet créé par Julien Chazot pour répondre au test technique de l'entreprise HelloCSE.

Laravel - TailWind - MySQL

## Pour installer TailWind :

npm install tailwindcss @tailwindcss/vite

Si erreur :

Set-ExecutionPolicy -Scope Process -ExecutionPolicy RemoteSigned

Puis refaire npm install tailwindcss @tailwindcss/vite

Editer le fichier vite config :

Ajouter les lignes suivantes :

import tailwindcss from '@tailwindcss/vite'
Dans les imports

tailwindcss(),
Après le crochet ouvert des plugins

Dans app.css (resources/css) ajouter :
@import "tailwindcss";
@source "../views";

Dans app.blade.php rajouter @vite('resources/css/app.css')

Puis lancer 'npm run dev'

## Connection Database

Installer XAMPP et lancer Apache et MySQL
Cliquez sur admin de la ligne MySQL.

Créer une BDD
Le nom de cette BDD créée devrai être inscrite sur le .env sur la ligne database name.

N'oubliez pas de faire un php artisan migrate 

Vous pouvez lancer le projet en local grâce à php artisan serv
