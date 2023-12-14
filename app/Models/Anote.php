<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Anote extends Model
{
    use HasFactory;
    protected $fillable = [
        'pantalon',
        'fecha',
        'cantidad',
        'dia',
        'descrip',
        'tipo_pantalon',
        'user_id',
    ];
    public function users(){
        return $this->belongsTo(User::class);
    }
}
