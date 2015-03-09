<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ["label", "class_icon", "title"];
    protected $table = 'menus';

    //
    public function posts()
    {
        return $this->belongsToMany('App\Post', 'menu_post');
    }
}
