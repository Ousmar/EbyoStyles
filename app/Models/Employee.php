<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'specialite',
        'photo',
    ];

    public function salon(){
        return $this->belongsTo(Salon::class);
    }

    public function rendezVous(){
        return $this->hasMany(RendezVous::class);
    }


}
