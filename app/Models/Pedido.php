<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Pedido extends Model
{
    use HasFactory;
    protected $fillable = [
        'fecha',
        'cantidad',
        'dia',
        'descrip',
        'user_id',
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }
}
