<?php

namespace App\Models;

Use Illuminate\Database\Eloquent\Model;


class Utilisateur extends Model
{
    protected $fillable = ['email', 'mot_de_passe'];

}
