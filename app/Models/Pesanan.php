<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Pesanan extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'pesanan';
    protected $fillable = [
        'id',
        'pembeliId',
        'menuId',
        'status',
        'jumlah',
        'biaya',
    ];
    public $timestamps = true;

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menuId');
    }

    public function pembeli()
    {
        return $this->belongsTo(Pembeli::class, 'pembeliId');
    }
}
