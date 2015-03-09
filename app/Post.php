<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ["label", "short_content", "content", "title", "sub_title"];
    protected $table = 'posts';

    public function menu()
    {
       return $this->hasOne('App\Menu','menu_post');
    }

}
