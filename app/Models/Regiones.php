<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regiones extends Model
{
    use HasFactory;

    protected $table ="regiones";
    protected $fillable = ['nombre', 'ordinal'];


    public function provincias(){

      return  $this->hasMany(Provincias::class);
    }
}
