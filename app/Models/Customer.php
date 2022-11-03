<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Notifications\Notifiable;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';

    public function city()
{
    return $this->belongsTo(City::class);
}
}
