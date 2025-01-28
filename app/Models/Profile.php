<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    // On informe de la strucutre de base d'un Profil
    protected $table = 'profiles';

    protected $fillable = [
        'first_name',
        'last_name',
        'image',
        'status',
        'administrator_id',
    ];

    public function administrator()
    {
        return $this->belongsTo(Administrator::class);
    }
}
