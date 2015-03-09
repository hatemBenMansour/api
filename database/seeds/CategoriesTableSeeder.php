<?php

use Illuminate\Database\Seeder;
use App\Category;
// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class CategoriesTableSeeder extends Seeder {

    public function run()
    {
        // TestDummy::times(20)->create('App\Post');
        Category::Create(['label' => 'Langages de programmation']);
        Category::Create(['label' => 'Frameworks']);
        Category::Create(['label' => 'CMS']);
        Category::Create(['label' => 'Outils et IDE']);

    }

}