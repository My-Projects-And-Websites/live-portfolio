<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserEmail extends Model
{
    protected $table = "user_emails";
    public $primaryKey = "id";
    public $timestamps = "true";
}
