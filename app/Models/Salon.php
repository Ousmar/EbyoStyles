<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salon extends Model
{
    use HasFactory;

    protected $fillable = [
        'genre',
        'adresse',
        'patente',
    ];


    public function photo(){
        return $this->hasMany(Photo::class);
    }
    public function service(){
        return $this->hasMany(Service::class);
    }
    public function horaire(){
        return $this->hasMany(Horaire::class);
    }
    public function employee(){
        return $this->hasMany(Employee::class);
    }
    public function note(){
        return $this->hasMany(Note::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }


}
