<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    public function categories()
    {
        return $this->belongsTo(Categorie::class,'category_id', 'id');
    }

    public function ordes()
    {
        return $this->belongsToMany(
            Order::class,        //tên clas tham chiếu
            'order_detail',     // tên bảng trung gian
            'blog_id',          // tên của bảng khóa ngoại ở model hiện tại
            'order_id');        // tên của bảng khóa ngoại ở model quan hệ
    }
}

