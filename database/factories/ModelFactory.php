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

$factory->define(App\Twist::class,function(Faker\Generator $faker){
    return [
        'id' => function(){
             return factory('App\User')->create()->id;
        },
        'user_id' => function(){
            return factory('App\User')->create()->id;
        },
        'body' => $faker->sentence,
        'position' => $faker->sentence,
        'reply_num' => $faker ->numberBetween(0,200),
        'like_num' => $faker ->numberBetween(0,200),
        'is_retwist' => 0, 
        'retwist_id' => $faker ->numberBetween(0,200)
    ];
});

$factory->define(App\Reply::class,function(Faker\Generator $faker){
    return [
        'body' => $faker->sentence,
        'user_id' => function(){
            return factory('App\User')->create()->id;
        },
        'twist_id' => function(){
            return factory('App\Twist')->create()->id;
        },
        'to_who' => 1,
    ];
});


$factory->define(App\Group::class,function(Faker\Generator $faker){
    return [
        'name' => $faker->word,
        'member_num' => mt_rand(10,100)
    ];
});
