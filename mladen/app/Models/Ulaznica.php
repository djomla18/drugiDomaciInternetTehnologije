<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulaznica extends Model
{
    use HasFactory;
    protected $table = "ulaznica";
    public $timestamps = false;

    public function utakmica()
    {
        return $this->belongsTo('App\Models\Utakmica');
    }
}
