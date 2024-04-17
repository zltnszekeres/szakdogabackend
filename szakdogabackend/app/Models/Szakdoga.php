<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Szakdoga extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable =[

        'szakdoga_nev',
        'githublink',
        'oldallink',
        'tagok_neve'





    ];


}
