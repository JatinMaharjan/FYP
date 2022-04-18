<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllTeacher extends Model
{
    use HasFactory;

    protected $table = 'allTeacher';
    protected $primaryKey = 'id';

    public function user(){
        return $this->belongsTo(User::class, 'id');
    }
}
