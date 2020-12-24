<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meg extends Model
{
    use HasFactory;
    protected $table = 'meg';
    protected $fillable = ['lastname', 'firstname', 'classe', 'teacher', 'incident'];
}
