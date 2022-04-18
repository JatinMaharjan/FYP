<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;

    protected $table = 'contactus';
    protected $primaryKey = 'id';

    public function user(){
        return $this->belongsTo(User::class, 'id');
    }
}
