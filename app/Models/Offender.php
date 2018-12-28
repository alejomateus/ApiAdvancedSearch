<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offender extends Model
{
    protected $table = 'offender';
    protected $primaryKey = 'id';

    protected $fillable = [
        'first_name',
        'second_name',
        'first_lastname',
        'second_lastname',
        'num_id',
        'birthdate',
        'gender',
        'id_city',
        'url'
    ];
    public function city()
    {
        return $this->belongsTo(City::class, 'id_city', 'id');
    }

}
