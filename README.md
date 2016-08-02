# DDD Samples Technical Test
Write a web application using a language / framework of your choice. This web application
should have the following URLs

* /placements . Should present the solution to The Placements Problem.
* /coffeeshop . Should present the solution to The coffee shop problem

#Framework symfony3
The config file routing is an xxxxBundle\Resources\Config\routing.yml 

Installing Dependencies
```
composer install
```

Urls:
* http://localhost/DDD-samples/web/
* http://localhost/DDD-samples/web/coffesshop
* http://localhost/DDD-samples/web/placements

#DDD

Used Domain-driven design for hexagonal architecture, in Bundles Context 
is created Application, Domain and Infrastructure directories.

#PlacementsBundle
Query for placements on names of those students whose best friends got offered a higher salary than them. Names must be ordered by the salary amount offered to the best friends.


![alt tag](http://content.screencast.com/users/Albert-a-a/folders/Jing/media/e589d2f8-fdb9-4be6-8cf6-47a44ac63c0a/00000090.png)

#CoffeeShop

Used pattern decorator [https://en.wikipedia.org/wiki/Decorator_pattern],
and used valued object for currency.

![alt tag](http://content.screencast.com/users/Albert-a-a/folders/Jing/media/878189a6-f9dc-41ab-b7a4-debda9f16136/00000089.png)

Unit test in tests directory: OK (33 tests, 58 assertions)
