<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class emp extends Model
{
    public $table="employee";
    public $timestamps=true;
    public $fillable=['name','designation','department','address','dob','aadhar','bloodgroup','mobile','email'];
}
