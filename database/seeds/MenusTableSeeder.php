<?php

use App\Menu;
use Illuminate\Database\Seeder;

// composer require laracasts/testdummy

class MenusTableSeeder extends Seeder
{

    public function run()
    {
        /// TestDummy::times(20)->create('App\Menu');

        Menu::create(['label' => 'home', 'class_icon' => 'icon_home', 'title' => 'Accueil']);
        Menu::create(['label' => 'about', 'class_icon' => 'icon_about', 'title' => 'À propos']);
        Menu::create(['label' => 'expertise', 'class_icon' => 'icon_expertise', 'title' => 'Compétences']);
        Menu::create(['label' => 'reference', 'class_icon' => 'icon_reference', 'title' => 'Références']);
        Menu::create(['label' => 'contact', 'class_icon' => 'icon_contact', 'title' => 'Contact']);



    }

}