<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
    //
    
    protected $table = 'subscribes';
    public $primaryKey = 'id';
    protected $fillable = [
        'email'
    ];
    
    public $timestamp = true;

}
