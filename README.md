<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).



#####
<!-- Articles -->
php artisan make:model Article -m
php artisan make:controller ArticleController -r
php artisan make:request ArticleRequest


111111111111111111111111111111


composer require laravel/breeze --dev
php artisan breeze:install blade

222222222222222222222222222222
---creation des migrations (les tables)

php artisan make:migration create_blogs_table
php artisan make:migration create_forums_table
php artisan make:migration create_commentaires_table
php artisan make:migration create_apprenants_table
php artisan make:migration create_reinscription_table
php artisan make:migration create_institutions_table

---creation des Models et Controllers en meme temps

php artisan make:model Forum --controller --requests
php artisan make:model User --controller --requests
php artisan make:model Apprenant --controller --requests
php artisan make:model Commentaire --controller --requests
php artisan make:model Reinscription --controller --requests
php artisan make:model Blog --controller --requests
php artisan make:model Institution --controller --requests

---Generer la base de données 
php artisan migrate
php artisan migrate:fresh (si existe deja)

---Afficher la liste des routes
php artisan route::list

--les dependances les plus importants
composer require barryvdh/laravel-debugbar --dev
composer require --dev barryvdh/laravel-ide-helper
php artisan ide-helper:models
php artisan ide-helper:models -M

---for le stockage des images
php artisan storage:link

---no necessary
php artisan ide-helper:generate
php artisan ide-helper:meta

---mail laravel permet de formater des en utilisant markdown

php artisan make:mail PropertyContactMail --markdown=emails.property.contact

|emails.property.contact represent le chemin du fichier|

--------------------------------
si on deja connecter on va masquer le formulaire login aux utilisateurs
pour cela il faut ajouter : 
---sur la route de connection ->middlecware('guest') pour dire qu'il est connecter et 
---sur la route de deconnection ->middlecware('auth') pour dire qu'il n'a qu'a ce connecter
---pour gerer les images afin qu'ils soient sotocker dans le docier public
php artisan storage:link

--------------------------------
---pour gerer les globalScope comme soft deleted il faut ajouter un champ "deleted_at" a la table  

pour ajouter ou supprimer une colonne de globalScope peut utiliser : softDeletes() et dropSoftDeletes()

--- pour l'utisation de seeder : il faut tappez 
php artisan db:seed
php artisan migrate:fresh --seed

on peut donner des arguments comme l'email : 
User::factory()->create([
    'email' => 'thd@gmail.com',
])

---faire pour pouvoir utiliser l'outil vite il faut installer nodejs après : 
"npm i" (pour installer l'ensemble des packages)
"npm run dev" (pour demarer le serveur)
"npm run build" (pour builder les choses)

après pour bootstrap il faut tapez "npm install bootstrap" puis les importer tous dans le fichier app.js
NB : avec de la connexion bien sur

-------------------------------
pour l'utilisation de l'authantification de laravel :
NB : il faut faire cela avant toute chose 
"composer require laravel/breeze --dev"
"php artisan breeze:intall blade"

-------------------------------
la localisation :
php artisan publish (cree plusieurs fichiers sur les quelles se trouve la tradiction de plusieurs langues)

apres avoir installer ca on devrait pourvoir ajouter des langues
composer require laravel-lang/common --dev --ignore-platform-reqs (--ignore-platform-reqs cela permet d'ignorer une extension )

php artisan lang:add fr

sur le site (laravel langues)

--------------------------------
les files d'attentes 
php artisan queue:table (qui cree la migration sur les files d'attentes)

