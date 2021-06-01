<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stadion extends Model
{
    use HasFactory;
    protected $table = "stadion";
    public $timestamps = false;

    public function utakmice()
    {
        return $this->hasMany('App\Models\Utakmica');
    }
}
