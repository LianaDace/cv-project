Run

<div align="center">
  <h1>📄 CV BUILDER </h1>
</div>

## Par projektu

````
Šeit ir izveidota lapa ar kuras palīdzību ir iespējams izveidot primitīvu CV. Projektā ir 
iekļauta autorizācijas sistēma, lietotājs var izveidot profilu un autorizēties tajā. 
Kad lietotājs ir autorizējies, ir iespējams izveidot CV, kā arī aplūkot visus savus
izveidotos CV kā arī tos rediģēt un dzēst.
 ````
 <p>
  <img width="400"src="https://github.com/LianaDace/cv-project/blob/main/preview.png">
  <img width="400"src="https://github.com/LianaDace/cv-project/blob/main/add-data.png">
</p>
 
 # Lai uzstādītu šo projektu Jums nepieciešams :
 
````
 - ✅  PHP 8 ⬆️
 - ✅  Composer
 - ✅  Laravel 9
 - ✅  Node.js (v16 ⬆️)
 - ✅  MySql (var izmantot arī citu datubāzi)
 
 ````
---

[Laravel instalācija](https://laravel.com/docs/9.x/installation#getting-started-on-macos) <br>
[Node instalācija](https://nodejs.org/en/)<br>
[Composer instalācija](https://getcomposer.org)<br>
[MySQL instalācija](https://www.mysql.com/downloads/)<br>

---

# Projekta uzstādīšana 

## Komandrindā ievadāmās komandas 

* composer update --no-dev --prefer-dist <br>

* npm install

* npm run dev

````
Ja rodas problēma ar npm iesaku pārbaudīt Node versiju, kā arī projektā palaist komandas:
 * npm run-script 
 
 * npm run dev
````

---
### .env failā jāveic izmaiņas 

<p>
  <img width="300"src="https://github.com/LianaDace/cv-project/blob/main/env.png">
</p>


* Jāievada datubāzes nosaukums (DB_DATABASE) <br>
* Jāievada lietotāja vārds (DB_USERNAME)<br>
* Jāievada lietotāja parole (DB_PASSWORD) <br>

❗️ Gadijumā, ka esiet izvēlējušies neizmantot MySQL veiciet attiecīgās izmaiņas pie DB_CONNECTION

<p> Komandrindā jāievada komanda </p>

* php artisan migrate <br>

* php artisan serv

### Atveriet saiti uz adresi


<p>
  <img width="500"src="https://github.com/LianaDace/cv-project/blob/main/login.png">
</p>
