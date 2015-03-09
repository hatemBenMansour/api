<?php

use Illuminate\Database\Seeder;
use App\Social;
// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class SocialsTableSeeder extends Seeder {

    public function run()
    {
        // TestDummy::times(20)->create('App\Post');
        Social::create([
            'label' => 'linkedin',
            'class_icon' =>'icon_linkedin',
            'link' =>  'https://www.linkedin.com/profile/view?id=60516631&trk=nav_responsive_tab_profile'
        ]);
        Social::create([
            'label' => 'Twitter',
            'class_icon' =>'icon_twitter',
            'link' =>  'https://twitter.com/Hitman2507'
        ]);
        Social::create([
            'label' => 'viadeo',
            'class_icon' =>'icon_viadeo',
            'link' =>  'http://www.viadeo.com/profile/002536hvek9k1k8/'
        ]);
        Social::create([
            'label' => 'cv',
            'class_icon' =>'icon_cv',
            'link' =>  'http://benmansourhatem.com/assets/cv_ben_mansour_hatem.pdf'
        ]);
    }

}