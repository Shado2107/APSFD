<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class membres extends Model
{
    protected $fillable = ['nom','creation','adhesion'];
}
