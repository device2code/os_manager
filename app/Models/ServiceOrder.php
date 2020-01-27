<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceOrder extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'report',
        'solution',
        'date_entry',
        'date_start',
        'date_end',
        'date_exit',
        'value',
        'feedback',
        'status',
        'owner_id',
        'technician_id',
    ];
}
