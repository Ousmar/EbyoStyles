<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horaire extends Model
{
    use HasFactory;

    protected $fillable = [
        'jour',
        'heuredebut',
        'heurefin',
    ];


    public function salon(){
        return $this->belongsTo(Salon::class);
    }

}
