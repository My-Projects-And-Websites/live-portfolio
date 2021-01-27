<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectDetails extends Model
{
    protected $table = "project_details";

    public function project() {
        return $this->belongsTo('App\Models\PersonalProject', 'project_id');
    }
}
