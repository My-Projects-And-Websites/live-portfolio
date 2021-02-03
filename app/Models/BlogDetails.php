<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogDetails extends Model
{
    protected $table = "blog_details";

    public function blog() {
        return $this->belongsTo('App\Models\Blog', 'blog_id');
    }
}
