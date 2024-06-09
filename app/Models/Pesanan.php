<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_pesanan';
    protected $fillable = [
        'id_customer', 'id_menu', 'nama_menu', 'id_reservasi', 'harga_menu', 'jumlah_menu'
    ];

    public function customer()
    {
        return $this->belongsTo(User::class, 'id_customer');
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'id_menu');
    }

    public function reservasi()
    {
        return $this->belongsTo(Reservasi::class, 'id_customer', 'id_customer');
    }

    public function pembayarans()
    {
        return $this->hasMany(Pembayaran::class, 'id_pesanan');
    }
}

