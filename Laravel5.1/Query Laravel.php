##Make Product Model And Migration Tabel For Product
<?php
php artisan make:model Category --migration

#Example Query
$flights = App\Flight::where('active', 1)
               ->orderBy('name', 'desc')
               ->take(10)
               ->get();

$flight = App\Flight::where('active', 1)->first();

Flight::chunk(200, function ($flights) {
    foreach ($flights as $flight) {
        //
    }

$count = App\Flight::where('active', 1)->count();

$max = App\Flight::where('active', 1)->max('price');

$comments = App\Post::find(1)->comments;

foreach ($comments as $comment) 
{
    //
}

$bear = Bear::firstOrNew(array('name' => 'Cerms'));
