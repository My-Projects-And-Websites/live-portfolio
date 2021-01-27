<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalProject extends Model
{
    protected $table = "personal_projects";
    public $primaryKey = 'id';

    public function details(){
        return $this->hasMany('App\Models\ProjectDetails');
   }
}
