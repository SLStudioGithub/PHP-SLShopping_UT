<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function () {
    return [
        'id' => 1,
        'name' => 'ダミーデータ',
    ];
});
