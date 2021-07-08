# **Installe Projet**
~~~~
composer install
yarn install
~~~~

# **Setup DB Projet**

Creer un fichier `.env.local` <br>
Aller sur votre base de donnée style PHPMYADMIN <br>

Créer votre DB :  
~~~~
php bin/console doctrine:database:create
php bin/console make:migration
~~~~
Importer le fichier `dataset.sql.zip` <br>

## **Faire jouer la derniere migration** 
~~~~
Version20210708220102.php
~~~~

## **Run Projet**

~~~~
symfony serve | symfony server:start 
yarn watch 
~~~~

## **Different Compte**
3 comptes différents  
~~~~
visitor@mail.com 
password 
~~~~
~~~~
user@mail.com 
password 
~~~~
~~~~
admin@mail.com 
password 
~~~~