<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = "blogs";
    public $primaryKey = 'id';

    public function blog_details(){
        return $this->hasMany('App\Models\BlogDetails');
   }
}
