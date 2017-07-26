<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Property::class, function ($faker){
    return [
        'user_id' => function(){
            return factory('App\User')->create()->id;
        } ,
        'title' => $faker->firstName . ' house',
        'status' => function(){
            $array=['sale','rent'];
            return $array[array_rand($array)];
        },
        'type' => function(){
            $array=['commerical','residential'];
            return $array[array_rand($array)];
        },
        'price' => $faker->randomNumber(5),
        'area' => $faker->randomNumber(3),
        'images' => function(){
            $array=['featured-image-12.jpg','featured-image-15.jpg','featured-image-16.jpg','featured-image-17.jpg'];
            return $array[array_rand($array)];
        },
//        'images' => $faker->imageUrl('360', '240', 'city'),
        'address' => $faker->address,
        'state' => $faker->state,
        'city' => $faker->city,
        'postcode' => $faker->postcode,
        'description' => $faker->text,
        'bedroom' => $faker->randomNumber(1),
        'kitchen' => $faker->randomNumber(1),
        'bathroom' => $faker->randomNumber(1),
        'dinningroom' => $faker->randomNumber(1),
        'drawingroom' => $faker->randomNumber(1),
        'garage' => $faker->randomNumber(1),
        'swimmingpool' => (int) $faker->boolean,
        'gym' => (int) $faker-> boolean,
        'firesafety' => (int) $faker->boolean,
        'garden' => (int) $faker->boolean,
        'guesthouse' => (int) $faker->boolean,
        'centralheating' => (int) $faker->boolean,
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'phone' => $faker->e164PhoneNumber
    ];
});

$factory->define(App\Testimonial::class, function($faker) {
    return [
        'user_id' => function(){
            return factory('App\User')->create()->id;
        },
        'name'  =>  $faker->name,
        'designation' => function(){
            $array = ['teacher', 'doctor', 'engineer', 'programmer'];
            return $array[array_rand($array)];
        },
        'company' => $faker->firstName . ' Company',
        'testimonial' => $faker->text,
        'media' => $faker->text
    ];
});