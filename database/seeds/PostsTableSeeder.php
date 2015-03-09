<?php

use App\Menu;
use App\Post;
use Illuminate\Database\Seeder;

// composer require laracasts/testdummy

class PostsTableSeeder extends Seeder
{

    public function run()
    {
        Eloquent::unguard();
        $menus = Menu::all();
        foreach ($menus as $menu) :
            if ($menu->label == 'home') {
                $post = Post::create([
                    'label' => $menu->label,
                    'content' => 'Bonjour, je m’appelle<br>{ Ben Mansour Hatem }<br>& <br>je suis un dévéloppeur web, si mon profil vous inétresse n’hésiter pas à me contacter.'
                ]);
            }
            if ($menu->label == 'about') {
                $post = Post::create([
                    'title' => 'Me !',
                    'label' => $menu->label,
                    'short_content' => 'Bienvenue sur mon Portfolio, qui fait le tour d\'horizon de mes compétences dans la conception et le développement des projets web.',
                    'sub_title' => 'Ma spécialité, c\'est la {polyalence}!',
                    'content' => 'laoremsq hqsgd jqsgdqsd'

                ]);
            }
            if ($menu->label == 'expertise') {
                $post = Post::create([
                    'title' => 'Ce que je sais faire !',
                    'label' => $menu->label,
                    'short_content' => 'Voici un récap de mes compétences',
                    'content' => 'laoremsq hqsgd jqsgdqsd'

                ]);
            }
            if ($menu->label == 'reference') {
                $post = Post::create([
                    'title' => 'Quelques projets phares',
                    'label' => $menu->label,
                    'short_content' => 'Voici quelques projets réalisés au sein des agences où j\'ai travaillé',
                    'content' => 'laoremsq hqsgd jqsgdqsd'

                ]);
            }
            if ($menu->label == 'contact') {
                $post = Post::create([
                    'title' => 'Me contacter',
                    'label' => $menu->label,
                    'content' => 'laoremsq hqsgd jqsgdqsd'

                ]);
            }


            $menu->posts()->save($post);
        endforeach;
    }

}