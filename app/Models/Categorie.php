<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    // protected $table ='categories';
    // protected $fillable = ['name'];
    use HasFactory;
    public function blogs()
    {
        return $this->hasMany(Blog::class, 'category_id', 'id');
    }
}
