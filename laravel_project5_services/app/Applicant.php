<?php

namespace App;
use App\Category;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
protected $primaryKey ="applicant_id";
    public function cat_relation(){
        return $this->hasMany("App\Category");
    }
}
