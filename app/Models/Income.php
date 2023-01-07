<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;
    protected $fillable=['name', 'description', 'amount', 'date', 'category', 'image'];

    public function User(){
        return $this->belongsTo('App\Models\User'); 
    }
}