<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $table = 'employee';
    protected $fillable = ['fname', 'lname', 'mname', 'age', 'zipcode', 'address'];
    Protected $primaryKey = 'id';
    
}
