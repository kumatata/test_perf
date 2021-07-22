# **Instal Project**
~~~~
composer install
yarn install
~~~~

# **Setup DB Project**

Create file 
~~~
.env.local
~~~

Create DB :  
~~~~
php bin/console doctrine:database:create
Import file `dataset.sql.zip`
~~~~
## **Play last migration** : Version20210708220102.php
~~~~
php bin/console doctrine:migrations:migrate 
~~~~

## **Run Project**
~~~~
symfony serve
yarn watch 
~~~~

## **3 Different Accounts**
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