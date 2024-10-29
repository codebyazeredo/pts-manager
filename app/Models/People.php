<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'birth',
        'gender',
        'phone',
        'address',
    ];

    public function casts()
    {
        return [
          'name' => 'string',
          'birth' => 'date',
          'gender' => 'string',
          'phone' => 'string',
          'address' => 'string',
        ];
    }
}
