<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $fillable = ["label", "class_icon", "link"];
    protected $table = 'socials';
    //

}
