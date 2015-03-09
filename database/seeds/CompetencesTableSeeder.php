<?php

use App\Category;
use App\Competence;
use Illuminate\Database\Seeder;

// composer require laracasts/testdummy

class CompetencesTableSeeder extends Seeder
{

    public function run()
    {
        // TestDummy::times(20)->create('App\Post');
        $categories = Category::all();

        foreach ($categories as $category) :
            for($i =0 ; $i<4 ; $i++) {
                $competence = Competence::Create(['label' =>'category'.$category->label,'value' => '70']);
                $category->competences()->save($competence);
            }

        endforeach;
    }

}