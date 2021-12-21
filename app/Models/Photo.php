<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    protected $fillable = [
        'photopath',
    ];

    public function salon(){
        return $this->belongsTo(Salon::class);
    }

}
