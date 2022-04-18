<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ranking extends Model
{
    use HasFactory;

    protected $table = 'rankings';
    protected $primaryKey = 'Rankingid';

    public function user(){
        return $this->belongsTo(User::class, 'id');
    }

}
