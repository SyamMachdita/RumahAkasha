<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registrasiEvent extends Model
{
    use HasFactory;
    protected $table = 'registrasi_event';
    protected $fillable = ['id_event',
    'id_customer'];

    public function customer()
    {
        return $this->belongsTo(User::class, 'id_customer');
    }

    public function event()
    {
        return $this->belongsTo(Event::class, 'id_event');
    }
    public $timestamps = false;
}
