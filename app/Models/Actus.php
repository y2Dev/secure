<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actus extends Model
{
    use HasFactory;

    protected $fillable=[
        "semaine_id",
        "titre",
        "description",
        "image"] ;
}
