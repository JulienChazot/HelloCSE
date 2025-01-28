<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrator extends Authenticatable
{
    use HasFactory;
    // On informe de la strucutre de base d'un admin
    protected $table = 'administrators';

    protected $fillable = ['name', 'email', 'password'];

    protected $hidden = ['password'];

    public function getNameAttribute()
    {
        return $this->attributes['name'] ?? 'Administrateur'; 
    }
}