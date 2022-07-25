<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    //
    
    protected $table = 'staff';
    public $primaryKey = 'id';
    protected $fillable = [
        'email','phone','twitter','role','role_id','first_name','last_name'
    ];
    
    public $timestamp = true;

}
