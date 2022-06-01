<?php

namespace App\Models;

class Vendors extends Model
{

	protected $guarded = [
        'id',
    ];

    protected $fillable = [
        'name',
        'slug',
    ];

    protected $dates = [
        'createdAt',
        'updatedAt',
    ];
}