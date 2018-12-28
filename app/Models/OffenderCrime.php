<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OffenderCrime extends Model
{
    protected $table = 'offender_crime';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_offender','id_crime'
    ];
    public function offender()
    {
        return $this->belongsTo(Offender::class, 'id_offender', 'id');
    }
    public function crime()
    {
        return $this->belongsTo(Crime::class, 'id_crime', 'id');
    }
}
