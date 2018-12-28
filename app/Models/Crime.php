<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Crime extends Model
{
    protected $table = 'crime';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name'
    ];
}
