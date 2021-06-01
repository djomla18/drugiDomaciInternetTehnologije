<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utakmica extends Model
{
    use HasFactory;

    protected $table = "utakmica";
    public $timestamps = false;

    public function ulaznice()
    {
        return $this->hasMany(Ulaznica::class);
    }
    public function stadion()
    {
        return $this->belongsTo(Stadion::class);
    }
    public function ima_mesta()
    {

        if ($this->stadion->broj_mesta > $this->popunjeno_mesta) {
            return true;
        }
        return false;
    }
    public function povecaj_popunjena()
    {
        if ($this->ima_mesta()) {
            $this->popunjeno_mesta++;
            $this->save();
            return true;
        }
        return false;
    }
    public function smanji_popunjena()
    {
        if ($this->ima_mesta()) {
            $this->popunjeno_mesta--;
            $this->save();
            return true;
        }
        return false;
    }
}
