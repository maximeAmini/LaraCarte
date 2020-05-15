<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class MailContact extends Model
{
    protected $fillable = ['name','email','mess'];
}
