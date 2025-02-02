<?php

namespace App;

use App\Applicant;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
//    protected $primaryKey ="cat_id";
    public function applicants()
    {
        return $this->hasMany(Applicant::class);
    }
    protected $fillable = [
        "cat_desc",
        "cat_name",
        "cat_image"
    ];

}
