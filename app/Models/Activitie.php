<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activitie extends Model
{
    use HasFactory;
    protected $fillable = [
        'data','created_at'
    ];


 public function user()
 {
     return $this->belongsTo('App\Models\User', 'user_id');
 } 

 
}
