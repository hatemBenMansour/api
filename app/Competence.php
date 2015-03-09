<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{

    protected $fillable = ["label", "value"];
    protected $table = 'competences';


    public function category()
    {
        return $this->hasOne('App\Category', 'category_competence');
    }

}
