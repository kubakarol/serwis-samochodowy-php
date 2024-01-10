<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zgloszenia extends Model
{
    use HasFactory;
    // app/Models/Zgloszenia.php

    protected $table = 'zgloszenia';


    protected $fillable = ['wlasciciel', 'markaPojazdu', 'modelPojazdu', 'usterka'];
   
    public $timestamps = true;
}
