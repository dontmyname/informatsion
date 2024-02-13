<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animals extends Model
{
    use HasFactory;
protected $table = "animals";

protected $fillable = [
    'name',
    'type',
    'color',

];
public $timestamps = false;
}