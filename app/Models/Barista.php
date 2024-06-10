<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barista extends Model
{
    protected $table = 'baristas';
    protected $primaryKey = 'id_barista';
    use HasFactory;
}
