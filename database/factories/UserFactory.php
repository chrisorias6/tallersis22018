<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Empresa::class, function (Faker $faker) {
    return [
        'nombre' => $faker->sentence(2),
        'nit' => $faker->integer,
        'telefono' => str_random(10) ,
        'celular' => str_random(10) ,
        'tipo_agencia' => str_random(10),
        'direccion' =>  sentence(2),
        'ciudad' => sentence(2) ,
        'tx_fecha' => time() ,
        'tx_id' => str_random(10) ,
        'tx_host' => str_random(10) ,
    ];
});
