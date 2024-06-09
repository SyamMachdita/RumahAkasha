<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;

    protected $table = 'reservasis';
    protected $primaryKey = 'id_reservasi';
    protected $fillable = [
        'id_customer', 'tempat', 'jumlah_orang', 'tanggal', 'jam', 'note'
    ];
    // public $timestamp = false;

    public function customer()
    {
        return $this->belongsTo(User::class, 'id_customer');
    }

    public function pesanans()
    {
        return $this->hasMany(Pesanan::class, 'id_customer', 'id_customer');
    }

    public function pembayarans()
    {
        return $this->hasMany(Pembayaran::class, 'id_reservasi');
    }
}
