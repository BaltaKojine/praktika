<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paspirtukai extends Model
{
    protected $fillable = [
        'id',
        'pavadinimas',
        'aprasymas',
        'paveikslelis',
        '_kaina_',
    ];
    protected $table = 'paspirtukai';
    public $primaryKey = 'id';
    public $timestamps = false;
}
