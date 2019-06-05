<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class elpaspirtukai extends Model
{
    protected $fillable = [
        'id',
        'pavadinimas',
        'aprasymas',
        'paveikslelis',
        '_kaina_',
    ];
    protected $table = 'elpaspirtukai';
    public $primaryKey = 'id';
    public $timestamps = false;
}
