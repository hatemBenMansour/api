<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = ["label"];
    protected $tabel = 'categories';

    public function competences()
    {
        return $this->belongsToMany('App\Competence', 'category_competence');
    }

}

