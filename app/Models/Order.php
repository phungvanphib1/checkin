<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public function blogs()
    {
        return $this->belongsToMany(
            Blog::class,    //tên clas tham chiếu
            'order_detail', // tên bảng trung gian
            'order_id',     // tên của bảng khóa ngoại ở model hiện tại
            'blog_id');     // tên của bảng khóa ngoại ở model quan hệ

    }
}
